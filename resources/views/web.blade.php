<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ulasan Brand Sepatu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
<!-- =======================================================
  * Template Name: Yummy
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
  /**
* Template Name: Yummy
* Updated: Sep 18 2023 with Bootstrap v5.3.2
* Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# Set main reusable colors and fonts using CSS variables
# Learn more about CSS variables at https://developer.mozilla.org/en-US/docs/Web/CSS/Using_CSS_custom_properties
--------------------------------------------------------------*/
/* Fonts */
:root {
  --font-default: "Open Sans", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --font-primary: "Amatic SC", sans-serif;
  --font-secondary: "Inter", sans-serif;
}

/* Colors */
:root {
  --color-default: #212529;
  --color-primary: #ce1212;
  --color-secondary: #37373f;
}

/* Smooth scroll behavior */
:root {
  scroll-behavior: smooth;
}

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
body {
  font-family: var(--font-default);
  color: var(--color-default);
}

a {
  color: var(--color-primary);
  text-decoration: none;
}

a:hover {
  color: #ec2727;
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: var(--font-secondary);
}

/*--------------------------------------------------------------
# Sections & Section Header
--------------------------------------------------------------*/
section {
  overflow: hidden;
  padding: 80px 0;
}

.section-bg {
  background-color: #eee;
}

.section-header {
  text-align: center;
  padding-bottom: 30px;
}

.section-header h2 {
  font-size: 13px;
  letter-spacing: 1px;
  font-weight: 400;
  margin: 0;
  padding: 0;
  color: #7f7f90;
  text-transform: uppercase;
  font-family: var(--font-default);
}

.section-header p {
  margin: 0;
  font-size: 48px;
  font-weight: 400;
  font-family: var(--font-primary);
}

.section-header p span {
  color: var(--color-primary);
}

/*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/
.breadcrumbs {
  padding: 15px 0;
  background: rgba(55, 55, 63, 0.05);
  margin-top: 90px;
}

@media (max-width: 575px) {
  .breadcrumbs {
    margin-top: 70px;
  }
}

.breadcrumbs h2 {
  font-size: 24px;
  font-weight: 400;
  margin: 0;
}

.breadcrumbs ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0;
  margin: 0;
  font-size: 14px;
}

.breadcrumbs ol li+li {
  padding-left: 10px;
}

.breadcrumbs ol li+li::before {
  display: inline-block;
  padding-right: 10px;
  color: #676775;
  content: "/";
}

@media (max-width: 992px) {
  .breadcrumbs .d-flex {
    display: block !important;
  }

  .breadcrumbs h2 {
    margin-bottom: 10px;
  }

  .breadcrumbs ol {
    display: block;
  }

  .breadcrumbs ol li {
    display: inline-block;
  }
}

/*--------------------------------------------------------------
# Scroll top button
--------------------------------------------------------------*/
.scroll-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: 15px;
  z-index: 99999;
  background: var(--color-primary);
  width: 44px;
  height: 44px;
  border-radius: 50px;
  transition: all 0.4s;
}

.scroll-top i {
  font-size: 24px;
  color: #fff;
  line-height: 0;
}

.scroll-top:hover {
  background: #ec2727;
  color: #fff;
}

.scroll-top.active {
  visibility: visible;
  opacity: 1;
}

/*--------------------------------------------------------------
# Preloader
--------------------------------------------------------------*/
#preloader {
  position: fixed;
  inset: 0;
  z-index: 9999;
  overflow: hidden;
  background: #fff;
  transition: all 0.6s ease-out;
  width: 100%;
  height: 100vh;
}

#preloader:before,
#preloader:after {
  content: "";
  position: absolute;
  border: 4px solid var(--color-primary);
  border-radius: 50%;
  animation: animate-preloader 2s cubic-bezier(0, 0.2, 0.8, 1) infinite;
}

#preloader:after {
  animation-delay: -0.5s;
}

@keyframes animate-preloader {
  0% {
    width: 10px;
    height: 10px;
    top: calc(50% - 5px);
    left: calc(50% - 5px);
    opacity: 1;
  }

  100% {
    width: 72px;
    height: 72px;
    top: calc(50% - 36px);
    left: calc(50% - 36px);
    opacity: 0;
  }
}

