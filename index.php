<?php session_start() ?>
<!DOCTYPE html>
<html lang="ru" prefix="og: http://ogp.me/ns#">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <meta name="msapplication-tap-highlight" content="no">



<!-- OpenGraph {{{ -->
<meta property="og:type" content="website">
<meta property="og:title" content="Mediffy - проект для тех, кому важно, что происходит в Москве">
<meta property="og:description" content="Ты решаешь! Электронные голосования правительства Москвы.">
<meta property="og:image" content="https://ag.mos.ru/images/ag_logo_20170518.png">
<meta property="og:url" content="https://ag.mos.ru">

<meta property="fb:app_id" content="458539567625458">

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@citizenmoscow">
<!-- }}} OpenGraph -->

<link rel="stylesheet" type="text/css" href="assets/style-Wxx7Weo8rE-hCTbJWTyRZQ.css" />
<link rel="stylesheet" type="text/css" href="bootstrap.css" />
<script type="text/javascript" src="assets/script-0-exzieZT_g3HVK4kmcFmdSQ.js"></script>
<title>Mediffy</title>
<meta name="keywords" content="активный, гражданин, аг, ag">
<meta name="keyphrases" content="Mediffy, аг, электронные референдумы, электронные голосования, ты решаешь, мос ру, mos ru">
<meta name="description" content="Ты решаешь! Электронные голосования правительства Москвы.">

<link rel="icon" type="image/ico" href="images/favicon.ico">
    <!-- Yandex.Metrika counter {{{ -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter24583919 = new Ya.Metrika({id: 24583919, webvisor: true, clickmap: true, trackLinks: true, accurateTrackBounce: true});
                w.yaCounter24742073 = new Ya.Metrika({id: 24742073, webvisor: true, clickmap: true, trackLinks: true, accurateTrackBounce: true, triggerEvent: true});
                w.yaCounter14112952 = new Ya.Metrika({id: 14112952, webvisor: true, clickmap: true, trackLinks: true, accurateTrackBounce: true});
            } catch (e) {
            }
        });
        var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () {
            n.parentNode.insertBefore(s, n);
        };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<link rel="stylesheet" href="swipe_text.css">
<style>
/*--------------------------- Color variations ----------------------*/
/* Medium Layout: 1280px */
/* Tablet Layout: 768px */
/* Mobile Layout: 320px */
/* Wide Mobile Layout: 480px */
/* =================================== */
/*  Basic Style
/* =================================== */
::-moz-selection {
  /* Code for Firefox */
  background-color: #2482ff;
  color: #fff;
}

::selection {
  background-color: #2482ff;
  color: #fff;
}

::-webkit-input-placeholder {
  /* WebKit, Blink, Edge */
  color: #777777;
  font-weight: 300;
}

:-moz-placeholder {
  /* Mozilla Firefox 4 to 18 */
  color: #777777;
  opacity: 1;
  font-weight: 300;
}

::-moz-placeholder {
  /* Mozilla Firefox 19+ */
  color: #777777;
  opacity: 1;
  font-weight: 300;
}

:-ms-input-placeholder {
  /* Internet Explorer 10-11 */
  color: #777777;
  font-weight: 300;
}

::-ms-input-placeholder {
  /* Microsoft Edge */
  color: #777777;
  font-weight: 300;
}

body {
  color: #777777;
  font-family: "Poppins", sans-serif;
  font-size: 14px;
  font-weight: 300;
  line-height: 1.625em;
  position: relative;
}

ol, ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

select {
  display: block;
}

figure {
  margin: 0;
}

