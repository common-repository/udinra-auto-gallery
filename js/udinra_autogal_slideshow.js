var UdinraSlideAutoIndex = 0;
UdinraSlideAutoFunc();
function UdinraSlideAutoFunc() {
    var i;
    var x = document.getElementsByClassName("UdinraAutoGalContainer");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    UdinraSlideAutoIndex++;
    if (UdinraSlideAutoIndex > x.length) {UdinraSlideAutoIndex = 1}    
    x[UdinraSlideAutoIndex-1].style.display = "block";  
    setTimeout(UdinraSlideAutoFunc, 2500); 
}