/*--------------------------------------------------------------
# Disable aos animation delay on mobile devices
--------------------------------------------------------------*/
@media screen and (max-width: 768px) {
  [data-aos-delay] {
    transition-delay: 0 !important;
  }
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
.header {
  background: #fff;
  transition: all 0.5s;
  z-index: 997;
  height: 90px;
  border-bottom: 1px solid #fff;
}

@media (max-width: 575px) {
  .header {
    height: 70px;
  }
}

.header.sticked {
  border-color: #fff;
  border-color: #eee;
}

.header .logo img {
  max-height: 40px;
  margin-right: 6px;
}

.header .logo h1 {
  font-size: 28px;
  font-weight: 700;
  color: #000;
  margin: 0;
  font-family: var(--font-secondary);
}

.header .logo h1 span {
  color: var(--color-primary);
}

.header .btn-book-a-table,
.header .btn-book-a-table:focus {
  font-size: 14px;
  color: #fff;
  background: var(--color-primary);
  padding: 8px 20px;
  margin-left: 30px;
  border-radius: 50px;
  transition: 0.3s;
}

.header .btn-book-a-table:hover,
.header .btn-book-a-table:focus:hover {
  color: #fff;
  background: rgba(206, 18, 18, 0.8);
}

section {
  scroll-margin-top: 90px;
}

/*--------------------------------------------------------------
# Desktop Navigation
--------------------------------------------------------------*/
@media (min-width: 1280px) {
  .navbar {
    padding: 0;
  }

  .navbar ul {
    margin: 0;
    padding: 0;
    display: flex;
    list-style: none;
    align-items: center;
  }

  .navbar li {
    position: relative;
  }

  .navbar>ul>li {
    white-space: nowrap;
    padding: 10px 0 10px 28px;
  }

  .navbar a,
  .navbar a:focus {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 3px;
    font-family: var(--font-secondary);
    font-size: 16px;
    font-weight: 600;
    color: #7f7f90;
    white-space: nowrap;
    transition: 0.3s;
    position: relative;
  }

  .navbar a i,
  .navbar a:focus i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
  }

  .navbar>ul>li>a:before {
    content: "";
    position: absolute;
    width: 100%;
    height: 2px;
    bottom: -6px;
    left: 0;
    background-color: var(--color-primary);
    visibility: hidden;
    width: 0px;
    transition: all 0.3s ease-in-out 0s;
  }

  .navbar a:hover:before,
  .navbar li:hover>a:before,
  .navbar .active:before {
    visibility: visible;
    width: 100%;
  }

  .navbar a:hover,
  .navbar .active,
  .navbar .active:focus,
  .navbar li:hover>a {
    color: #000;
  }

  .navbar .dropdown ul {
    display: block;
    position: absolute;
    left: 28px;
    top: calc(100% + 30px);
    margin: 0;
    padding: 10px 0;
    z-index: 99;
    opacity: 0;
    visibility: hidden;
    background: #fff;
    box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
    transition: 0.3s;
    border-radius: 4px;
  }

  .navbar .dropdown ul li {
    min-width: 200px;
  }

  .navbar .dropdown ul a {
    padding: 10px 20px;
    font-size: 15px;
    text-transform: none;
    font-weight: 600;
  }

  .navbar .dropdown ul a i {
    font-size: 12px;
  }

  .navbar .dropdown ul a:hover,
  .navbar .dropdown ul .active:hover,
  .navbar .dropdown ul li:hover>a {
    color: var(--color-primary);
  }

  .navbar .dropdown:hover>ul {
    opacity: 1;
    top: 100%;
    visibility: visible;
  }

  .navbar .dropdown .dropdown ul {
    top: 0;
    left: calc(100% - 30px);
    visibility: hidden;
  }

  .navbar .dropdown .dropdown:hover>ul {
    opacity: 1;
    top: 0;
    left: 100%;
    visibility: visible;
  }
}

@media (min-width: 1280px) and (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }

  .navbar .dropdown .dropdown:hover>ul {
    left: -100%;
  }
}

@media (min-width: 1280px) {

  .mobile-nav-show,
  .mobile-nav-hide {
    display: none;
  }
}

/*--------------------------------------------------------------
# Mobile Navigation
--------------------------------------------------------------*/
@media (max-width: 1279px) {
  .navbar {
    position: fixed;
    top: 0;
    right: -100%;
    width: 100%;
    max-width: 400px;
    border-left: 1px solid #666;
    bottom: 0;
    transition: 0.3s;
    z-index: 9997;
  }

  .navbar ul {
    position: absolute;
    inset: 0;
    padding: 50px 0 10px 0;
    margin: 0;
    background: rgba(255, 255, 255, 0.9);
    overflow-y: auto;
    transition: 0.3s;
    z-index: 9998;
  }

  .navbar a,
  .navbar a:focus {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 20px;
    font-family: var(--font-secondary);
    border-bottom: 2px solid rgba(255, 255, 255, 0.8);
    font-size: 16px;
    font-weight: 600;
    color: #7f7f90;
    white-space: nowrap;
    transition: 0.3s;
  }

  .navbar a i,
  .navbar a:focus i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
  }

  .navbar a:hover,
  .navbar li:hover>a {
    color: #000;
  }

  .navbar .active,
  .navbar .active:focus {
    color: #000;
    border-color: var(--color-primary);
  }

  .navbar .dropdown ul,
  .navbar .dropdown .dropdown ul {
    position: static;
    display: none;
    padding: 10px 0;
    margin: 10px 20px;
    transition: all 0.5s ease-in-out;
    border: 1px solid #eee;
  }

  .navbar .dropdown>.dropdown-active,
  .navbar .dropdown .dropdown>.dropdown-active {
    display: block;
  }

  .mobile-nav-show {
    color: var(--color-secondary);
    font-size: 28px;
    cursor: pointer;
    line-height: 0;
    transition: 0.5s;
    z-index: 9999;
    margin: 0 10px 0 20px;
  }

  .mobile-nav-hide {
    color: var(--color-secondary);
    font-size: 32px;
    cursor: pointer;
    line-height: 0;
    transition: 0.5s;
    position: fixed;
    right: 20px;
    top: 20px;
    z-index: 9999;
  }

  .mobile-nav-active {
    overflow: hidden;
  }

  .mobile-nav-active .navbar {
    right: 0;
  }

  .mobile-nav-active .navbar:before {
    content: "";
    position: fixed;
    inset: 0;
    background: rgba(255, 255, 255, 0.8);
    z-index: 9996;
  }
}

