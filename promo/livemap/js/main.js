const DOMAIN = '/promo/livemap/'

class Flight {
    constructor () {
        this.makeEnvironment()
        this.addMap()
        this.addSupermans()
        this.addPhotos()
        this.addBuildings()
        this.addClouds()

        this.animate = this.animate.bind(this)
        this.render = this.render.bind(this)
        this.mapPositionByScroll = this.mapPositionByScroll.bind(this)
        this.mapPositionByMouse = this.mapPositionByMouse.bind(this)
        this.clickOnMap = this.clickOnMap.bind(this)
        this.attachEvents()
        this.animate()

        this.interval = null;
    }

    makeEnvironment () {
        this.root = document.getElementById('map')
        this.mapPosition = {x: 0, y: 0}

        this.raycaster = new THREE.Raycaster()
        this.rcPointer = new THREE.Vector2()
        this.activeImage = undefined

        this.scene = new THREE.Scene()

        this.camera = new THREE.PerspectiveCamera(this.getFoV(), this.root.offsetWidth / this.root.offsetHeight, 1, 10000)
        this.camera.position.set(0, 1500, 2200)
        this.camera.lookAt(0, 0, 500)
        this.scene.add(this.camera)

        this.ambientLight = new THREE.AmbientLight(0xffffff, .1)
        this.scene.add(this.ambientLight)

        this.dirLight = new THREE.DirectionalLight(0xffffff, 1)
        this.dirLight.position.set(500, 1500, 500)

        this.scene.add(this.dirLight)

        this.renderer = new THREE.WebGLRenderer({ alpha: true, antialias: false })
        this.renderer.setClearColor(0xfdfcfd, 1)
        this.renderer.setPixelRatio(window.devicePixelRatio)
        this.renderer.setSize(this.root.offsetWidth, this.root.offsetHeight)
        this.root.appendChild(this.renderer.domElement)

        this.postprocessing = { enabled: false }
    }

    getFoV () {
        // magic =)
        return Math.atan(window.innerHeight / window.innerWidth / 2) * 360 / Math.PI - 2
    }

    getMaxScroll () {
        // magic too =)
        // return 2450
        return Math.abs((Math.sin(48 * Math.PI / 180) - Math.sin((48 - this.camera.fov) * Math.PI / 180)) * 1500 + 950 - 4096)
    }

    mapPositionByScroll () {
        this.mapPosition.y = this.getMaxScroll() * (window.pageYOffset / (document.body.offsetHeight - window.innerHeight)) + 1000

        if ((window.innerHeight + $(window).scrollTop()) >= $("body").height()) {
            if (!this.interval) this.startTransitionToTheNextPage();
        } else {
            this.cancelTransition();
        }
    }

    startTransitionToTheNextPage() {
        document.body.classList.add('activate-preloader');
        let n = 0;

        this.interval = setInterval(() => {
            this.preloader(n);
            n+=10;

            if (n > 100) {
                clearInterval(this.interval);
                this.interval = null;
                window.location = `gorky.html`;
            }
        }, 200);
    }

    cancelTransition() {
        document.body.classList.remove('activate-preloader');
        clearInterval(this.interval);
        console.log(this.interval);
        this.interval = null;
        this.preloader(0);
    }

    preloader(progress, context = '.preloader--bottom') {
        var circle = document.querySelector(context).querySelector('circle');
        var radius = circle.r.baseVal.value;
        var circumference = radius * 2 * Math.PI;

        circle.style.strokeDasharray = `${circumference} ${circumference}`;
        circle.style.strokeDashoffset = `${circumference}`;

        const offset = circumference - progress / 100 * circumference;
        circle.style.strokeDashoffset = offset;
    }

    mapPositionByMouse (ev) {
        this.mapPosition.x = (ev.clientX - window.innerWidth / 2) * .075

        this.rcPointer.x = (ev.clientX / window.innerWidth) * 2 - 1
        this.rcPointer.y = -(ev.clientY / window.innerHeight) * 2 + 1
    }

    clickOnMap () {
        if (this.activeImage && this.activeImage !== -1) {
            window.location.href = DOMAIN + this.photos.children[this.activeImage].userData.href
        }
    }

