// Function for home page slider. //
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("heroSlide");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
} 


// // Resizing Nav Bar //
// function scrollFunction() {
//   if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
//     document.getElementById("navHeader").style.padding = "20px 10px";
//     document.getElementById("logo").style.height = "80px";
//   } else {
//     document.getElementById("navHeader").style.padding = "20px 10px";
//     document.getElementById("logo").style.height = "110px";
//   }
// }

// // Sticky navigation bar //
// var navbar = document.getElementById('navHeader');  
// var sticky = navbar.offsetTop;

// function myFunction() {
//   if (window.scrollY >= sticky) {
//     navbar.classList.add('sticky');
//   } else {
//     navbar.classList.remove('sticky');
//   }
// }
// window.onscroll = function() {scrollFunction(), myFunction()};

// Resizing and Sticky Navigation Bar
// Attach the scrollFunction to the window's onscroll event
// Attach the scroll event to the window
window.onscroll = function() {
  scrollFunction();
};

// Run the scroll function on page load to ensure the navbar is correctly positioned
window.onload = function() {
  scrollFunction();
};

function scrollFunction() {
  var navbar = document.getElementById("navHeader");
  var logo = document.getElementById("logo");
  var sticky = navbar.offsetTop;
  var mainContent = document.querySelector(".main");

  // Only resize and make sticky if the page is actually scrolled
  if (window.scrollY >= sticky) {
    navbar.classList.add('sticky');
    navbar.style.padding = "20px 10px";
    logo.style.height = "80px";
    mainContent.style.paddingTop = navbar.offsetHeight + "px"; // Adjust padding based on navbar height
  } else {
    navbar.classList.remove('sticky');
    navbar.style.padding = "40px 10px";
    logo.style.height = "120px";
    mainContent.style.paddingTop = "0"; // Reset padding when navbar is not sticky
  }
}