/*--------------------------------------------------------------
# About Section
--------------------------------------------------------------*/
.about .about-img {
  min-height: 500px;
}

.about h3 {
  font-weight: 700;
  font-size: 36px;
  margin-bottom: 30px;
  font-family: var(--font-secondary);
}

.about .call-us {
  left: 10%;
  right: 10%;
  bottom: 10%;
  background-color: #fff;
  box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.08);
  padding: 20px;
  text-align: center;
}

.about .call-us h4 {
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 5px;
  font-family: var(--font-default);
}

.about .call-us p {
  font-size: 28px;
  font-weight: 700;
  color: var(--color-primary);
}

.about .content ul {
  list-style: none;
  padding: 0;
}

.about .content ul li {
  padding: 0 0 8px 26px;
  position: relative;
}

.about .content ul i {
  position: absolute;
  font-size: 20px;
  left: 0;
  top: -3px;
  color: var(--color-primary);
}

.about .content p:last-child {
  margin-bottom: 0;
}

.about .play-btn {
  width: 94px;
  height: 94px;
  background: radial-gradient(var(--color-primary) 50%, rgba(206, 18, 18, 0.4) 52%);
  border-radius: 50%;
  display: block;
  position: absolute;
  left: calc(50% - 47px);
  top: calc(50% - 47px);
  overflow: hidden;
}

.about .play-btn:before {
  content: "";
  position: absolute;
  width: 120px;
  height: 120px;
  animation-delay: 0s;
  animation: pulsate-btn 2s;
  animation-direction: forwards;
  animation-iteration-count: infinite;
  animation-timing-function: steps;
  opacity: 1;
  border-radius: 50%;
  border: 5px solid rgba(206, 18, 18, 0.7);
  top: -15%;
  left: -15%;
  background: rgba(198, 16, 0, 0);
}

.about .play-btn:after {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 100;
  transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
}

.about .play-btn:hover:before {
  content: "";
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border: none;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 200;
  animation: none;
  border-radius: 0;
}

.about .play-btn:hover:after {
  border-left: 15px solid var(--color-primary);
  transform: scale(20);
}

@keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }

  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

/*--------------------------------------------------------------
# Why Us Section
--------------------------------------------------------------*/
.why-us .why-box {
  padding: 30px;
  background: var(--color-primary);
  color: #fff;
}

.why-us .why-box h3 {
  font-weight: 700;
  font-size: 34px;
  margin-bottom: 30px;
}

.why-us .why-box p {
  margin-bottom: 30px;
}

.why-us .why-box .more-btn {
  display: inline-block;
  background: rgba(255, 255, 255, 0.3);
  padding: 6px 30px 8px 30px;
  color: #fff;
  border-radius: 50px;
  transition: all ease-in-out 0.4s;
}

.why-us .why-box .more-btn i {
  font-size: 14px;
}

.why-us .why-box .more-btn:hover {
  color: var(--color-primary);
  background: #fff;
}

.why-us .icon-box {
  text-align: center;
  background: #fff;
  padding: 40px 30px;
  width: 100%;
  height: 100%;
  border: 1px solid rgba(55, 55, 63, 0.1);
  transition: 0.3s;
}

.why-us .icon-box i {
  color: var(--color-primary);
  margin-bottom: 30px;
  font-size: 32px;
  margin-bottom: 30px;
  background: rgba(206, 18, 18, 0.1);
  border-radius: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 64px;
  height: 64px;
}

.why-us .icon-box h4 {
  font-size: 20px;
  font-weight: 400;
  margin: 0 0 30px 0;
  font-family: var(--font-secondary);
}

.why-us .icon-box p {
  font-size: 15px;
  color: #6c757d;
}

@media (min-width: 1200px) {
  .why-us .icon-box:hover {
    transform: scale(1.1);
  }
}

