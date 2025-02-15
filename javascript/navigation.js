"use strict";

/*mobile navigation hamburger menu*/
/*activate css animations when hamburger is clicked*/

const hamburgerContainer = document.querySelector(".hamburger-container");
const hamburger1 = document.querySelector(".hamburger-1");
const hamburger2 = document.querySelector(".hamburger-2");
const hamburger3 = document.querySelector(".hamburger-3");
const nav = document.querySelector(".navigation");
let isClicked = false;

hamburgerContainer.addEventListener("click", (e) => {
  if (e.target.classList.contains("hamburger")) {
    if (!isClicked) {
      hamburger1.style.animationName = "flipDown";
      hamburger2.style.animationName = "fadeOut";
      hamburger3.style.animationName = "flipUp";
      nav.style.display = "block";
      isClicked = true;
    } else {
      hamburger1.style.animationName = "";
      hamburger2.style.animationName = "";
      hamburger3.style.animationName = "";
      nav.style.display = "none";
      isClicked = false;
    }
  }
});