    attachEvents () {
        this.mapPositionByScroll()
        this.root.addEventListener('mousemove', this.mapPositionByMouse)
        this.root.addEventListener('click', this.clickOnMap)
        window.addEventListener('scroll', this.mapPositionByScroll)
        window.addEventListener('resize', () => {
            this.mapPositionByScroll()
            this.camera.aspect = this.root.offsetWidth / this.root.offsetHeight
            this.camera.fov = this.getFoV()
            this.camera.updateProjectionMatrix()
            this.renderer.setSize(this.root.offsetWidth, this.root.offsetHeight)
        });
    }

    animate () {
        window.requestAnimationFrame(this.animate)

        if (this.supermans && this.supermans.length) {
            for (let i = 0; i < this.supermans.length; i += 1) {
                this.supermans[i].position.z -= .5 * this.supermans[i].userData.velocity
                if (this.supermans[i].position.z < -1000) {
                    this.supermans[i].position.z = 3048
                    this.supermans[i].position.x = (Math.random() - .5) * 1024
                }
            }
        }

        this.render()
    }

    render () {
        this.camera.position.setZ(this.mapPosition.y)
        this.camera.position.setX(this.mapPosition.x)
        this.camera.updateProjectionMatrix()

        this.raycaster.setFromCamera(this.rcPointer, this.camera)
        this.checkPhotoHover()

        if (this.postprocessing.enabled) {
            this.postprocessing.composer.render(0.1)
        } else {
            this.renderer.render(this.scene, this.camera)
        }
    }

    addMap () {
        new THREE.TextureLoader().load('./model/map-back-comp.jpg', image => {
            new THREE.TextureLoader().load('./model/map-disp-comp.jpg', dismap => {
                let mesh = new THREE.Mesh(
                    new THREE.PlaneBufferGeometry(2048, 4096, 500, 700),
                    new THREE.MeshPhongMaterial({
                        color: 0xffffff,
                        side: THREE.DoubleSide,
                        map: image,
                        displacementMap: dismap,
                        displacementScale: 150
                    })
                )
                mesh.rotation.x = - Math.PI / 2
                mesh.receiveShadow = true
                mesh.position.set(0, 0, 500)
                this.scene.add(mesh)
            })
        })
    }

    addSupermans () {
        let logos = new THREE.Group()
        logos.position.y = 1050
        this.scene.add(logos)
        this.supermans = []

        let placeSuperman = (superman, x, y) => {
            let sm = superman.clone(),
                scale = 15
            sm.rotation.y = Math.PI / 2
            this.sm = sm
            sm.scale.set(scale, scale / 1, scale)
            sm.castShadow = true
            sm.receiveShadow = false
            sm.position.set(x, (Math.random() - .5) * 500, y)
            sm.userData.velocity = 1 + Math.random()
            logos.add(sm)
            this.supermans.push(sm)
        }

        new THREE.ColladaLoader().load('model/logo.dae', logo => {
            let superman = logo.scene
            for (let i = 0; i < 10; i += 1) {
                let x = (Math.random() - .5) * 1024,
                    y = Math.random() * 4096 - 300
                placeSuperman(superman, x, y)
            }
        })
    }