/*--------------------------------------------------------------
# Stats Counter Section
--------------------------------------------------------------*/
.stats-counter {
  background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../img/stats-bg.jpg") center center;
  background-size: cover;
  padding: 100px 0;
}

@media (min-width: 1365px) {
  .stats-counter {
    background-attachment: fixed;
  }
}

.stats-counter .stats-item {
  padding: 30px;
  width: 100%;
}

.stats-counter .stats-item span {
  font-size: 48px;
  display: block;
  color: #fff;
  font-weight: 700;
}

.stats-counter .stats-item p {
  padding: 0;
  margin: 0;
  font-family: var(--font-secondary);
  font-size: 16px;
  font-weight: 700;
  color: rgba(255, 255, 255, 0.6);
}

/*--------------------------------------------------------------
# Menu Section
--------------------------------------------------------------*/
.menu .nav-tabs {
  border: 0;
}

.menu .nav-link {
  margin: 0 10px;
  padding: 10px 5px;
  transition: 0.3s;
  color: var(--color-secondary);
  border-radius: 0;
  cursor: pointer;
  height: 100%;
  border: 0;
  border-bottom: 2px solid #b6b6bf;
}

@media (max-width: 575px) {
  .menu .nav-link {
    margin: 0 10px;
    padding: 10px 0;
  }
}

.menu .nav-link i {
  padding-right: 15px;
  font-size: 48px;
}

.menu .nav-link h4 {
  font-size: 18px;
  font-weight: 400;
  margin: 0;
  font-family: var(--font-secondary);
}

@media (max-width: 575px) {
  .menu .nav-link h4 {
    font-size: 16px;
  }
}

.menu .nav-link:hover {
  color: var(--color-primary);
}

.menu .nav-link.active {
  color: var(--color-primary);
  border-color: var(--color-primary);
}

.menu .tab-content .tab-header {
  padding: 30px 0;
}

.menu .tab-content .tab-header p {
  font-size: 14px;
  text-transform: uppercase;
  color: #676775;
  margin-bottom: 0;
}

.menu .tab-content .tab-header h3 {
  font-size: 36px;
  font-weight: 600;
  color: var(--color-primary);
}

.menu .tab-content .menu-item {
  -moz-text-align-last: center;
  text-align-last: center;
}

.menu .tab-content .menu-item .menu-img {
  padding: 0 60px;
  margin-bottom: 15px;
}

.menu .tab-content .menu-item h4 {
  font-size: 22px;
  font-weight: 500;
  color: var(--color-secondary);
  font-family: var(--font-secondary);
  font-weight: 30px;
  margin-bottom: 5px;
}

.menu .tab-content .menu-item .ingredients {
  font-family: var(--font-secondary);
  color: #8d8d9b;
  margin-bottom: 5px;
}

.menu .tab-content .menu-item .price {
  font-size: 24px;
  font-weight: 700;
  color: var(--color-primary);
}

/*--------------------------------------------------------------
# Testimonials Section
--------------------------------------------------------------*/
.testimonials .section-header {
  margin-bottom: 40px;
}

.testimonials .testimonials-carousel,
.testimonials .testimonials-slider {
  overflow: hidden;
}

.testimonials .testimonial-item .testimonial-content {
  border-left: 3px solid var(--color-primary);
  padding-left: 30px;
}

.testimonials .testimonial-item .testimonial-img {
  border-radius: 50%;
  border: 4px solid #fff;
  margin: 0 auto;
}

.testimonials .testimonial-item h3 {
  font-size: 20px;
  font-weight: bold;
  margin: 10px 0 5px 0;
  color: var(--color-default);
  font-family: var(--font-secondary);
}

.testimonials .testimonial-item h4 {
  font-size: 14px;
  color: #6c757d;
  margin: 0 0 10px 0;
  font-family: var(--font-secondary);
}

.testimonials .testimonial-item .stars i {
  color: #ffc107;
  margin: 0 1px;
}

.testimonials .testimonial-item .quote-icon-left,
.testimonials .testimonial-item .quote-icon-right {
  color: #f05656;
  font-size: 26px;
  line-height: 0;
}

.testimonials .testimonial-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}

.testimonials .testimonial-item .quote-icon-right {
  display: inline-block;
  right: -5px;
  position: relative;
  top: 10px;
  transform: scale(-1, -1);
}

.testimonials .testimonial-item p {
  font-style: italic;
}

.testimonials .swiper-pagination {
  margin-top: 40px;
  position: relative;
}

.testimonials .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #d1d1d7;
  opacity: 1;
}

.testimonials .swiper-pagination .swiper-pagination-bullet-active {
  background-color: var(--color-primary);
}

/*--------------------------------------------------------------
# Events Section
--------------------------------------------------------------*/
.events .container-fluid {
  padding: 0;
}