a {
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

iframe {
  border: 0;
}

a, a:focus, a:hover {
  text-decoration: none;
  outline: 0;
}

.btn.active.focus,
.btn.active:focus,
.btn.focus,
.btn.focus:active,
.btn:active:focus,
.btn:focus {
  text-decoration: none;
  outline: 0;
}

.card-panel {
  margin: 0;
  padding: 60px;
}

/**
 *  Typography
 *
 **/
.btn i, .btn-large i, .btn-floating i, .btn-large i, .btn-flat i {
  font-size: 1em;
  line-height: inherit;
}

.gray-bg {
  background: #f9f9ff;
}

h1, h2, h3,
h4, h5, h6 {
  font-family: "Poppins", sans-serif;
  color: #222222;
  line-height: 1.2em !important;
  margin-bottom: 0;
  margin-top: 0;
  font-weight: 600;
}

.h1, .h2, .h3,
.h4, .h5, .h6 {
  margin-bottom: 0;
  margin-top: 0;
  font-family: "Poppins", sans-serif;
  font-weight: 600;
  color: #222222;
}

h1, .h1 {
  font-size: 36px;
}

h2, .h2 {
  font-size: 30px;
}

h3, .h3 {
  font-size: 24px;
}

h4, .h4 {
  font-size: 20px;
}

h5, .h5 {
  font-size: 16px;
}

h6, .h6 {
  font-size: 14px;
  color: #222222;
}

td, th {
  border-radius: 0px;
}

/**
 * For modern browsers
 * 1. The space content is one way to avoid an Opera bug when the
 *    contenteditable attribute is included anywhere else in the document.
 *    Otherwise it causes space to appear at the top and bottom of elements
 *    that are clearfixed.
 * 2. The use of `table` rather than `block` is only necessary if using
 *    `:before` to contain the top-margins of child elements.
 */
.clear::before, .clear::after {
  content: " ";
  display: table;
}

.clear::after {
  clear: both;
}

.fz-11 {
  font-size: 11px;
}

.fz-12 {
  font-size: 12px;
}

.fz-13 {
  font-size: 13px;
}

.fz-14 {
  font-size: 14px;
}

.fz-15 {
  font-size: 15px;
}

.fz-16 {
  font-size: 16px;
}

.fz-18 {
  font-size: 18px;
}

.fz-30 {
  font-size: 30px;
}

.fz-48 {
  font-size: 48px !important;
}

.fw100 {
  font-weight: 100;
}

.fw300 {
  font-weight: 300;
}

.fw400 {
  font-weight: 400 !important;
}

.fw500 {
  font-weight: 500;
}

.f700 {
  font-weight: 700;
}

.fsi {
  font-style: italic;
}

.mt-10 {
  margin-top: 10px;
}

.mt-15 {
  margin-top: 15px;
}

.mt-20 {
  margin-top: 20px;
}

.mt-25 {
  margin-top: 25px;
}

.mt-30 {
  margin-top: 30px;
}

.mt-35 {
  margin-top: 35px;
}

.mt-40 {
  margin-top: 40px;
}

.mt-50 {
  margin-top: 50px;
}

.mt-60 {
  margin-top: 60px;
}

.mt-70 {
  margin-top: 70px;
}

.mt-80 {
  margin-top: 80px;
}

.mt-100 {
  margin-top: 100px;
}

.mt-120 {
  margin-top: 120px;
}

.mt-150 {
  margin-top: 150px;
}

.ml-0 {
  margin-left: 0 !important;
}

.ml-5 {
  margin-left: 5px !important;
}

.ml-10 {
  margin-left: 10px;
}

.ml-15 {
  margin-left: 15px;
}

.ml-20 {
  margin-left: 20px;
}

.ml-30 {
  margin-left: 30px;
}

.ml-50 {
  margin-left: 50px;
}

.mr-0 {
  margin-right: 0 !important;
}

.mr-5 {
  margin-right: 5px !important;
}

.mr-15 {
  margin-right: 15px;
}

.mr-10 {
  margin-right: 10px;
}

.mr-20 {
  margin-right: 20px;
}

.mr-30 {
  margin-right: 30px;
}

.mr-50 {
  margin-right: 50px;
}

.mb-0 {
  margin-bottom: 0px;
}

.mb-0-i {
  margin-bottom: 0px !important;
}

.mb-5 {
  margin-bottom: 5px;
}

.mb-10 {
  margin-bottom: 10px;
}

.mb-15 {
  margin-bottom: 15px;
}

.mb-20 {
  margin-bottom: 20px;
}

.mb-25 {
  margin-bottom: 25px;
}

.mb-30 {
  margin-bottom: 30px;
}

.mb-40 {
  margin-bottom: 40px;
}

.mb-50 {
  margin-bottom: 50px;
}

.mb-60 {
  margin-bottom: 60px;
}

.mb-70 {
  margin-bottom: 70px;
}

.mb-80 {
  margin-bottom: 80px;
}

.mb-90 {
  margin-bottom: 90px;
}

.mb-100 {
  margin-bottom: 100px;
}

.pt-0 {
  padding-top: 0px;
}

.pt-10 {
  padding-top: 10px;
}

.pt-15 {
  padding-top: 15px;
}

.pt-20 {
  padding-top: 20px;
}

.pt-25 {
  padding-top: 25px;
}

.pt-30 {
  padding-top: 30px;
}

.pt-40 {
  padding-top: 40px;
}

.pt-50 {
  padding-top: 50px;
}

.pt-60 {
  padding-top: 60px;
}

.pt-70 {
  padding-top: 70px;
}

.pt-80 {
  padding-top: 80px;
}

.pt-90 {
  padding-top: 90px;
}

.pt-100 {
  padding-top: 100px;
}

.pt-120 {
  padding-top: 120px;
}

.pt-150 {
  padding-top: 150px;
}

.pb-0 {
  padding-bottom: 0px;
}

.pb-10 {
  padding-bottom: 10px;
}

.pb-15 {
  padding-bottom: 15px;
}

.pb-20 {
  padding-bottom: 20px;
}

.pb-25 {
  padding-bottom: 25px;
}

.pb-30 {
  padding-bottom: 30px;
}

.pb-40 {
  padding-bottom: 40px;
}

.pb-50 {
  padding-bottom: 50px;
}

.pb-60 {
  padding-bottom: 60px;
}

.pb-70 {
  padding-bottom: 70px;
}

.pb-80 {
  padding-bottom: 80px;
}

.pb-90 {
  padding-bottom: 90px;
}

.pb-100 {
  padding-bottom: 100px;
}

.pb-120 {
  padding-bottom: 120px;
}

.pb-150 {
  padding-bottom: 150px;
}

.pr-30 {
  padding-right: 30px;
}

.pl-30 {
  padding-left: 30px;
}

.pl-90 {
  padding-left: 90px;
}

.p-40 {
  padding: 40px;
}

.float-left {
  float: left;
}

.float-right {
  float: right;
}

.text-italic {
  font-style: italic;
}

.text-white {
  color: #fff;
}

.transition {
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.section-full {
  padding: 100px 0;
}

.section-half {
  padding: 75px 0;
}

.text-center {
  text-align: center;
}

.text-left {
  text-align: left;
}

.text-rigth {
  text-align: right;
}

.flex {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display: flex;
}

.inline-flex {
  display: -webkit-inline-box;
  display: -webkit-inline-flex;
  display: -moz-inline-flex;
  display: -ms-inline-flexbox;
  display: inline-flex;
}

.flex-grow {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
  -moz-flex-grow: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
}

.flex-wrap {
  -webkit-flex-wrap: wrap;
  -moz-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}

.flex-left {
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  -webkit-justify-content: flex-start;
  -moz-justify-content: flex-start;
  justify-content: flex-start;
}

.flex-middle {
  -webkit-box-align: center;
  -ms-flex-align: center;
  -webkit-align-items: center;
  -moz-align-items: center;
  align-items: center;
}

.flex-right {
  -webkit-box-pack: end;
  -ms-flex-pack: end;
  -webkit-justify-content: flex-end;
  -moz-justify-content: flex-end;
  justify-content: flex-end;
}

.flex-top {
  -webkit-align-self: flex-start;
  -moz-align-self: flex-start;
  -ms-flex-item-align: start;
  align-self: flex-start;
}

.flex-center {
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  justify-content: center;
}

.flex-bottom {
  -webkit-align-self: flex-end;
  -moz-align-self: flex-end;
  -ms-flex-item-align: end;
  align-self: flex-end;
}

.space-between {
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  -webkit-justify-content: space-between;
  -moz-justify-content: space-between;
  justify-content: space-between;
}

.space-around {
  -ms-flex-pack: distribute;
  -webkit-justify-content: space-around;
  -moz-justify-content: space-around;
  justify-content: space-around;
}

.flex-column {
  -webkit-box-direction: normal;
  -webkit-box-orient: vertical;
  -webkit-flex-direction: column;
  -moz-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
}

.flex-cell {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
  -moz-flex-grow: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
}

.display-table {
  display: table;
}

.light {
  color: #fff;
}

.dark {
  color: #000;
}

.relative {
  position: relative;
}

.overflow-hidden {
  overflow: hidden;
}

.overlay {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

.container.fullwidth {
  width: 100%;
}

.container.no-padding {
  padding-left: 0;
  padding-right: 0;
}

.no-padding {
  padding: 0;
}

.section-bg {
  background: #f9fafc;
}

@media (max-width: 767px) {
  .no-flex-xs {
    display: block !important;
  }
}

.row.no-margin {
  margin-left: 0;
  margin-right: 0;
}

.sample-text-area {
  background: #fff;
  padding: 100px 0 70px 0;
}

.text-heading {
  margin-bottom: 30px;
  font-size: 24px;
}

b, i, sup, sub, u, del {
  color: #fcd2ff;
}

h1 {
  font-size: 36px;
}

h2 {
  font-size: 30px;
}

h3 {
  font-size: 24px;
}

h4 {
  font-size: 18px;
}

h5 {
  font-size: 16px;
}

h6 {
  font-size: 14px;
}

h1, h2, h3, h4, h5, h6 {
  line-height: 1.5em;
}

.typography h1, .typography h2, .typography h3, .typography h4, .typography h5, .typography h6 {
  color: #777777;
}

.button-area {
  background: #fff;
}

.button-area .border-top-generic {
  padding: 70px 15px;
  border-top: 1px dotted #eee;
}

.button-group-area .genric-btn {
  margin-right: 10px;
  margin-top: 10px;
}

.button-group-area .genric-btn:last-child {
  margin-right: 0;
}

.genric-btn {
  display: inline-block;
  outline: none;
  line-height: 40px;
  padding: 0 30px;
  font-size: .8em;
  text-align: center;
  text-decoration: none;
  font-weight: 500;
  cursor: pointer;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.genric-btn:focus {
  outline: none;
}

.genric-btn.e-large {
  padding: 0 40px;
  line-height: 50px;
}

.genric-btn.large {
  line-height: 45px;
}

.genric-btn.medium {
  line-height: 30px;
}

.genric-btn.small {
  line-height: 25px;
}

.genric-btn.radius {
  border-radius: 3px;
}

.genric-btn.circle {
  border-radius: 20px;
}

.genric-btn.arrow {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
}

.genric-btn.arrow span {
  margin-left: 10px;
}

.genric-btn.default {
  color: #222222;
  background: #f9f9ff;
  border: 1px solid transparent;
}

.genric-btn.default:hover {
  border: 1px solid #f9f9ff;
  background: #fff;
}

.genric-btn.default-border {
  border: 1px solid #f9f9ff;
  background: #fff;
}

.genric-btn.default-border:hover {
  color: #222222;
  background: #f9f9ff;
  border: 1px solid transparent;
}

.genric-btn.primary {
  color: #fff;
  background: #fcd2ff;
  border: 1px solid transparent;
}

.genric-btn.primary:hover {
  color: #fcd2ff;
  border: 1px solid #fcd2ff;
  background: #fff;
}

.genric-btn.primary-border {
  color: #fcd2ff;
  border: 1px solid #fcd2ff;
  background: #fff;
}

.genric-btn.primary-border:hover {
  color: #fff;
  background: #fcd2ff;
  border: 1px solid transparent;
}

.genric-btn.success {
  color: #fff;
  background: #4cd3e3;
  border: 1px solid transparent;
}

.genric-btn.success:hover {
  color: #4cd3e3;
  border: 1px solid #4cd3e3;
  background: #fff;
}

.genric-btn.success-border {
  color: #4cd3e3;
  border: 1px solid #4cd3e3;
  background: #fff;
}

.genric-btn.success-border:hover {
  color: #fff;
  background: #4cd3e3;
  border: 1px solid transparent;
}

.genric-btn.info {
  color: #fff;
  background: #38a4ff;
  border: 1px solid transparent;
}

.genric-btn.info:hover {
  color: #38a4ff;
  border: 1px solid #38a4ff;
  background: #fff;
}

.genric-btn.info-border {
  color: #38a4ff;
  border: 1px solid #38a4ff;
  background: #fff;
}

.genric-btn.info-border:hover {
  color: #fff;
  background: #38a4ff;
  border: 1px solid transparent;
}

.genric-btn.warning {
  color: #fff;
  background: #f4e700;
  border: 1px solid transparent;
}

.genric-btn.warning:hover {
  color: #f4e700;
  border: 1px solid #f4e700;
  background: #fff;
}

.genric-btn.warning-border {
  color: #f4e700;
  border: 1px solid #f4e700;
  background: #fff;
}

.genric-btn.warning-border:hover {
  color: #fff;
  background: #f4e700;
  border: 1px solid transparent;
}

.genric-btn.danger {
  color: #fff;
  background: #f44a40;
  border: 1px solid transparent;
}

.genric-btn.danger:hover {
  color: #f44a40;
  border: 1px solid #f44a40;
  background: #fff;
}

.genric-btn.danger-border {
  color: #f44a40;
  border: 1px solid #f44a40;
  background: #fff;
}

.genric-btn.danger-border:hover {
  color: #fff;
  background: #f44a40;
  border: 1px solid transparent;
}

.genric-btn.link {
  color: #222222;
  background: #f9f9ff;
  text-decoration: underline;
  border: 1px solid transparent;
}

.genric-btn.link:hover {
  color: #222222;
  border: 1px solid #f9f9ff;
  background: #fff;
}

.genric-btn.link-border {
  color: #222222;
  border: 1px solid #f9f9ff;
  background: #fff;
  text-decoration: underline;
}

.genric-btn.link-border:hover {
  color: #222222;
  background: #f9f9ff;
  border: 1px solid transparent;
}

.genric-btn.disable {
  color: #222222, 0.3;
  background: #f9f9ff;
  border: 1px solid transparent;
  cursor: not-allowed;
}

.generic-blockquote {
  padding: 30px 50px 30px 30px;
  background: #f9f9ff;
  border-left: 2px solid #fcd2ff;
}

.progress-table-wrap {
  overflow-x: scroll;
}

.progress-table {
  background: #f9f9ff;
  padding: 15px 0px 30px 0px;
  min-width: 800px;
}

.progress-table .serial {
  width: 11.83%;
  padding-left: 30px;
}

.progress-table .country {
  width: 28.07%;
}

.progress-table .visit {
  width: 19.74%;
}

.progress-table .percentage {
  width: 40.36%;
  padding-right: 50px;
}

.progress-table .table-head {
  display: flex;
}

.progress-table .table-head .serial, .progress-table .table-head .country, .progress-table .table-head .visit, .progress-table .table-head .percentage {
  color: #222222;
  line-height: 40px;
  text-transform: uppercase;
  font-weight: 500;
}

.progress-table .table-row {
  padding: 15px 0;
  border-top: 1px solid #edf3fd;
  display: flex;
}

.progress-table .table-row .serial, .progress-table .table-row .country, .progress-table .table-row .visit, .progress-table .table-row .percentage {
  display: flex;
  align-items: center;
}

.progress-table .table-row .country img {
  margin-right: 15px;
}

.progress-table .table-row .percentage .progress {
  width: 80%;
  border-radius: 0px;
  background: transparent;
}

.progress-table .table-row .percentage .progress .progress-bar {
  height: 5px;
  line-height: 5px;
}

.progress-table .table-row .percentage .progress .progress-bar.color-1 {
  background-color: #6382e6;
}

.progress-table .table-row .percentage .progress .progress-bar.color-2 {
  background-color: #e66686;
}

.progress-table .table-row .percentage .progress .progress-bar.color-3 {
  background-color: #f09359;
}

.progress-table .table-row .percentage .progress .progress-bar.color-4 {
  background-color: #73fbaf;
}

.progress-table .table-row .percentage .progress .progress-bar.color-5 {
  background-color: #73fbaf;
}

.progress-table .table-row .percentage .progress .progress-bar.color-6 {
  background-color: #6382e6;
}

.progress-table .table-row .percentage .progress .progress-bar.color-7 {
  background-color: #a367e7;
}

.progress-table .table-row .percentage .progress .progress-bar.color-8 {
  background-color: #e66686;
}

.single-gallery-image {
  margin-top: 30px;
  background-repeat: no-repeat !important;
  background-position: center center !important;
  background-size: cover !important;
  height: 200px;
}

.list-style {
  width: 14px;
  height: 14px;
}

.unordered-list li {
  position: relative;
  padding-left: 30px;
  line-height: 1.82em !important;
}

.unordered-list li:before {
  content: "";
  position: absolute;
  width: 14px;
  height: 14px;
  border: 3px solid #fcd2ff;
  background: #fff;
  top: 4px;
  left: 0;
  border-radius: 50%;
}

.ordered-list {
  margin-left: 30px;
}

.ordered-list li {
  list-style-type: decimal-leading-zero;
  color: #fcd2ff;
  font-weight: 500;
  line-height: 1.82em !important;
}

.ordered-list li span {
  font-weight: 300;
  color: #777777;
}

.ordered-list-alpha li {
  margin-left: 30px;
  list-style-type: lower-alpha;
  color: #fcd2ff;
  font-weight: 500;
  line-height: 1.82em !important;
}

.ordered-list-alpha li span {
  font-weight: 300;
  color: #777777;
}

.ordered-list-roman li {
  margin-left: 30px;
  list-style-type: lower-roman;
  color: #fcd2ff;
  font-weight: 500;
  line-height: 1.82em !important;
}

.ordered-list-roman li span {
  font-weight: 300;
  color: #777777;
}

.single-input {
  display: block;
  width: 100%;
  line-height: 40px;
  border: none;
  outline: none;
  background: #f9f9ff;
  padding: 0 20px;
}

.single-input:focus {
  outline: none;
}

.input-group-icon {
  position: relative;
}

.input-group-icon .icon {
  position: absolute;
  left: 20px;
  top: 0;
  line-height: 40px;
  z-index: 3;
}

.input-group-icon .icon i {
  color: #797979;
}

.input-group-icon .single-input {
  padding-left: 45px;
}

.single-textarea {
  display: block;
  width: 100%;
  line-height: 40px;
  border: none;
  outline: none;
  background: #f9f9ff;
  padding: 0 20px;
  height: 100px;
  resize: none;
}

.single-textarea:focus {
  outline: none;
}

.single-input-primary {
  display: block;
  width: 100%;
  line-height: 40px;
  border: 1px solid transparent;
  outline: none;
  background: #f9f9ff;
  padding: 0 20px;
}

.single-input-primary:focus {
  outline: none;
  border: 1px solid #fcd2ff;
}

.single-input-accent {
  display: block;
  width: 100%;
  line-height: 40px;
  border: 1px solid transparent;
  outline: none;
  background: #f9f9ff;
  padding: 0 20px;
}

.single-input-accent:focus {
  outline: none;
  border: 1px solid #eb6b55;
}

.single-input-secondary {
  display: block;
  width: 100%;
  line-height: 40px;
  border: 1px solid transparent;
  outline: none;
  background: #f9f9ff;
  padding: 0 20px;
}

.single-input-secondary:focus {
  outline: none;
  border: 1px solid #f09359;
}

.default-switch {
  width: 35px;
  height: 17px;
  border-radius: 8.5px;
  background: #f9f9ff;
  position: relative;
  cursor: pointer;
}

.default-switch input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  cursor: pointer;
}

.default-switch input + label {
  position: absolute;
  top: 1px;
  left: 1px;
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background: #fcd2ff;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.2);
  cursor: pointer;
}

.default-switch input:checked + label {
  left: 19px;
}

.primary-switch {
  width: 35px;
  height: 17px;
  border-radius: 8.5px;
  background: #f9f9ff;
  position: relative;
  cursor: pointer;
}

.primary-switch input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.primary-switch input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
}

.primary-switch input + label:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  background: transparent;
  border-radius: 8.5px;
  cursor: pointer;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
}

.primary-switch input + label:after {
  content: "";
  position: absolute;
  top: 1px;
  left: 1px;
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background: #fff;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.2);
  cursor: pointer;
}

.primary-switch input:checked + label:after {
  left: 19px;
}

.primary-switch input:checked + label:before {
  background: #fcd2ff;
}

.confirm-switch {
  width: 35px;
  height: 17px;
  border-radius: 8.5px;
  background: #f9f9ff;
  position: relative;
  cursor: pointer;
}

.confirm-switch input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.confirm-switch input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
}