    addPhotos () {
        this.photos = new THREE.Group()
        this.scene.add(this.photos)
        this.pRef = []

        let black = new THREE.MeshBasicMaterial({ color: 0x000000, transparent: true, opacity: .5 })

        let drawPhoto = (txtr, w, x, y, z, id, href) => {
            txtr.wrapS = THREE.ClampToEdgeWrapping
            txtr.wrapT = THREE.ClampToEdgeWrapping
            txtr.minFilter = THREE.NearestFilter

            let photo = new THREE.Mesh(
                new THREE.BoxBufferGeometry(w, txtr.image.height * w / txtr.image.width, 2),
                [
                    black,
                    black,
                    black,
                    black,
                    new THREE.MeshBasicMaterial({ map: txtr, transparent: false, opacity: 1 }),
                    black
                ]
            )
            photo.position.set(x - 1024, z, y - 2048 + 500)
            photo.userData.altitude = z
            photo.userData.iW = w
            photo.userData.iH = txtr.image.height * w / txtr.image.width
            photo.userData.href = href
            this.photos.add(photo)
            this.pRef[id - 1] = photo
        }

        let placePhoto = (url, w, x, y, z, tags, id, href) => {
            new THREE.ImageLoader().load(url, img => {
                let cnv = document.createElement('canvas')
                cnv.width = img.width
                cnv.height = img.height
                let ctx = cnv.getContext('2d')
                ctx.drawImage(img, 0, 0)

                let txtr = new THREE.CanvasTexture(cnv)
                if (!tags) {
                    drawPhoto(txtr, w, x, y, z, id, href)
                } else {
                    new THREE.ImageLoader().load(url.replace('.jpg', '-tag.png'), img => {
                        ctx.mozImageSmoothingEnabled = true
                        ctx.webkitImageSmoothingEnabled = true
                        ctx.msImageSmoothingEnabled = true
                        ctx.imageSmoothingEnabled = true
                        ctx.drawImage(img, 0, 0, img.width, img.height, 3, cnv.height - img.height * .5 - 3, img.width * .5, img.height * .5)
                        drawPhoto(txtr, w, x, y, z, id, href)
                    })
                }
            })
        }

        placePhoto('./model/photos/biblioteka23.jpg',           210,    490,   1340,   140,     false,      1, 'library.html')
        placePhoto('./model/photos/gorky.jpg',                  525,    500,   3110,   275,     true,       2, 'gorky.html')
        placePhoto('./model/photos/gum.jpg',                    210,    830,   2410,   115,     false,      3, 'gum.html')
        placePhoto('./model/photos/kolomenskoe.jpg',            470,   1100,   3540,   220,     true,       4, 'kolomenskoe.html')
        placePhoto('./model/photos/meridian.jpg',               210,    470,   3530,   165,     false,      5, 'meridian.html')
        placePhoto('./model/photos/moskvich.jpg',               210,   1610,   3125,   100,     false,      6, 'moskvich.html')
        placePhoto('./model/photos/moskvorechye.jpg',           210,    950,   3750,   150,     false,      7, 'moskvorechie.html')
        placePhoto('./model/photos/musical-theater.jpg',        210,    585,   2040,   125,     false,      8, 'nemirovich.html')
        placePhoto('./model/photos/novoslobodsky.jpg',          210,    635,   1435,   135,     false,      9, 'novoslobodskii.html')
        placePhoto('./model/photos/operetta.jpg',               210,    780,   1955,   135,     false,     10, 'operetta.html')
        placePhoto('./model/photos/pedestrian-zone.jpg',        210,   1060,   2150,   135,     false,     11, 'pedestrian-zone.html')
        placePhoto('./model/photos/salut.jpg',                  210,    295,   1425,   140,     false,     12, 'salute.html')
        placePhoto('./model/photos/sovremennik.jpg',            210,   1810,   2240,   125,     false,     13, 'sovremennik.html')
        placePhoto('./model/photos/taganka-actors-theater.jpg', 210,   1545,   2440,   120,     false,     14, 'sodruzestvo.html')
        placePhoto('./model/photos/taganka-theater.jpg',        210,   1565,   2330,   115,     false,     15, 'taganka.html')
        placePhoto('./model/photos/tram-39.jpg',                210,   1300,   2645,   100,     false,     16, 'tram.html')
        placePhoto('./model/photos/tretyakovskaya.jpg',         330,   1215,   2970,   145,     false,     17, 'tretyakovskaya.html')
        placePhoto('./model/photos/tsaritsyno.jpg',             440,   1420,   4000,   225,     true,      18, 'tsaritsyno.html')
        placePhoto('./model/photos/vatutniki.jpg',              210,    310,   3720,   195,     false,     19, 'vatutinki.html')
        placePhoto('./model/photos/VDNKh-fountain.jpg',         210,   1185,   1425,   140,     false,     20, 'phontan-druzhbi.html')
        placePhoto('./model/photos/VDNKh.jpg',                  485,   1365,   1410,   230,     false,     31, 'vdnh.html')
        placePhoto('./model/photos/vorobyovy-gory.jpg',         210,    385,   3290,   170,     false,     32, 'vorobyovy.html')
        placePhoto('./model/photos/young-theater.jpg',          210,    570,   1920,   130,     false,     33, 'tuz.html')
        placePhoto('./model/photos/zaryadye-bridge.jpg',        210,   1080,   2470,   100,     false,     34, 'zaryadie-most.html')
        placePhoto('./model/photos/zaryadye.jpg',               335,   1205,   2365,   150,     false,     35, 'zaryadie.html')
        placePhoto('./model/photos/zelenograd.jpg',             210,    240,   1305,   150,     false,     36, 'zelenograd.html')
        placePhoto('./model/photos/sokolniki.jpg',              500,   1680,   1950,   210,     true,      37, 'sokolniki.html')
        placePhoto('./model/photos/izmaylovskii.jpg',           330,   1740,   2740,   160,     true,      38, 'izmaylovskii.html')
        placePhoto('./model/photos/ermitazh.jpg',               330,    960,   1770,   175,     false,     39, 'ermitazh.html')
        placePhoto('./model/photos/kremlin.jpg',                330,    860,   2300,   160,     false,     40, 'museum.html')
    }