.events .event-item {
  background-size: cover;
  background-position: cente;
  min-height: 600px;
  padding: 30px;
}

@media (max-width: 575px) {
  .events .event-item {
    min-height: 500px;
  }
}

.events .event-item:before {
  content: "";
  background: rgba(0, 0, 0, 0.6);
  position: absolute;
  inset: 0;
}

.events .event-item h3 {
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 5px;
  color: #fff;
  position: relative;
}

.events .event-item .price {
  color: #fff;
  border-bottom: 2px solid var(--color-primary);
  font-size: 32px;
  font-weight: 700;
  margin-bottom: 15px;
  position: relative;
}

.events .event-item .description {
  margin-bottom: 0;
  color: rgba(255, 255, 255, 0.9);
  position: relative;
}

@media (min-width: 1200px) {
  .events .swiper-slide-active+.swiper-slide {
    border-left: 1px solid rgba(255, 255, 255, 0.5);
    border-right: 1px solid rgba(255, 255, 255, 0.5);
    z-index: 1;
  }
}

.events .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.events .swiper-pagination .swiper-pagination-bullet {
  width: 10px;
  height: 10px;
  background-color: #d1d1d7;
  opacity: 1;
}

.events .swiper-pagination .swiper-pagination-bullet-active {
  background-color: var(--color-primary);
}

/*--------------------------------------------------------------
# Chefs Section
--------------------------------------------------------------*/
.chefs .chef-member {
  overflow: hidden;
  text-align: center;
  border-radius: 5px;
  background: #fff;
  box-shadow: 0px 0 30px rgba(55, 55, 63, 0.08);
  transition: 0.3s;
}

.chefs .chef-member .member-img {
  position: relative;
  overflow: hidden;
}

.chefs .chef-member .member-img:after {
  position: absolute;
  content: "";
  left: 0;
  bottom: 0;
  height: 100%;
  width: 100%;
  background: url(../img/team-shape.svg) no-repeat center bottom;
  background-size: contain;
  z-index: 1;
}

.chefs .chef-member .social {
  position: absolute;
  right: -100%;
  top: 30px;
  opacity: 0;
  border-radius: 4px;
  transition: 0.5s;
  background: rgba(255, 255, 255, 0.3);
  z-index: 2;
}

.chefs .chef-member .social a {
  transition: color 0.3s;
  color: rgba(55, 55, 63, 0.4);
  margin: 15px 12px;
  display: block;
  line-height: 0;
  text-align: center;
}

.chefs .chef-member .social a:hover {
  color: rgba(55, 55, 63, 0.9);
}

.chefs .chef-member .social i {
  font-size: 18px;
}

.chefs .chef-member .member-info {
  padding: 10px 15px 20px 15px;
}

.chefs .chef-member .member-info h4 {
  font-weight: 700;
  margin-bottom: 5px;
  font-size: 20px;
  color: var(--color-secondary);
}

.chefs .chef-member .member-info span {
  display: block;
  font-size: 14px;
  font-weight: 400;
  color: rgba(33, 37, 41, 0.4);
}

.chefs .chef-member .member-info p {
  font-style: italic;
  font-size: 14px;
  padding-top: 15px;
  line-height: 26px;
  color: rgba(33, 37, 41, 0.7);
}

.chefs .chef-member:hover {
  transform: scale(1.08);
  box-shadow: 0px 0 30px rgba(55, 55, 63, 0.15);
}

.chefs .chef-member:hover .social {
  right: 8px;
  opacity: 1;
}

/*--------------------------------------------------------------
# Book A Table Section
--------------------------------------------------------------*/
.book-a-table .reservation-img {
  min-height: 500px;
  background-size: cover;
  background-position: center;
}

.book-a-table .reservation-form-bg {
  background: rgba(55, 55, 63, 0.04);
}

.book-a-table .php-email-form {
  padding: 40px;
}

@media (max-width: 575px) {
  .book-a-table .php-email-form {
    padding: 20px;
  }
}

.book-a-table .php-email-form h3 {
  font-size: 14px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.book-a-table .php-email-form h4 {
  font-size: 14px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin: 20px 0 0 0;
}

.book-a-table .php-email-form p {
  font-size: 14px;
  margin-bottom: 20px;
}

.book-a-table .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #df1529;
  text-align: left;
  padding: 15px;
  margin-bottom: 24px;
  font-weight: 600;
}

.book-a-table .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #059652;
  text-align: center;
  padding: 15px;
  margin-bottom: 24px;
  font-weight: 600;
}

.book-a-table .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
  margin-bottom: 24px;
}

.book-a-table .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #059652;
  border-top-color: #fff;
  animation: animate-loading 1s linear infinite;
}

.book-a-table .php-email-form input,
.book-a-table .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
  border-radius: 0;
}

.book-a-table .php-email-form input:focus,
.book-a-table .php-email-form textarea:focus {
  border-color: var(--color-primary);
}

