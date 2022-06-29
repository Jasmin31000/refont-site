window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
    document.getElementById("navbar").style.top = "0px";
    document.getElementById("navbar").style.position = "fixed";
    document.getElementById("navbar").style.height = "150px";
    document.getElementById("indica").style.top = "5px";
  } else {
    document.getElementById("navbar").style.top = "0px";
    document.getElementById("navbar").style.position = "relative";
    document.getElementById("navbar").style.height = "73px";
    document.getElementById("indica").style.top = "-35px";
  }
}