.confirm-switch input + label:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  background: transparent;
  border-radius: 8.5px;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  cursor: pointer;
}

.confirm-switch input + label:after {
  content: "";
  position: absolute;
  top: 1px;
  left: 1px;
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background: #fff;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  box-shadow: 0px 4px 5px 0px rgba(0, 0, 0, 0.2);
  cursor: pointer;
}

.confirm-switch input:checked + label:after {
  left: 19px;
}

.confirm-switch input:checked + label:before {
  background: #4cd3e3;
}

.primary-checkbox {
  width: 16px;
  height: 16px;
  border-radius: 3px;
  background: #f9f9ff;
  position: relative;
  cursor: pointer;
}

.primary-checkbox input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.primary-checkbox input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 3px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.primary-checkbox input:checked + label {
  background: url(../img/elements/primary-check.png) no-repeat center center/cover;
  border: none;
}

.confirm-checkbox {
  width: 16px;
  height: 16px;
  border-radius: 3px;
  background: #f9f9ff;
  position: relative;
  cursor: pointer;
}

.confirm-checkbox input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.confirm-checkbox input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 3px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.confirm-checkbox input:checked + label {
  background: url(../img/elements/success-check.png) no-repeat center center/cover;
  border: none;
}

.disabled-checkbox {
  width: 16px;
  height: 16px;
  border-radius: 3px;
  background: #f9f9ff;
  position: relative;
  cursor: pointer;
}

.disabled-checkbox input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.disabled-checkbox input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 3px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.disabled-checkbox input:disabled {
  cursor: not-allowed;
  z-index: 3;
}

.disabled-checkbox input:checked + label {
  background: url(../img/elements/disabled-check.png) no-repeat center center/cover;
  border: none;
}

.primary-radio {
  width: 16px;
  height: 16px;
  border-radius: 8px;
  background: #f9f9ff;
  position: relative;
  cursor: pointer;
}

.primary-radio input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.primary-radio input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 8px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.primary-radio input:checked + label {
  background: url(../img/elements/primary-radio.png) no-repeat center center/cover;
  border: none;
}

.confirm-radio {
  width: 16px;
  height: 16px;
  border-radius: 8px;
  background: #f9f9ff;
  position: relative;
  cursor: pointer;
}

.confirm-radio input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.confirm-radio input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 8px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.confirm-radio input:checked + label {
  background: url(../img/elements/success-radio.png) no-repeat center center/cover;
  border: none;
}

.disabled-radio {
  width: 16px;
  height: 16px;
  border-radius: 8px;
  background: #f9f9ff;
  position: relative;
  cursor: pointer;
}

.disabled-radio input {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
}

.disabled-radio input + label {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  border-radius: 8px;
  cursor: pointer;
  border: 1px solid #f1f1f1;
}

.disabled-radio input:disabled {
  cursor: not-allowed;
  z-index: 3;
}

.disabled-radio input:checked + label {
  background: url(../img/elements/disabled-radio.png) no-repeat center center/cover;
  border: none;
}

.default-select {
  height: 40px;
}

.default-select .nice-select {
  border: none;
  border-radius: 0px;
  height: 40px;
  background: #f9f9ff;
  padding-left: 20px;
  padding-right: 40px;
}

.default-select .nice-select .list {
  margin-top: 0;
  border: none;
  border-radius: 0px;
  box-shadow: none;
  width: 100%;
  padding: 10px 0 10px 0px;
}

.default-select .nice-select .list .option {
  font-weight: 300;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  line-height: 28px;
  min-height: 28px;
  font-size: 12px;
  padding-left: 20px;
}

.default-select .nice-select .list .option.selected {
  color: #fcd2ff;
  background: transparent;
}

.default-select .nice-select .list .option:hover {
  color: #fcd2ff;
  background: transparent;
}

.default-select .current {
  margin-right: 50px;
  font-weight: 300;
}

.default-select .nice-select::after {
  right: 20px;
}

.form-select {
  height: 40px;
  width: 100%;
}

.form-select .nice-select {
  border: none;
  border-radius: 0px;
  height: 40px;
  background: #f9f9ff;
  padding-left: 45px;
  padding-right: 40px;
  width: 100%;
}

.form-select .nice-select .list {
  margin-top: 0;
  border: none;
  border-radius: 0px;
  box-shadow: none;
  width: 100%;
  padding: 10px 0 10px 0px;
}

.form-select .nice-select .list .option {
  font-weight: 300;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  line-height: 28px;
  min-height: 28px;
  font-size: 12px;
  padding-left: 45px;
}

.form-select .nice-select .list .option.selected {
  color: #fcd2ff;
  background: transparent;
}

.form-select .nice-select .list .option:hover {
  color: #fcd2ff;
  background: transparent;
}

.form-select .current {
  margin-right: 50px;
  font-weight: 300;
}

.form-select .nice-select::after {
  right: 20px;
}

body {
  position: relative;
}

.default-header {
  padding: 5px 0;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 9;
}

.menu-bar {
  cursor: pointer;
}

.menu-bar span {
  color: #000;
  font-size: 24px;
}

.main-menubar {
  position: relative;
}

nav {
  margin-right: 70px;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  transform-origin: 100% 50%;
}

@media (max-width: 767px) {
  nav {
    margin-right: 0;
    position: absolute;
    right: 0;
    top: 47px;
    text-align: right;
    padding: 20px 0;
    z-index: 5;
    background: #fff;
  }
  nav a {
    color: #2482ff !important;
  }
  nav a:hover {
    color: #2482ff;
  }
}

nav.hide {
  transform: scale(0);
}

nav a {
  color: #000;
  font-size: 12px;
  font-weight: 500;
  text-transform: uppercase;
  margin: 0 25px;
  display: inline-block;
}

@media (max-width: 767px) {
  nav a {
    margin: 5px 25px;
  }
}

nav a:hover {
  color: #2482ff;
}

.section-gap {
  padding: 120px 0;
}

.section-title {
  padding-bottom: 30px;
}

.section-title h2 {
  margin-bottom: 20px;
}

.section-title p {
  font-size: 16px;
  margin-bottom: 0;
}

@media (max-width: 991px) {
  .section-title p br {
    display: none;
  }
}

.lnr {
  font-weight: 700;
}