.book-a-table .php-email-form input {
  padding: 12px 15px;
}

.book-a-table .php-email-form textarea {
  padding: 12px 15px;
}

.book-a-table .php-email-form button[type=submit] {
  background: var(--color-primary);
  border: 0;
  padding: 14px 60px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
}

.book-a-table .php-email-form button[type=submit]:hover {
  background: #ec2727;
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Gallery Section
--------------------------------------------------------------*/
.gallery {
  overflow: hidden;
}

.gallery .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.gallery .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #d1d1d7;
  opacity: 1;
}

.gallery .swiper-pagination .swiper-pagination-bullet-active {
  background-color: var(--color-primary);
}

.gallery .swiper-slide-active {
  text-align: center;
}

@media (min-width: 992px) {
  .gallery .swiper-wrapper {
    padding: 40px 0;
  }

  .gallery .swiper-slide-active {
    border: 6px solid var(--color-primary);
    padding: 4px;
    background: #fff;
    z-index: 1;
    transform: scale(1.2);
  }
}

/*--------------------------------------------------------------
# Contact Section
--------------------------------------------------------------*/
.contact .info-item {
  background: #f4f4f4;
  padding: 30px;
  height: 100%;
}

.contact .info-item .icon {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 56px;
  height: 56px;
  font-size: 24px;
  line-height: 0;
  color: #fff;
  background: var(--color-primary);
  border-radius: 50%;
  margin-right: 15px;
}

.contact .info-item h3 {
  font-size: 20px;
  color: #6c757d;
  font-weight: 700;
  margin: 0 0 5px 0;
}

.contact .info-item p {
  padding: 0;
  margin: 0;
  line-height: 24px;
  font-size: 14px;
}

.contact .info-item .social-links a {
  font-size: 24px;
  display: inline-block;
  color: rgba(55, 55, 63, 0.7);
  line-height: 1;
  margin: 4px 6px 0 0;
  transition: 0.3s;
}

.contact .info-item .social-links a:hover {
  color: var(--color-primary);
}

.contact .php-email-form {
  width: 100%;
  margin-top: 30px;
  background: #fff;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.08);
}

