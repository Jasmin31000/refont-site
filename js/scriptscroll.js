window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  let navigbar = document.getElementById("navbar");
  let indicbar = document.getElementById("indica");
  if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
    navigbar.classList.replace("bnav", "bnavscroll");
    indicbar.classList.replace("indic", "indicscroll");
  } else {
    navigbar.classList.replace("bnavscroll", "bnav");
    indicbar.classList.replace("indicscroll", "indic");
  }
}