.p1-gradient-bg, .primary-btn, .primary-btn:after, .primary-btn2:after, .single-con .content .content-overlay, .footer-social a:hover, .single-footer-widget .bb-btn {
  background-image: -moz-linear-gradient(0deg, #2380ff 0%, #52fdd9 100%);
  background-image: -webkit-linear-gradient(0deg, #2380ff 0%, #52fdd9 100%);
  background-image: -ms-linear-gradient(0deg, #2380ff 0%, #52fdd9 100%);
}

.p2-gradient-bg {
  background-image: -moz-linear-gradient(0deg, #f40f68 0%, #f86e3d 55%, #fbcd11 100%);
  background-image: -webkit-linear-gradient(0deg, #f40f68 0%, #f86e3d 55%, #fbcd11 100%);
  background-image: -ms-linear-gradient(0deg, #f40f68 0%, #f86e3d 55%, #fbcd11 100%);
  opacity: .5;
}

.p1-gradient-color, .banner-content h1, .single-fact h2, .single-footer-widget h3 {
  background: -moz-linear-gradient(0deg, #2380ff 0%, #52fdd9 100%);
  background: -webkit-linear-gradient(0deg, #2380ff 0%, #52fdd9 100%);
  background: -ms-linear-gradient(0deg, #2380ff 0%, #52fdd9 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.primary-btn {
  line-height: 42px;
  padding-left: 30px;
  padding-right: 60px;
  border-radius: 25px;
  border: none;
  color: #fff;
  display: inline-block;
  font-weight: 500;
  position: relative;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  cursor: pointer;
}

.primary-btn:focus {
  outline: none;
}

.primary-btn span {
  color: #fff;
  position: absolute;
  top: 50%;
  transform: translateY(-60%);
  right: 30px;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.primary-btn:after {
  position: absolute;
  content: "";
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  border-radius: 20px;
  opacity: 0;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  z-index: 1;
}

.primary-btn:hover {
  color: #fff;
}

.primary-btn:hover span {
  color: #fff;
  right: 20px;
}

.primary-btn2 {
  line-height: 42px;
  padding-left: 30px;
  padding-right: 60px;
  border-radius: 25px;
  background: #222222;
  border: none;
  color: #fff;
  display: inline-block;
  font-weight: 500;
  position: relative;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  cursor: pointer;
}

.primary-btn2:focus {
  outline: none;
}

.primary-btn2 span {
  color: #fff;
  position: absolute;
  top: 50%;
  transform: translateY(-60%);
  right: 30px;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.primary-btn2:after {
  position: absolute;
  content: "";
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  border-radius: 20px;
  opacity: 0;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  z-index: 1;
}

.primary-btn2:hover {
  color: #fff;
}

.primary-btn2:hover span {
  color: #fff;
  right: 20px;
}

.no-icon {
  padding-right: 30px;
}

.overlay {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

.default-header {
  background-color: #fff;
  padding: 20px 0;
  width: 100% !important;
  box-shadow: -21.213px 21.213px 30px 0px rgba(158, 158, 158, 0.3);
}

.sticky-wrapper {
  height: 48px !important;
}

.banner-area {
  background-color: #f9f9ff;
}

.banner-area .fullscreen {
  height: 850px !important;
}

@media (max-width: 768px) {
  .banner-area .fullscreen {
    height: 800px !important;
  }
}

@media (max-width: 991px) {
  .banner-content {
    margin-top: 100px;
    text-align: center;
  }
}

.banner-content h1 {
  font-size: 58px;
  font-weight: 700;
  line-height: 1.15em;
  margin-bottom: 20px;
}

@media (max-width: 991px) {
  .banner-content h1 {
    font-size: 36px;
  }
}

@media (max-width: 991px) {
  .banner-content h1 br {
    display: none;
  }
}

@media (max-width: 1199px) {
  .banner-content h1 {
    font-size: 45px;
  }
}

@media (max-width: 414px) {
  .banner-content h1 {
    font-size: 40px;
  }
}

.banner-content p {
  margin-bottom: 30px;
  font-size: 14px;
  font-weight: 300;
  max-width: 730px;
}

@media (max-width: 991px) {
  .banner-content p br {
    display: none;
  }
}

@media (max-width: 991px) {
  .img-right img {
    width: 50%;
    margin-left: auto;
    margin-right: auto;
  }
}

@media (max-width: 767px) {
  .img-right img {
    width: 70%;
  }
}

.single-feature .icon {
  margin-right: 20px;
}

.single-feature .icon .lnr {
  font-size: 40px;
  font-weight: 300;
}

.single-feature h4 {
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 12px;
}

.about-area {
  background-color: #222;
}

.about-right {
  padding-right: 20%;
  padding-left: 5%;
}

@media (max-width: 1280px) {
  .about-right {
    padding-left: 5%;
    padding-right: 5%;
  }
}

@media (max-width: 991px) {
  .about-right {
    padding-top: 50px;
    padding-bottom: 50px;
  }
}

.about-right h1 {
  color: #fff;
  margin-bottom: 45px;
}

@media (max-width: 1280px) and (min-width: 988px) {
  .about-right h1 {
    font-size: 20px;
    margin-bottom: -8px;
    text-align: center;
  }
  .about-right h1 br {
    display: none;
  }
}

.about-right .form-control {
  border-radius: 0;
  background-color: transparent;
  border: 1px solid #656463;
  color: #fff;
  font-size: 14px;
  padding: 12px;
}

.about-right input, .about-right textarea {
  font-size: 14px;
  font-weight: 200;
  background-color: transparent;
  border: 1px solid #656463;
  padding: 12px;
  color: #fff;
}

.about-right .option {
  color: #222;
}

.about-right .nice-select span {
  color: #ccc;
  font-size: 14px;
  font-weight: 200;
}

.about-right textarea {
  height: 150px;
}

@media (max-width: 1024px) and (min-width: 988px) {
  .about-right textarea {
    height: 70px;
  }
}

.about-right .list {
  width: 100%;
}

.about-right .payment-method {
  color: #ccc;
  margin-top: 30px;
}

.consultans-area {
  background-color: #f9f9ff;
}

.consultans-area .header-text {
  text-align: center;
}

.consultans-area .header-text h1 {
  margin-bottom: 25px;
}

.single-con .single-con .title {
  color: #1a1a1a;
  text-align: center;
  margin-bottom: 10px;
}

.single-con .content {
  position: relative;
  max-width: 400px;
  margin: auto;
  overflow: hidden;
}

.single-con .content .content-overlay {
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  opacity: 0;
  -webkit-transition: all 0.4s ease-in-out 0s;
  -moz-transition: all 0.4s ease-in-out 0s;
  transition: all 0.4s ease-in-out 0s;
}

@media (max-width: 767px) {
  .single-con .content .content-overlay {
    left: 65px;
    width: 67%;
  }
}

@media (max-width: 414px) {
  .single-con .content .content-overlay {
    left: 62px;
    width: 68%;
  }
}

@media (max-width: 413px) {
  .single-con .content .content-overlay {
    left: 12px;
    width: 92%;
  }
}

.single-con .content:hover .content-overlay {
  opacity: .8;
}

.single-con .content-details {
  position: absolute;
  text-align: center;
  padding-left: 1em;
  padding-right: 1em;
  width: 100%;
  top: 50%;
  left: 50%;
  opacity: 0;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  -webkit-transition: all 0.3s ease-in-out 0s;
  -moz-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}

.single-con .content-details h4 {
  color: #fff;
}

.single-con .content-title {
  font-size: 18px;
  color: #fff;
  font-weight: 500;
}

.single-con .content:hover .content-details {
  top: 50%;
  left: 50%;
  opacity: 1;
}

.single-con .content-details p {
  color: #fff;
  font-size: 0.8em;
}

.single-con .fadeIn-bottom {
  top: 80%;
}

@media (max-width: 768px) {
  .single-con {
    margin-bottom: 30px;
  }
}

.single-fact {
  text-align: center;
}

.single-fact h2 {
  font-size: 48px;
  font-weight: 600;
}

.single-fact p {
  font-size: 24px;
  font-weight: 100;
  color: #000;
  margin-top: 15px;
}

.blog-area h1 {
  text-align: center;
  margin-bottom: 25px;
  font-weight: 600;
  text-transform: capitalize;
}

.blog-area p {
  margin-bottom: 45px;
  text-align: center;
}

.single-blog h4 {
  text-transform: uppercase;
  font-weight: 600;
  letter-spacing: 3px;
  margin-top: 35px;
}

.single-blog a {
  color: #222;
}

.single-blog .name {
  font-size: 13px;
  font-weight: 100;
}

.single-blog p {
  text-align: left;
  margin-top: 15px;
}

.single-blog .bottom {
  padding: 10px 0;
  border-top: 1px solid #222;
  border-bottom: 1px solid #222;
}

.single-blog .bottom span {
  margin-left: 10px;
}

@media (max-width: 768px) {
  .single-blog {
    margin-bottom: 30px;
  }
  .single-blog .meta {
    margin-top: 20px;
  }
}

@media (max-width: 767px) {
  .single-blog .meta {
    margin-top: 0px;
  }
}

.single-blog .f-img {
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.single-blog .f-img:hover {
  cursor: pointer;
  opacity: .5;
  transform: scale(1.05);
}

.footer-area {
  padding-top: 100px;
  background-color: #222222;
}

.footer-area .footer-nav li {
  margin-top: 8px;
}

.footer-area .footer-nav li a {
  color: #777;
}

.footer-area .footer-nav li a:hover {
  color: #2482ff;
}

h6 {
  color: #fff;
  margin-bottom: 25px;
  font-size: 18px;
  font-weight: 600;
}

p {
  color: #777;
}

.copy-right-text i, .copy-right-text a {
  color: #2482ff;
}

.instafeed {
  margin: -5px;
}

.instafeed li {
  overflow: hidden;
  width: 25%;
}

.instafeed li img {
  margin: 5px;
}

.footer-social a {
  padding: 10px 15px;
  background: #111111;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.footer-social a:hover i {
  color: #fff;
}

.footer-social i {
  color: #cccccc;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

@media (max-width: 1199px) {
  .footer-social {
    margin-top: 30px;
  }
}

@media (max-width: 991px) {
  .footer-social {
    text-align: left;
  }
}

.single-footer-widget {
  color: #fff;
}

.single-footer-widget input {
  line-height: 38px;
  border: none;
  background: #fff;
  font-weight: 300;
  border-radius: 20px;
  color: #777;
  padding-left: 20px;
  width: 100%;
}

.single-footer-widget .bb-btn {
  color: #fff;
  font-weight: 300;
  border-radius: 0;
  z-index: 9999;
  cursor: pointer;
}

@media (max-width: 1024px) {
  .single-footer-widget .nw-btn {
    margin-top: 20px;
  }
  .single-footer-widget .newsletter {
    padding-bottom: 40px;
  }
}

.single-footer-widget .info {
  position: absolute;
  margin-top: 122px;
  color: #fff;
  font-size: 12px;
}

.single-footer-widget .info.valid {
  color: green;
}

.single-footer-widget .info.error {
  color: red;
}

.single-footer-widget ::-moz-selection {
  /* Code for Firefox */
  background-color: #2482ff;
  color: #777777;
}

.single-footer-widget ::selection {
  background-color: #2482ff;
  color: #777777;
}

.single-footer-widget ::-webkit-input-placeholder {
  /* WebKit, Blink, Edge */
  color: #777777;
  font-weight: 300;
}

.single-footer-widget :-moz-placeholder {
  /* Mozilla Firefox 4 to 18 */
  color: #777777;
  opacity: 1;
  font-weight: 300;
}

.single-footer-widget ::-moz-placeholder {
  /* Mozilla Firefox 19+ */
  color: #777777;
  opacity: 1;
  font-weight: 300;
}

.single-footer-widget :-ms-input-placeholder {
  /* Internet Explorer 10-11 */
  color: #777777;
  font-weight: 300;
}

.single-footer-widget ::-ms-input-placeholder {
  /* Microsoft Edge */
  color: #777777;
  font-weight: 300;
}

@media (max-width: 991px) {
  .single-footer-widget {
    margin-bottom: 30px;
  }
}

.footer-bottom {
  padding-top: 80px;
}

.footer-text {
  color: #777;
}

.footer-text a, .footer-text i {
  color: #2482ff;
}
/**
 * Owl Carousel v2.2.0
 * Copyright 2013-2016 David Deutsch
 * Licensed under MIT (https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE)
 */
/*
 *  Owl Carousel - Core
 */
.owl-carousel {
  display: none;
  width: 100%;
  -webkit-tap-highlight-color: transparent;
  /* position relative and z-index fix webkit rendering fonts issue */
  position: relative;
  z-index: 1; }
  .owl-carousel .owl-stage {
    position: relative;
    -ms-touch-action: pan-Y; }
  .owl-carousel .owl-stage:after {
    content: ".";
    display: block;
    clear: both;
    visibility: hidden;
    line-height: 0;
    height: 0; }
  .owl-carousel .owl-stage-outer {
    position: relative;
    overflow: hidden;
    /* fix for flashing background */
    -webkit-transform: translate3d(0px, 0px, 0px); }
  .owl-carousel .owl-item {
    position: relative;
    min-height: 1px;
    float: left;
    -webkit-backface-visibility: hidden;
    -webkit-tap-highlight-color: transparent;
    -webkit-touch-callout: none; }
  .owl-carousel .owl-item img {
    display: block;
    width: 100%;
    -webkit-transform-style: preserve-3d; }
  .owl-carousel .owl-nav.disabled,
  .owl-carousel .owl-dots.disabled {
    display: none; }
  .owl-carousel .owl-nav .owl-prev,
  .owl-carousel .owl-nav .owl-next,
  .owl-carousel .owl-dot {
    cursor: pointer;
    cursor: hand;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none; }
  .owl-carousel.owl-loaded {
    display: block; }
  .owl-carousel.owl-loading {
    opacity: 0;
    display: block; }
  .owl-carousel.owl-hidden {
    opacity: 0; }
  .owl-carousel.owl-refresh .owl-item {
    visibility: hidden; }
  .owl-carousel.owl-drag .owl-item {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none; }
  .owl-carousel.owl-grab {
    cursor: move;
    cursor: grab; }
  .owl-carousel.owl-rtl {
    direction: rtl; }
  .owl-carousel.owl-rtl .owl-item {
    float: right; }

/* No Js */
.no-js .owl-carousel {
  display: block; }

/*
 *  Owl Carousel - Animate Plugin
 */
.owl-carousel .animated {
  -webkit-animation-duration: 1000ms;
          animation-duration: 1000ms;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both; }

.owl-carousel .owl-animated-in {
  z-index: 0; }

.owl-carousel .owl-animated-out {
  z-index: 1; }

.owl-carousel .fadeOut {
  -webkit-animation-name: fadeOut;
          animation-name: fadeOut; }

@-webkit-keyframes fadeOut {
  0% {
    opacity: 1; }
  100% {
    opacity: 0; } }

@keyframes fadeOut {
  0% {
    opacity: 1; }
  100% {
    opacity: 0; } }

/*
 * 	Owl Carousel - Auto Height Plugin
 */
.owl-height {
  transition: height 500ms ease-in-out; }

/*
 * 	Owl Carousel - Lazy Load Plugin
 */
.owl-carousel .owl-item .owl-lazy {
  opacity: 0;
  transition: opacity 400ms ease; }

.owl-carousel .owl-item img.owl-lazy {
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d; }

/*
 * 	Owl Carousel - Video Plugin
 */
.owl-carousel .owl-video-wrapper {
  position: relative;
  height: 100%;
  background: #000; }

.owl-carousel .owl-video-play-icon {
  position: absolute;
  height: 80px;
  width: 80px;
  left: 50%;
  top: 50%;
  margin-left: -40px;
  margin-top: -40px;
  background: url("owl.video.play.png") no-repeat;
  cursor: pointer;
  z-index: 1;
  -webkit-backface-visibility: hidden;
  transition: -webkit-transform 100ms ease;
  transition: transform 100ms ease; }

.owl-carousel .owl-video-play-icon:hover {
  -webkit-transform: scale(1.3, 1.3);
      -ms-transform: scale(1.3, 1.3);
          transform: scale(1.3, 1.3); }

.owl-carousel .owl-video-playing .owl-video-tn,
.owl-carousel .owl-video-playing .owl-video-play-icon {
  display: none; }

.owl-carousel .owl-video-tn {
  opacity: 0;
  height: 100%;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: contain;
  transition: opacity 400ms ease; }

.owl-carousel .owl-video-frame {
  position: relative;
  z-index: 1;
  height: 100%;
  width: 100%; }
.titleQuestion{
  border-bottom: none;
}
.landing-button--red{
  background-color: #000000;
}
.vote_btn{
  background: #37BBFF
}

/*Hide in Other Small Devices */


/* Landscape tablets and medium desktops */
@media (min-width: 992px) and (max-width: 1199px) {

      .girl {
        display: none;
    }
    #uk{
      margin-left: 37%;
      margin-top: 50px;
    }

}

/* Portrait tablets and small desktops */
@media (min-width: 768px) and (max-width: 991px) {

          .girl {
        display: none;
    }
    #uk{
      margin-left: 37%;
      margin-top: 50px;
    }

}

/* Landscape phones and portrait tablets */
@media (max-width: 767px) {

          .girl {
        display: none;
    }
    #uk{
      margin-left: 37%;
      margin-top: 50px;
    }

}

/* Portrait phones and smaller */
@media (max-width: 480px) {

          .girl {
        display: none;
    }
    #uk{
      margin-left: 37%;
      margin-top: 50px;
    }

}
</style>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/24742073" style="position:absolute; left:-9999px;" alt=""/></div>
    <div><img src="https://mc.yandex.ru/watch/14112952" style="position:absolute; left:-9999px;" alt=""/></div>
    <div><img src="https://mc.yandex.ru/watch/24583919" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- }}} Yandex.Metrika counter -->

<!-- Google Analytics {{{ -->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-52662983-1', 'auto');
    ga('send', 'pageview');
</script>
<!-- }}} Google Analytics -->

<!-- Google Tag Manager {{{ -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PQZ9ZB"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PQZ9ZB');</script>
<!-- }}} Google Tag Manager -->

<!-- MosRu Counter {{{ -->
<script type="text/javascript" id="statsmosru" src="https://stats.mos.ru/counter.js" onLoad="statsMosRuCounter()" defer="defer" async="true"></script>
<!-- }}} MosRu Counter -->


  <!-- Баннер {{{ -->
  <meta name="author" content="Комитет государственных услуг" />
  <meta name="apple-itunes-app" content="app-id=873648765" />
  <meta name="google-play-app" content="app-id=ru.mos.polls" />
  <!-- }}} Баннер -->

    </head>

<body>
  <!-- Start Header Area -->
  			<header class="default-header">
  				<div class="container">
  					<div class="header-wrap">
  						<div class="header-top d-flex justify-content-between align-items-center">
  							<div class="logo">
  								<a href="#home"><img width="120px" src="images/components/ag-landing/logo.png" alt=""></a>
  							</div>
  							<div class="main-menubar d-flex align-items-center">
  								<nav>
  									<a href="#home">Главная</a>
                    <?php
                    if(isset($_POST["phone_login"])){
                      $_SESSION["login"] = $_POST["phone_login"];
                    }
                    if(isset($_SESSION["login"])){
                      echo '<a href="profile.php">Личный кабинет</a>';
                    }else{
                      echo '
                      <a class="js-show-login" href="#">Вход</a>
                      <a class="js-show-register" href="#" data-button="true">Регистрация</a>';
                    }
                    ?>
  								</nav>
  							</div>
  						</div>
  					</div>
  				</div>
  			</header>

		<div class="wrapper">
<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="container">
						<div class="row fullscreen align-items-center justify-content-center">
							<div class="banner-content col-lg-6 col-md-12">
								<h1 class="text-uppercase">
									НАРОДНЫЕ</h1>  <br><br><ul style="position: absolute; margin-top: 65px" id="uk">
                    <li><h1 class="text-uppercase">ДЛЯ</h1></li>
                    <li><h1 class="text-uppercase">Manchester</h1></li>
                    <li><h1 class="text-uppercase">Liverpool</h1></li>
                    <li class="last"><h1 class="text-uppercase">Skegness</h1></li>
                  </ul><h1 class="text-uppercase">
									КЛИНИКИ
								</h1>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.
								</p>
								<button class="primary-btn2 mt-20 text-uppercase ">Get Started<span class="lnr lnr-arrow-right"></span></button>
							</div>
							<div class="col-lg-6 d-flex align-self-end img-right">
								<img class="girl"  class="img-fluid" src="landing/header-img.png" alt="">
							</div>
						</div>
				</div>
        <div class="landing-header-bottomline" style="background: -webkit-linear-gradient(0deg, #2380ff 0%, #52fdd9 100%);">
      		<div class="landing-header__container landing-header-bottomline__layout">
      			<div class="landing-header-bottomline__nav">
      				<a class="landing-button landing-button--white
      						  landing-header-bottomline__button"
      					href="poll.html"
      					data-button="true">Все общегородские голосования</a>
      				<!-- <a class="landing-button landing-button--yellow
      						  landing-header-bottomline__button"
      					href="/results">
      					Результаты работы</a> -->
      				<a class="landing-button landing-button--red
      						  landing-header-bottomline__button"
      					href="dom.html">
      					Электронный дом</a>
      			</div>

      			<div class="landing-header-bottomline__nav">
      								<a class="landing-header-bottomline__button applink"
      				   href="#">
      					<img class="applink__image"
      						 height="45"
      						 src="images/components/ag-landing/ic-btn-app-ios.svg"
      						 alt="App Store">
      				</a>
      								<a class="landing-header-bottomline__button applink"
      				   href="#">
      					<img class="applink__image"
      						 height="45"
      						 src="images/components/ag-landing/ic-btn-app-android.svg"
      						 alt="Google play">
      				</a>
      							</div>
      		</div>
      	</div>
			</section>
			<a name="content"></a>

<div id="current_polls" class="no_boxTwo container col-md-12">
    <div class="secondBox secondBoxCurrentPolls">
        <div class="b-secondBox">
            <div class="b-secondBox__title" onclick="location.href = '/poll';" style="color: #0097f6">
                Текущие голосования            </div>
            <div class="reset"></div>
        </div>

        <div class="listQuestionBox">
            <a href="poll/5167.html" style="text-decoration: none" >
                <div class="itemQuestion b-itemQuestion__link">
                    <div class="titleQuestion">
                        Как назвать новую станцию метро на Большой кольцевой линии?                    </div>
                    <div class="descriptionQuestion">
                        «Воронцовская» — название станции Большой кольцевой линии метро, расположенной недалеко от одноименного парка и усадьбы. Сейчас поступают предложения изменить ее название.
                    </div>
                </div>
            </a>
            <div class="q-polls__btns">
                <a href="poll/5167.html" class="btn-" style="background: #0097f6">Голосовать</a>
            </div>
                        <div class="reset"></div>
        </div>
        <?php
          // $json = file_get_contents('url');
          // $count = 3;
          // for ($i=0; $i < ; $i++) {
          //   // code...
          // }
        ?>

        <div class="listQuestionBox">
            <a href="poll/5138.html">
                <div class="itemQuestion b-itemQuestion__link">
                    <div class="titleQuestion">
                        Единый день диспансеризации: за или против?
                    </div>
                    <div class="descriptionQuestion">
                        Сейчас пройти диспансеризацию в городской поликлинике по месту прикрепления можно совершенно бесплатно один раз в три года, и всего за 90 минут. Однако не все москвичи, которым положено это по возрасту, пользуются такой возможностью.
                    </div>
                </div>
            </a>
            <div class="q-polls__btns">
                <a href="poll/5138.html" class="btn- vote_btn" style="background: #0097f6">Голосовать</a>
            </div>
                        <div class="reset"></div>
        </div>

        <div class="listQuestionBox">
            <a href="poll/5186.html">
                <div class="itemQuestion b-itemQuestion__link">
                    <div class="titleQuestion">
                        Секреты успешной карьеры: мероприятия для молодежи                    </div>
                    <div class="descriptionQuestion">
                        В следующем году планируется организовать и провести специальные мероприятия по профессиональной ориентации молодежи, направленные на повышение эффективности выбора профессии, успешности и самореализации молодых людей.                    </div>
                </div>
            </a>
            <div class="q-polls__btns">
                <a href="poll/5186.html" class="btn- vote_btn" style="background: #0097f6">Голосовать</a>
            </div>
                        <div class="reset"></div>
        </div>

        <div class="reset"></div>
    </div>
</div>

<div class="banner_960-link">
    <a href="promo/moscowmarathon-utm_source=ag&utm_medium=banner1&utm_campaign=moscowmarathon.html">
        <img src="images/banners/marathon_20180827_banner955.png" style="width: 995px; padding-right: 200px">
    </a>
</div>

<div class="secondBox oh">
    <div class="b-secondBox oh">
                <div class="b-secondBox__title" onclick="location.href = '/experiments';" style="color: #0097f6">
            Городские новинки
        </div>
            </div>

            <div class="listQuestionBox listQuestionBox_cityNew cf">
            <a data-redirect="true" href="experiments/527.html">
                <div class="itemQuestion b-itemQuestion__link">
                    <div class="titleQuestion">На Цветном бульваре появился «танцующий» светофор</div>
                    <div class="descriptionQuestion">
                        В Москве возле пешеходного перехода на Цветном бульваре установили «танцующий» светофор.                    </div>
                </div>
            </a>
                            <div class="q-polls__btns">
                    <a data-redirect="true" href="experiments/527.html" class="btn- vote_btn" style="background: #0097f6">Оценить</a>
                </div>
									<div class="q-polls__polls">
            + 3						<br>
						<span>
							балла						</span>
					</div>
				                    </div>
            <div class="listQuestionBox listQuestionBox_cityNew cf">
            <a data-redirect="true" href="experiments/526.html">
                <div class="itemQuestion b-itemQuestion__link">
                    <div class="titleQuestion">Один из лучших в мире: открылся концертный зал «Зарядье»</div>
                    <div class="descriptionQuestion">
                        В парке «Зарядье» открылся концертный зал мирового уровня, который построен с использованием самых передовых технологий.                    </div>
                </div>
            </a>
                            <div class="q-polls__btns">
                    <a data-redirect="true" href="experiments/526.html" class="btn- vote_btn" style="background: #0097f6">Оценить</a>
                </div>
									<div class="q-polls__polls">
            + 3						<br>
						<span>
							балла						</span>
					</div>
				                    </div>
            <div class="listQuestionBox listQuestionBox_cityNew cf">
            <a data-redirect="true" href="experiments/525.html">
                <div class="itemQuestion b-itemQuestion__link">
                    <div class="titleQuestion">Новая услуга на mos.ru: допуск в детский сад для бабушек и нянь</div>
                    <div class="descriptionQuestion">
                        На портале mos.ru появилась новая услуга — теперь родители могут в режиме онлайн подать заявление на доверенных лиц, которые могут забирать ребенка из дошкольной группы                    </div>
                </div>
            </a>
                            <div class="q-polls__btns">
                    <a data-redirect="true" href="experiments/525.html" class="btn- vote_btn" style="background: #0097f6">Оценить</a>
                </div>
									<div class="q-polls__polls">
            + 3						<br>
						<span>
							балла						</span>
					</div>
				                    </div>
    </div>

<div class="b-photos-listing__wrap" style="margin-top: 20px; margin-bottom: -25px;">
	<div class="b-photos-listing__conteiner">
		<a href="photos.html"><span class="b-photos-listing__title">Проект<br />в лицах</span></a>
		<span class="b-photos-listing__right-bt"></span>
		<span class="b-photos-listing__left-bt"></span>
		<div class="b-photos-listing__items">
							<div class="b-photos-listing__item">
					<a href="photos/album174.html"><img src="images/fotoalbum/cover/0174/cover.jpg" /></a>
				</div>
							<div class="b-photos-listing__item">
					<a href="photos/album173.html"><img src="images/fotoalbum/cover/0173/cover.jpg" /></a>
				</div>
							<div class="b-photos-listing__item">
					<a href="photos/album172.html"><img src="images/fotoalbum/cover/0172/cover.jpg" /></a>
				</div>
							<div class="b-photos-listing__item">
					<a href="photos/album171.html"><img src="images/fotoalbum/cover/0171/cover.jpg" /></a>
				</div>
							<div class="b-photos-listing__item">
					<a href="photos/album170.html"><img src="images/fotoalbum/cover/0170/cover.jpg" /></a>
				</div>
					</div>
	</div>
</div>

<div class="no_boxTwo">
    <div class="hotQuestonsBlock">
        <h1><a href="news.html" class="titleLink" style="color: #0097f6">Новости</a></h1>
        <div class="hotQuestonsList">


<div class="js-news__element oneHotQuestonsBox">
    <div class="oneHotQuestonsBox-bg_no">
        <a href="news/2295.html" class="news_link">
            <div class="hotQuestonsImg">
                <img src="images/new_golos_leto_1.jpg">
            </div>
        </a>
        <!--        <div class="oneHotQuestonsBox_categoryName">
                    ОБРАЗОВАНИЕ
                </div>-->

        <a href="news/2295.html" class="news_link">
            <div class="hotQuestonsTitle">
                До свидания, лето! Как активные граждане отметили День города            </div>
        </a>
        <span>14.09.2018</span>

        <a href="news/2295.html" class="news_link">
            <div class="hotQuestonsDescription">
                Финалисты акции «Голосуй все лето!» отметили День города в речном круизе, наслаждаясь видами Москвы и красочным салютом.            </div>
        </a>

        <div class="sprite_0001-Btn">
            <a onclick="Share.facebook('https://ag.mos.ru/news/2295','До свидания, лето! Как активные граждане отметили День города','//ag.mos.ru/https://ag.mos.ru//images/new_golos_leto_1.jpg','Финалисты акции «Голосуй все лето!» отметили День города в речном круизе, наслаждаясь видами Москвы и красочным салютом.')">
                <img src="images/btn-fb_ico.png">
            </a>
            <a onclick="Share.twitter('https://ag.mos.ru/news/2295','До свидания, лето! Как активные граждане отметили День города')">
                <img src="images/btn-tw_ico.png">
            </a>
            <a onclick="Share.vkontakte('https://ag.mos.ru/news/2295','До свидания, лето! Как активные граждане отметили День города','//ag.mos.ru/https://ag.mos.ru//images/new_golos_leto_1.jpg','Финалисты акции «Голосуй все лето!» отметили День города в речном круизе, наслаждаясь видами Москвы и красочным салютом.')">
                <img src="images/vk.png">
            </a>
            <a onclick="Share.odnoklassniki('https://ag.mos.ru/news/2295','Финалисты акции «Голосуй все лето!» отметили День города в речном круизе, наслаждаясь видами Москвы и красочным салютом.')">
                <img src="images/btn-odn_ico.png">
            </a>
            <a href="news/2295.html"
               class="readMore">Читать дальше...</a>
        </div>
    </div>
</div>


<div class="js-news__element oneHotQuestonsBox">
    <div class="oneHotQuestonsBox-bg_no">
        <a href="news/2291.html" class="news_link">
            <div class="hotQuestonsImg">
                <img src="images/new_fakt_500.jpg">
            </div>
        </a>
        <!--        <div class="oneHotQuestonsBox_categoryName">
                    ОБРАЗОВАНИЕ
                </div>-->

        <a href="news/2291.html" class="news_link">
            <div class="hotQuestonsTitle">
                Топ-5 «Фактов о Москве»: выбор активных граждан            </div>
        </a>
        <span>07.09.2018</span>

        <a href="news/2291.html" class="news_link">
            <div class="hotQuestonsDescription">
                Участники проекта «Mediffy» оценили факты и достижения столицы за последние годы. В лидерах — медицина, госуслуги, культура и образование.            </div>
        </a>

        <div class="sprite_0001-Btn">
            <a onclick="Share.facebook('https://ag.mos.ru/news/2291','Топ-5 «Фактов о Москве»: выбор активных граждан','//ag.mos.ru/https://ag.mos.ru//images/new_fakt_500.jpg','Участники проекта «Mediffy» оценили факты и достижения столицы за последние годы. В лидерах — медицина, госуслуги, культура и образование.')">
                <img src="images/btn-fb_ico.png">
            </a>
            <a onclick="Share.twitter('https://ag.mos.ru/news/2291','Топ-5 «Фактов о Москве»: выбор активных граждан')">
                <img src="images/btn-tw_ico.png">
            </a>
            <a onclick="Share.vkontakte('https://ag.mos.ru/news/2291','Топ-5 «Фактов о Москве»: выбор активных граждан','//ag.mos.ru/https://ag.mos.ru//images/new_fakt_500.jpg','Участники проекта «Mediffy» оценили факты и достижения столицы за последние годы. В лидерах — медицина, госуслуги, культура и образование.')">
                <img src="images/vk.png">
            </a>
            <a onclick="Share.odnoklassniki('https://ag.mos.ru/news/2291','Участники проекта «Mediffy» оценили факты и достижения столицы за последние годы. В лидерах — медицина, госуслуги, культура и образование.')">
                <img src="images/btn-odn_ico.png">
            </a>
            <a href="news/2291.html"
               class="readMore">Читать дальше...</a>
        </div>
    </div>
</div>


<div class="js-news__element oneHotQuestonsBox">
    <div class="oneHotQuestonsBox-bg_no">
        <a href="news/2289.html" class="news_link">
            <div class="hotQuestonsImg">
                <img src="images/inter_tagieva1.jpg">
            </div>
        </a>
        <!--        <div class="oneHotQuestonsBox_categoryName">
                    ОБРАЗОВАНИЕ
                </div>-->

        <a href="news/2289.html" class="news_link">
            <div class="hotQuestonsTitle">
                Всегда хотела помогать людям — лучшая медсестра Гульфия Тагиева            </div>
        </a>
        <span>06.09.2018</span>

        <a href="news/2289.html" class="news_link">
            <div class="hotQuestonsDescription">
                Гульфия Тагиева — дважды победитель голосования на звание лучшей детской медсестры Москвы. Об участии в конкурсе и главных принципах работы она рассказала в интервью АГ.            </div>
        </a>

        <div class="sprite_0001-Btn">
            <a onclick="Share.facebook('https://ag.mos.ru/news/2289','Всегда хотела помогать людям — лучшая медсестра Гульфия Тагиева','//ag.mos.ru/https://ag.mos.ru//images/inter_tagieva1.jpg','Гульфия Тагиева — дважды победитель голосования на звание лучшей детской медсестры Москвы. Об участии в конкурсе и главных принципах работы она рассказала в интервью АГ.')">
                <img src="images/btn-fb_ico.png">
            </a>
            <a onclick="Share.twitter('https://ag.mos.ru/news/2289','Всегда хотела помогать людям — лучшая медсестра Гульфия Тагиева')">
                <img src="images/btn-tw_ico.png">
            </a>
            <a onclick="Share.vkontakte('https://ag.mos.ru/news/2289','Всегда хотела помогать людям — лучшая медсестра Гульфия Тагиева','//ag.mos.ru/https://ag.mos.ru//images/inter_tagieva1.jpg','Гульфия Тагиева — дважды победитель голосования на звание лучшей детской медсестры Москвы. Об участии в конкурсе и главных принципах работы она рассказала в интервью АГ.')">
                <img src="images/vk.png">
            </a>
            <a onclick="Share.odnoklassniki('https://ag.mos.ru/news/2289','Гульфия Тагиева — дважды победитель голосования на звание лучшей детской медсестры Москвы. Об участии в конкурсе и главных принципах работы она рассказала в интервью АГ.')">
                <img src="images/btn-odn_ico.png">
            </a>
            <a href="news/2289.html"
               class="readMore">Читать дальше...</a>
        </div>
    </div>
</div>
                <p class="reset"></p>
</div>
    </div>
</div>

<div class="b-space"></div>

		</div>

		<div class="pre_footer">
			<div class="pre_footer_content">
				<p>Узнай результаты <br>и подпишись на новости</p>

				<div class="socialBlock">
					<a target="_blank" href="http://vk.com/Mediffy" class="ui-link"><img src="images/site8_vk.png"></a>
					<!-- <a target="_blank" href="http://www.odnoklassniki.ru/citizenmoscow" class="ui-link"><img src="images/site8_odn.png"></a> -->
					<!-- <a target="_blank" href="https://www.facebook.com/citizenmoscow" class="ui-link"><img src="images/site8_fb.png"></a> -->
					<!-- <a target="_blank" href="https://twitter.com/citizenmoscow" class="ui-link"><img src="images/site8_tw.png"></a> -->
					<a target="_blank" href="https://instagram.com/aplinxy9plin/" class="ui-link"><img src="images/instagram_icon.png"></a>
					<!-- <a target="_blank" href="https://www.youtube.com/channel/UC1snUVTmzK72iKWphN8B9yQ" class="ui-link"><img src="images/site9_youtube.png"></a> -->
					<a target="_blank" href="https://t.me/aplinxy9plin" class="ui-link"><img src="images/logo/logo__telegram.png"></a>
				</div>
				<div class="reset"></div>
			</div>
		</div>

<footer class="footerNoActive" style="background: -webkit-linear-gradient(0deg, #52fdd9 0%, #2380ff 100%);">
	<div class="footerMenuNoActive">
		<nav>
			<ul>
				<li><a class="js-show-about" href="info.html">О проекте</a></li>
				<li><a class="js-show-feedback" href="index.html#">Обратная связь</a></li>
				<li><a href="faq.html">Часто задаваемые вопросы</a></li>
        <!-- <form action="#" method="GET">
          <input name="fuck_you" type="hidden" value="create">
          <button type="submit">Go go go go</button>
        </form>
        <form action="#" method="GET">
          <input name="fuck_you" type="hidden" value="delete">
          <button type="submit">Go go go go</button>
        </form> -->
			</ul>
		</nav>
	</div>
	<div class="copyrightsNoActive" style="color: #141414">
© 2018, Mediffy. Все права защищены. <a href="site/offer.html#content" style="color: #ffffff">Публичная оферта</a><br><a href="docs/politika_v_otnoshenii_PD.pdf" target="_blank" style="color: #ffffff">Политика в отношении обработки персональных данных</a>.	</div>
</footer>

<div class="modal-layout js-auth__modal__window-login js-auth__modal__window">
	<div class="modal-layout__inner">

		<div class="ag-modal ag-modal--narrow js-ui-draggable">
			<button class="ag-modal__close-button js-modal-close" type="button"></button>
			<div class="ag-modal__inner">

				<div class="ag-modal__content">
					<div class="ag-modal__container js-tabs">

						<div class="ag-tabs ag-tabs--underlined ag-grid">
							<button class="ag-tabs__item ag-tabs__item--active js-tabs__login js-tabs__trigger" type="button">Авторизация</button>
							<button class="ag-tabs__item js-tabs__register js-tabs__trigger" type="button">Регистрация</button>
						</div>

						<div class="ag-modal__row ag-modal__row--bottom ">
              <form class="" action="#" method="post" id="login_form">
<div style="display:none">
  <!-- <input type="hidden" value="ce7ca81aa1aac7631309ed8e92ec9f0ed106d551" name="YII_CSRF_TOKEN" /> -->
</div>							<div class="js-tabs__item">

  <p id="login_text" class="ag-text ag-text--small">
    Введите номер Вашего мобильного телефона
  </p>
                  <div style="display: none" id="empty_fields_login">
                  <h5 style="color: red">Введены не все поля</h5>
                </div>
								<input class="ag-input js-auth__input-phone" id="phone_login" type="tel_login" name="phone_login" placeholder="Телефон" title="Телефон"><br>

								<input class="ag-input" type="password" id="pass_login" name="password_login" placeholder="Пароль" title="Пароль">



								<div class="ag-modal__row ag-modal__row--bottom ag-grid ag-grid--justify ag-grid--middle">
									<button class="ag-button ag-button--small ag-button--blue" type="button" onclick="login()">Войти</button>
									<button class="ag-text ag-text--small ag-link ag-link--underlined js-show-feedback" type="button">Нужна помощь?</button>
								</div>
							</div>
							</form>
							<form class="" action="#" method="post" id="reg_form">
<div style="display:none">
  <!-- <input type="hidden" value="ce7ca81aa1aac7631309ed8e92ec9f0ed106d551" name="YII_CSRF_TOKEN" /> -->
</div>							<div class="js-tabs__item">

								<p class="ag-text ag-text--small">Для регистрации в системе Mediffy введите номер Вашего мобильного телефона в формате +7 (XXX) XXX-XX-XX и придумайте пароль</p>
                <div style="display: none" id="empty_fields_reg">
                  <h5 style="color: red">Введены не все поля</h5>
                </div>
                <div style="display: none" id="bad_passwords">
                  <h5 style="color: red">Пароли не совпадают!</h5>
                </div>
								<input class="ag-input js-auth__input-phone" id="phone_reg" type="tel" name="phone" placeholder="Телефон" title="Телефон"><br>

								<input class="ag-input" type="password" id="pass_reg" name="password" placeholder="Пароль" title="Пароль">

								<input class="ag-input" type="password" id="pass_reap_reg" name="password" placeholder="Повторите пароль" title="Повторите пароль">


								<div class="ag-modal__row ag-modal__row--bottom ag-grid ag-grid--justify ag-grid--middle">
									<button class="ag-button ag-button--small ag-button--blue" type="button" onclick="reg()">Зарегистрироваться</button>
									<button class="ag-text ag-text--small ag-link ag-link--underlined js-show-feedback" type="button">Нужна помощь?</button>
								</div>
							</div>
							</form>
              <script>
                function reg(){
                  // alert($("#phone_reg").text(value))
                  var login = $("#phone_reg").val()
                  var pass = $("#pass_reg").val()
                  var pass_reap = $("#pass_reap_reg").val()
                  if(login == '' || pass == '' || pass_reg == ''){
                    $("#empty_fields_reg").css({ display: "block" });
                  }else{
                    $("#empty_fields_reg").css({ display: "none" });
                    if(pass !== pass_reap){
                      $("#bad_passwords").css({ display: "block" });
                    }else{
                      $("#reg_form").submit()
                    }
                  }
                }
                function login(){
                  var login = $("#phone_login").val()
                  var pass = $("#pass_login").val()
                  if(login == '' || pass == ''){
                    $("#empty_fields_login").css({ display: "block" });
                  }else{
                    $("#empty_fields_login").css({ display: "none" });
                    $("#login_form").submit()
                  }
                }
              </script>
							<form class="js-auth__modal__form-recovery" action="/user/recoveryPassword" method="post">
<div style="display:none"><input type="hidden" value="ce7ca81aa1aac7631309ed8e92ec9f0ed106d551" name="YII_CSRF_TOKEN" /></div>							<div class="js-tabs__item">

								<p class="ag-text ag-text--small">Введите номер Вашего мобильного телефона</p>
								<input class="ag-input js-auth__input-phone" name="PhoneForm[phone]" type="tel" placeholder="Телефон" title="Телефон">

								<div class="ag-modal__row ag-modal__row--bottom ag-grid ag-grid--justify ag-grid--middle">
									<div class="ag-grid__item">
										<button class="ag-button ag-button--small ag-button--blue">Получить SMS с паролем</button>
									</div>
									<!-- https://party.altarix.ru/issues/81775
									<div class="ag-grid__item">
										<button class="ag-text ag-text--small ag-link ag-link--underlined js-tabs__change-password js-tabs__trigger" type="button">Уже есть код?</button>
									</div>
									-->
								</div>

							</div>
							</form>
							<form class="js-auth__modal__form-change-password" action="/user/resetPassword" method="post">
<div style="display:none"><input type="hidden" value="ce7ca81aa1aac7631309ed8e92ec9f0ed106d551" name="YII_CSRF_TOKEN" /></div>							<div class="js-tabs__item">

								<p class="ag-text ag-text--small">На Ваш телефон <span class="js-auth__modal__phone-number"></span>выслан код подтверждения, с помощью которого можно изменить пароль</p>
								<input class="ag-input js-auth__modal__form-change-password__phone" name="PhoneForm[phone]"  id="PhoneForm_code_rec" placeholder="Телефон" title="Телефон">
								<input class="ag-input js-auth__modal__form-change-password__code" name="PhoneForm[code]"  id="PhoneForm_code_rec" placeholder="Код подтверждения" title="Код подтверждения">
								<input class="ag-input js-auth__modal__form-change-password__password" name="PhoneForm[password]" id="PhoneForm_password_rec" type="password" placeholder="Новый пароль" title="Новый пароль">
								<input class="ag-input js-auth__modal__form-change-password__password-again" name="PhoneForm[password_again]" id="PhoneForm_password_again_rec" type="password" placeholder="Повтор пароля" title="Повтор пароля">
								<p class='js-auth__message'></p>

								<div class="ag-modal__row ag-modal__row--bottom">
									<button class="ag-button ag-button--small ag-button--blue js-auth__modal__form-change-password__submit" disabled>Сохранить</button>
								</div>

							</div>
							</form>
						</div>

					</div>
				</div>

			</div>
		</div>

	</div>
</div>
<div class="modal-layout js-alert">
	<div class="modal-layout__inner">
		<div class="ag-modal ag-modal--narrow js-ui-draggable">
			<button type="button" class="ag-modal__close-button js-modal-close"></button>
			<div class="ag-modal__inner">
				<div class="ag-modal__header">
					<div class="ag-modal__container ag-text ag-text--marked js-alert-title ag-modal__title">Заголовок</div>
				</div>
				<div class="ag-modal__content">
					<div class="ag-modal__container">
						<div class="ag-modal__row ag-text ag-text--small js-alert-message">Сообщение</div>
						<div class="ag-modal__row ag-modal__row--bottom">
							<!-- Кнопки стандартного окна -->
							<div class="ag-grid ag-grid--justify js-alert-buttons__default">
								<div class="ag-grid__item">
									<button type="button" class="ag-button ag-button--small ag-button--blue js-modal-close">Закрыть</button>
								</div>
							</div>
							<!-- Кнопки окна подтверждения действия -->
							<div class="ag-grid ag-grid--gaps js-alert-buttons__confirm" style="display: none;">
								<div class="ag-grid__item">
									<button type="button" class="ag-button ag-button--small ag-button--blue js-alert-confirm__ok">Подтвердить</button>
								</div>
								<div class="ag-grid__item">
									<button type="button" class="ag-button ag-button--small ag-button--white js-alert-confirm__cancel">Отмена</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal-layout js-modal__feedback__window-main">
  <div class="modal-layout__inner">

	<div class="ag-modal js-ui-draggable">
	  <button type="button" class="ag-modal__close-button js-modal-close"></button>
	  <div class="ag-modal__inner">

		<div class="ag-modal__header">
		  <div class="ag-modal__container">
			<p class="ag-text ag-text--marked ag-modal__title">Обратная связь</p>
		  </div>
		</div>

		<div class="ag-modal__content">
		  <form class="js-modal__feedback-form" action="/site/support" method="post">
<div style="display:none"><input type="hidden" value="ce7ca81aa1aac7631309ed8e92ec9f0ed106d551" name="YII_CSRF_TOKEN" /></div>		  <div class="ag-modal__container">

			<div class="ag-modal__row">
			  <p class="ag-text ag-text--small">
				При обращении в службу поддержки по техническим вопросам, пожалуйста, указывайте в тексте обращения:<br/>
				- номер телефона, который вы используете в качестве логина;<br/>
				- текст ошибки;<br/>
				- последовательность действий, которая приводит к возникновению ошибки.
			  </p>
			</div>

			<div class="ag-modal__row">
			  <p class="ag-text ag-text--small">
				Если проблема касается некорректного отображения начисленных баллов участника проекта, укажите, где именно вы видите некорректную информацию: на сайте ag.mos.ru, в мобильном приложении «Mediffy», на сайте mos.ru.
			  </p>
			</div>

			<div class="ag-modal__row ag-modal__row--bottom">
			  <label>
				<p class="ag-modal__label ag-text ag-text--small">E-mail для ответа</p>
				<div><input class="ag-input" name="email" placeholder="E-mail"></div>
			  </label>
			</div>

			<div class="ag-modal__row">
			  <label>
				<p class="ag-modal__label ag-text ag-text--small">Тема</p>
				<div><select class="ag-input js-modal__feedback-subjects" name="subject">
				  <option value="0">Выберите тему</option>
				</select></div>
			  </label>
			</div>

			<div class="ag-modal__row">
			  <label class="js-modal__feedback-order-number">
				<p class="ag-modal__label ag-text ag-text--small">Номер заказа (если есть)</p>
				<div><input class="ag-input" name="order" placeholder="Номер заказа"></div>
			  </label>
			</div>

			<div class="ag-modal__row">
			  <label>
				<p class="ag-modal__label ag-text ag-text--small">Сообщение</p>
				<div><textarea class="ag-input js-modal__feedback__feedback-message" rows="5" name="message"></textarea></div>
			  </label>
			</div>
			<div class="ag-modal__row js-modal__feedback-file-row">
				<div class="js-modal__feedback-file-container feedback-modal__file-container">
					<input class="js-modal__feedback-file-input" id="image_1" style="display:none" type="file" name="image[]" />					<div class="js-modal__feedback-file-preview feedback-modal__file-preview feedback-modal__flex-row" style="display: none">
						<span class="js-modal__feedback-file-name"></span>
						<label class="js-modal__feedback-file-delete feedback-modal__flex-row">
							<button class="feedback-modal__file-delete feedback-modal__file-cancel"></button>
							<span>Удалить</span>
						</label>
					</div>
					<label class="feedback-modal__flex-row js-modal__feedback-file-select" for="image_1">
						<img src="images/icons/page-poll-constructor/ic-add-large.png" alt="">
						<span>Прикрепить изображение</span>
					</label>
				</div>
			</div>

			<div class="ag-modal__row">
			  <p class="ag-text ag-text--small js-modal__feedback-message"></p>
			</div>

			<div class="ag-modal__row ag-modal__row--bottom">
			  <div class="ag-grid ag-grid--justify">
				<div class="ag-grid__item">
				  <button type="submit" class="ag-button ag-button--small ag-button--blue">Отправить</button>
				</div>
				<div class="ag-grid__item">
				  <button type="button" class="ag-button ag-button--small ag-button--white js-modal-close">Отмена</button>
				</div>
			  </div>
			</div>

		  </div>
		  </form>		</div>

	  </div>
	</div>

  </div>
</div>

<div class="modal-layout js-modal__feedback__window-send">
  <div class="modal-layout__inner">

	<div class="ag-modal js-ui-draggable">
	  <button type="button" class="ag-modal__close-button js-modal-close"></button>
	  <div class="ag-modal__inner">

		<div class="ag-modal__content">
		  <div class="ag-modal__container">

			<div class="ag-modal__row">
			  <p class="ag-text ag-text--small">
				Ваше сообщение отправлено, ответ придёт на указанную вами почту.
			  </p>
			</div>

			<div class="ag-modal__row ag-modal__row--bottom">
			  <div class="ag-grid ag-grid--justify">
				<div class="ag-grid__item">
				  <button type="button" class="ag-button ag-button--small ag-button--blue js-modal-close">Закрыть</button>
				</div>
			  </div>
			</div>

		  </div>
		</div>

	  </div>
	</div>

  </div>
</div>
<div class="loader js-loader" style="display: none;">
	<img class="loader__image" src="images/blocks/loader/loader_image.gif" />
	<div class="loader__text">Обработка данных</div>
</div>
<script  src="swipe_text.js"></script>


<script type="text/javascript">
/*<![CDATA[*/
jQuery(function($) {
	jQuery('#yw0').after("<a id=\"yw0_button\" href=\"\/user\/captcha?refresh=1\">\u041f\u043e\u043b\u0443\u0447\u0438\u0442\u044c \u043d\u043e\u0432\u044b\u0439 \u043a\u043e\u0434<\/a>");
	jQuery(document).on('click', '#yw0_button', function(){
		jQuery.ajax({
			url: "\/user\/captcha?refresh=1",
			dataType: 'json',
			cache: false,
			success: function(data) {
				jQuery('#yw0').attr('src', data['url']);
				jQuery('body').data('/user/captcha.hash', [data['hash1'], data['hash2']]);
			}
		});
		return false;
	});

});
/*]]>*/
</script>
</body>

</html>