.contact .php-email-form .form-group {
  padding-bottom: 20px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #df1529;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br+br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #059652;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #059652;
  border-top-color: #fff;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

.contact .php-email-form input:focus,
.contact .php-email-form textarea:focus {
  border-color: var(--color-primary);
}

.contact .php-email-form input {
  height: 48px;
}

.contact .php-email-form textarea {
  padding: 10px 12px;
}

.contact .php-email-form button[type=submit] {
  background: var(--color-primary);
  border: 0;
  padding: 12px 40px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
}

.contact .php-email-form button[type=submit]:hover {
  background: #ec2727;
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
.hero {
  width: 100%;
  background-size: cover;
  position: relative;
  min-height: 60vh;
  padding: 160px 0 60px 0;
}

.hero h2 {
  font-size: 64px;
  font-weight: 700;
  margin-bottom: 20px;
  color: var(--color-secondary);
  font-family: var(--font-primary);
}

.hero h2 span {
  color: var(--color-primary);
}

.hero p {
  color: #4f4f5a;
  font-weight: 400;
  margin-bottom: 30px;
}

.hero .btn-book-a-table {
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 36px;
  border-radius: 50px;
  transition: 0.5s;
  color: #fff;
  background: var(--color-primary);
  box-shadow: 0 8px 28px rgba(206, 18, 18, 0.2);
}

.hero .btn-book-a-table:hover {
  background: rgba(206, 18, 18, 0.8);
  box-shadow: 0 8px 28px rgba(206, 18, 18, 0.45);
}

.hero .btn-watch-video {
  font-size: 16px;
  transition: 0.5s;
  margin-left: 25px;
  color: var(--font-secondary);
  font-weight: 600;
}

.hero .btn-watch-video i {
  color: var(--color-primary);
  font-size: 32px;
  transition: 0.3s;
  line-height: 0;
  margin-right: 8px;
}

.hero .btn-watch-video:hover {
  color: var(--color-primary);
}

.hero .btn-watch-video:hover i {
  color: rgba(206, 18, 18, 0.8);
}

@media (max-width: 640px) {
  .hero h2 {
    font-size: 36px;
  }

  .hero .btn-get-started,
  .hero .btn-watch-video {
    font-size: 14px;
  }
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
.footer {
  font-size: 14px;
  background-color: #1f1f24;
  padding: 50px 0;
  color: rgba(255, 255, 255, 0.7);
}

.footer .icon {
  margin-right: 15px;
  font-size: 24px;
  line-height: 0;
}

.footer h4 {
  font-size: 16px;
  font-weight: bold;
  position: relative;
  padding-bottom: 5px;
  color: #fff;
}

.footer .footer-links {
  margin-bottom: 30px;
}

.footer .footer-links ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer .footer-links ul li {
  padding: 10px 0;
  display: flex;
  align-items: center;
}

.footer .footer-links ul li:first-child {
  padding-top: 0;
}

.footer .footer-links ul a {
  color: rgba(255, 255, 255, 0.6);
  transition: 0.3s;
  display: inline-block;
  line-height: 1;
}

.footer .footer-links ul a:hover {
  color: #fff;
}

.footer .social-links a {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  border: 1px solid rgba(255, 255, 255, 0.2);
  font-size: 16px;
  color: rgba(255, 255, 255, 0.7);
  margin-right: 10px;
  transition: 0.3s;
}

.footer .social-links a:hover {
  color: #fff;
  border-color: #fff;
}

.footer .copyright {
  text-align: center;
  padding-top: 30px;
  border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.footer .credits {
  padding-top: 4px;
  text-align: center;
  font-size: 13px;
}

.footer .credits a {
  color: #fff;
}
</style>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>DSTriview<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Beranda</a></li>
          <li><a href="#about">Ulasan</a></li>
          <li><a href="#menu">Semua Produk</a></li>
          <li><a href="#chefs">Testimoni</a></li>
          <li><a href="#events">Tentang</a></li>
            
          </li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Pilih Dari<br>Yang Terbaik</h2>
          <p data-aos="fade-up" data-aos-delay="100">Cek Review produk sepatu terbaru untuk membantu anda memilih yang terbaik</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/11.jpg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->
  

  
    <!-- End Featured Services Section -->

    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="events" class="why-us section-bg">
      <div class="container" data-aos="fade-up">
      
        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Apa Itu DSTriview?</h3>
              <p>
              Temukan beragam produk Sepatu dari berbagai brand terkenal untuk kamu pakai di rumah. 
              Cek disini untuk mengetahui produk bagus yang sedang berlangsung di DSTriview. Tambahkan produk  lewat admin
              </p>
              
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-center">
            <div class="row gy-4">

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-clipboard-data"></i>
                  <h4>Lihat Berdasarkan Kategori</h4>
                  
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-gem"></i>
                  <h4>Cari Berdasarkan Harga </h4>
                  
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-inboxes"></i>
                  <h4>Lihat Ulasan Produknya </h4>
                  
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->


    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <p>Brand Sepatu <span>Terkenal di Dunia</span></p>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
              <h4>Nike</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
              <h4>Adidas</h4>
            </a><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
              <h4>Converse</h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
              <h4>Vans</h4>
            </a>
          </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <h3>NIKE</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/nike3.jpg" class="glightbox"><img src="assets/img/menu/nike3.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Nike Dunk Low GS Black White</h4>
                
                <p class="price">
                  Rp.1.500.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/nike4.jpg" class="glightbox"><img src="assets/img/menu/nike4.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Nike Just Do It</h4>
                
                <p class="price">
                  Rp.700.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/nike5.jpg" class="glightbox"><img src="assets/img/menu/nike5.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Nike Air Max Plus Triple Black</h4>
                
                <p class="price">
                  Rp.2.300.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/nike6.jpg" class="glightbox"><img src="assets/img/menu/nike6.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Nike Giannis Immortality</h4>
                
                <p class="price">
                  Rp.1.300.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/nike7.jpg" class="glightbox"><img src="assets/img/menu/nike7.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Nike Airforce 1</h4>
                
                <p class="price">
                  Rp.2.200.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/nike8.jpg" class="glightbox"><img src="assets/img/menu/nike8.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Nike Adversary Premium Sb 'black'</h4>
                
                <p class="price">
                  Rp.900.000
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Starter Menu Content -->

          <div class="tab-pane fade" id="menu-breakfast">

            <div class="tab-header text-center">
              
              <h3>ADIDAS</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/adidas1.jpg" class="glightbox"><img src="assets/img/menu/adidas1.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Adidas Tenis Samba Vegan</h4>
                
                <p class="price">
                  Rp.2.100.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/adidas2.jpg" class="glightbox"><img src="assets/img/menu/adidas2.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Adidas Forum Low Shoes White</h4>
                
                <p class="price">
                  Rp.1.800.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/adidas3.jpg" class="glightbox"><img src="assets/img/menu/adidas3.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Adidas Originals X PLR Shoes</h4>
                
                <p class="price">
                  Rp.500.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/adidas4.jpg" class="glightbox"><img src="assets/img/menu/adidas4.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Adidas OZWEEGO Shoes Black</h4>
                
                <p class="price">
                  Rp.800.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/adidas5.jpg" class="glightbox"><img src="assets/img/menu/adidas5.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Adidas Sneaker Handball Spezial Core Black</h4>
                
                <p class="price">
                  Rp.1.400.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/adidas6.jpg" class="glightbox"><img src="assets/img/menu/adidas6.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Adidas SAMBA OG FOOTWEAR WHITE GREEN</h4>
                
                <p class="price">
                  Rp.2.300.000
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Breakfast Menu Content -->

          <div class="tab-pane fade" id="menu-lunch">

            <div class="tab-header text-center">
              
              <h3>CONVERSE</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/converse1.jpg" class="glightbox"><img src="assets/img/menu/converse1.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Converse Chuck Taylor All Star</h4>
                
                <p class="price">
                  Rp.800.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/converse2.jpg" class="glightbox"><img src="assets/img/menu/converse2.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Converse Junior Trainers All Star Ox BlackBlack</h4>
                
                <p class="price">
                  Rp.1.300.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/converse3.jpg" class="glightbox"><img src="assets/img/menu/converse3.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Converse Purple</h4>
                
                <p class="price">
                  Rp.2.000.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/converse4.jpg" class="glightbox"><img src="assets/img/menu/converse4.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Converse Black</h4>
                
                <p class="price">
                  Rp.1.700.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/converse5.jpg" class="glightbox"><img src="assets/img/menu/converse5.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Converse Eos Luibusdam</h4>
                
                <p class="price">
                  Rp.900.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/converse6.jpg" class="glightbox"><img src="assets/img/menu/converse6.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Converse As-1 Pro 'black White Gum'</h4>
                
                <p class="price">
                  Rp.1.450.000
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Lunch Menu Content -->

          <div class="tab-pane fade" id="menu-dinner">

            <div class="tab-header text-center">
              
              <h3>VANS</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/vans1.jpg" class="glightbox"><img src="assets/img/menu/vans1.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Vans Old Skool Black White</h4>
                
                <p class="price">
                  Rp.1.250.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/vans2.jpg" class="glightbox"><img src="assets/img/menu/vans2.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Vans Classic Old Skool Shoes</h4>
                
                <p class="price">
                  Rp.2.550.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/vans3.jpg" class="glightbox"><img src="assets/img/menu/vans3.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Vans black white</h4>
                
                <p class="price">
                  Rp.750.000
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/vans4.jpg" class="glightbox"><img src="assets/img/menu/vans4.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Vans Shop Mens Trouva</h4>
                
                <p class="price">
                  Rp1.050.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/vans5.jpg" class="glightbox"><img src="assets/img/menu/vans5.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Vans Black Velvet Old Skool </h4>
                
                <p class="price">
                  Rp.2.740.000
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/vans6.jpg" class="glightbox"><img src="assets/img/menu/vans6.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Vans Seldan Men's Leather</h4>
                
                <p class="price">
                  Rp.1.255.000
                </p>
              </div><!-- Menu Item -->

            </div>
          </div><!-- End Dinner Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          
          <p>Testimoni <span>Pengguna</span> Produk</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/2.jpg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <h4>Dion Budi S</h4>
                <span>ad.dinss</span>
                <p>Nike dirancang dengan insole yang empuk dan ringan. Salah satu jenis teknologi insole yang dipakainya adalah bahan ortholite. Dengan itu, kaki bisa menapak dengan nyaman dan ringan layaknya nggak memakai alas kaki. </p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/1.jpg" class="img-fluid" alt="">
               
              </div>
              <div class="member-info">
                <h4>Dhanu Tirta S</h4>
                <span>dhanu.ae</span>
                <p>Kelebihan berikutnya adalah tempat perlindungan di bagian lubang tali berupa eyestay. Eyestay ini berupa lapisan karet yang bisa melindungi kaki kalau-kalau tertimpa benda dari atas. </p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="chef-member">
              <div class="member-img">
                <img src="assets/img/chefs/3.jpg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <h4>Desta Catur W</h4>
                <span>destacrunch</span>
                <p>Meskipun memiliki model sepatu yang sangat legendaris, itu nggak membuat Converse berhenti untuk berinovasi. Sepatu asli dari Amerika ini selalu merancang produk baru setiap kali diluncurkannya. Nggak hanya bermain dengan warna dan model, bahan utama sepatu pun juga semakin beragam. Bahkan, ada jenis sepatu yang bahannya terbuat dari kain rajut serta karet, lho!</p>
              </div>
            </div>
          </div><!-- End Chefs Member -->

        </div>

      </div>
    </section><!-- End Chefs Section -->

   
  <!-- ======= Footer ======= -->
  <section id="contact" class="contact">
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Alamat</h4>
            <p>
              Trenggalek <br>
              Jawa Timur, Indonesia <br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Kontak Kami</h4>
            <p>
              <strong>Hp:</strong> +6289 518 453 750<br>
              <strong>Email:</strong> destacatrwjaya@gmail.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Buka-Tutup</h4>
            <p>
              <strong>Senin-Jumat: 07.00</strong> - 15.00<br>
              Sabtu-Minggu: Tutup
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Ikuti Kami</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Desta</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Desta</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>