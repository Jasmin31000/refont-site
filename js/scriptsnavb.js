window.addEventListener("scroll", activelink);

function activelink (){
  var list = document.querySelectorAll('a.lien.active').parentNode;

  console.log(list);
};
