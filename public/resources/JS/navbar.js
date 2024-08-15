// Resizing Nav Bar //
function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    
    document.getElementById("logo").style.height = "80px";
  } else {
    
    document.getElementById("logo").style.height = "120px";
  }
}

window.onscroll = function() {scrollFunction()};