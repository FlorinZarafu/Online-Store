/*
//hamburger mobile icon nav
let navOpen = document.querySelector(".mobile-icon");
// close mobile icon nav
let navClose = document.querySelector(".close-mobile-nav");
// categories nav list
let linkList = document.querySelector(".categories-nav");
// close sub-Link
let closeSubLink = document.querySelectorAll(".close-mobile-nav-sublink");

closeSubLink.forEach(function(close) {
  close.addEventListener("click", function() {
    linkList.style.left = "-100%";
    linkList.style.transition = "0.5s";
  });
});

navOpen.addEventListener("click", function() {
  linkList.style.left = "0";
  linkList.style.transition = "0.5s";
});

navClose.addEventListener("click", function() {
  linkList.style.left = "-100%";
  linkList.style.transition = "0.5s";
});
*/

let navOpen = document.querySelector(".mobile-icon");
console.log(navOpen);
