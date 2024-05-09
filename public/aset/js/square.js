window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 90 || document.documentElement.scrollTop > 90) {
    document.getElementById("navbar").style.marginTop = "-10px";
    document.getElementById("navbar").style.position = "fixed";
  } else {
    document.getElementById("navbar").style.marginTop = "5px";
    document.getElementById("navbar").style.position = "relative";
  }
}
