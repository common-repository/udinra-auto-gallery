var UdinraSlideManIndex = 1;

UdinraSlideManFunc(UdinraSlideManIndex);

function UdinraSlideManNav(n) {
    UdinraSlideManFunc(UdinraSlideManIndex += n);
}

function UdinraSlideManCur(n) {
    UdinraSlideManFunc(UdinraSlideManIndex = n);
}

function UdinraSlideManFunc(n) {
  var i;
  var x = document.getElementsByClassName("UdinraAutoGalContainer");
  var dots = document.getElementsByClassName("UdinraAutoGalDots");
  if (n > x.length) {UdinraSlideManIndex = 1}    
  if (n < 1) {UdinraSlideManIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
	dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[UdinraSlideManIndex-1].style.display = "block";  
  dots[UdinraSlideManIndex-1].className += " w3-opacity-off";
}