    checkPhotoHover () {
        if (this.photos) {
            let selected = -1
            for (let i = 0; i < this.photos.children.length; i += 1) {
                if (this.raycaster.intersectObject(this.photos.children[i], true).length) {
                    selected = i
                    break
                }
            }
            if (selected === -1) {
                this.activeImage = selected
                document.body.style.cursor = 'default'
            } else if (selected !== this.activeImage) {
                this.activeImage = selected
                document.body.style.cursor = 'pointer'
            }
        }
    }

    addClouds () {
        this.clouds = new THREE.Group()
        this.clouds.position.y = 1400
        this.scene.add(this.clouds)

        let placeCloud = (url, x, y, z, opacity) => {
            new THREE.TextureLoader().load(url, txtr => {
                txtr.wrapS = THREE.ClampToEdgeWrapping
                txtr.wrapT = THREE.ClampToEdgeWrapping
                txtr.minFilter = THREE.NearestFilter

                let cloud = new THREE.Mesh(
                    new THREE.PlaneBufferGeometry(150, 150),
                    new THREE.MeshBasicMaterial({ map: txtr, transparent: true, opacity: opacity })
                )
                cloud.scale.set(2, 2, 2)
                cloud.position.set(x, z, y)
                cloud.rotation.x  = - Math.PI / 2
                this.clouds.add(cloud)
            })
        }

        placeCloud('./model/cloud1.png', -100, 1000, 0, .7)
        placeCloud('./model/cloud2.png',  100, 1500, 0, .7)
        placeCloud('./model/cloud3.png', -100, 2000, 0, .7)
        placeCloud('./model/cloud4.png',  100, 2500, 0, .7)
        placeCloud('./model/cloud1.png', -100, 3000, 0, .7)

        placeCloud('./model/cloud4.png', -200,  700, -300, .5)
        placeCloud('./model/cloud1.png',  300, 1200, -300, .5)
        placeCloud('./model/cloud2.png', -100, 1700, -300, .5)
        placeCloud('./model/cloud3.png',   50, 2200, -300, .5)
        placeCloud('./model/cloud4.png', -300, 2700, -300, .5)
        placeCloud('./model/cloud1.png',  100, 3200, -300, .5)
    }

    addBuildings () {
        this.buildings = new THREE.Group()
        this.scene.add(this.buildings)
        this.bref = {}

        let placeBuilding = (name, x, y, z, yr = 1, scale) => {
            new THREE.ColladaLoader().load('model/' + name + '.dae', collada => {
                let obj = collada.scene
                obj.scale.set(scale, scale, scale)
                obj.position.set(x, z, y)
                obj.rotation.y  = Math.PI * yr
                this.buildings.add(obj)
                this.bref[name] = obj
            })
        }

        placeBuilding('kremlin',            -140,    610,    100,   1.25,    0.1)
        placeBuilding('park-gorkogo',       -330,   1640,    100,   1.00,    0.1)
        placeBuilding('vdnh',                300,      0,     70,   1.00,    0.003)

    }
}

let f = new Flight()
