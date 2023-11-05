import "./bootstrap";

// bootstrap 5 css
import "../scss/main.scss";

// Css
import "../css/app.css";

// Popper
import * as Popper from "@popperjs/core";

// bootstrap 5
import "bootstrap";

// bootstrap 5 icons
import "bootstrap-icons/font/bootstrap-icons.css";

// video.js
import "./vendor/video";

// validation
import "./utils/validation";

// multi step form
import "./utils/multi-step-form";

// password
import "./utils/password";

const transitionScreen = document.querySelector(".transition-screen");

// // on load hide transition screen
// window.addEventListener("load", function () {
//   transitionScreen.classList.add("hide");

//   setTimeout(function () {
//     transitionScreen.classList.add("hide");
//   }, 2000);


// });

// // Show transition screen on click

// const pageLinks = document.querySelectorAll(".page-link");

// pageLinks.forEach(function (pageLink) {
//   pageLink.addEventListener("click", function (event) {
//     event.preventDefault();

//     const href = this.getAttribute("href");

//     transitionScreen.classList.remove("hide");

//     setTimeout(function () {
//       window.location.href = href;
//     }, 100);

//     setTimeout(function () {
//       transitionScreen.classList.add("hide");

//     }, 2000);
//   });
// });


