function motionBackground() {
  var background = document.getElementsByClassName("wadah")[0];
  var x = 0;

  setInterval(function(){
    background.style.backgroundPosition = x + 'px 0';
    x--
  },10);
}

window.addEventListener('load', motionBackground, false);