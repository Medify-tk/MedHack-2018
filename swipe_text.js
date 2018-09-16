var uk = document.querySelectorAll('#uk li');
var sign = document.querySelector('#sign');
var lastItem = document.querySelector('#uk li.last');
// console.log(lastItem);
lastItem.addEventListener('animationend', function () {
  console.log('end');
  text();
});
console.log(uk.length);

function text() {
  for (var i = 0; i < uk.length; i++) {
    classAddRemove(uk[i], i);
  }
}

function classAddRemove(el, i) {
  el.classList.remove('active');
  setTimeout(function () {
    el.classList.add('active');
  }, i * 1600);
}

// function text() {
//   uk.forEach((el, index) => {
//     el.classList.remove('active');
//     setTimeout(() => {
//       el.classList.add('active');
//     }, (index * 600));
//   });
// }

text();

// var arr1 = [1, 'a', 2, 'b', 3];
// var arr2 = [1, 2, 3];


// var isSuperset = arr2.every(function (val) { return arr1.indexOf(val) >= 0; });
// alert("Should be true -> " + isSuperset);

// arr1 = ['a', 2, 'b', 3];
// arr2 = [1, 2, 3];

// isSuperset = arr2.every(function (val) { return arr1.indexOf(val) >= 0; });
// alert("Should be false -> " + isSuperset);
