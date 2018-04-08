


function openmodal2() {
  document.getElementById('myModal2').style.display = "block";
}

function closeModal2() {
  document.getElementById('myModal2').style.display = "none";
}

var slideIndex2 = 1;
showslides2(slideIndex2);

function plusslides2(n) {
  showslides2(slideIndex2 += n);
}

function currentslide2(n) {
  showslides2(slideIndex2 = n);
}

function showslides2(n) {
  var i2;
  var slides2 = document.getElementsByClassName("mySlides2");
  var dots2 = document.getElementsByClassName("demo2");
  var captiontext2 = document.getElementById("caption2");
  if (n > slides2.length) {slideIndex2 = 1}
  if (n < 1) {slideIndex2 = slides2.length}
  for (i2= 0; i2< slides2.length; i2++) {
      slides2[i2].style.display = "none";
  }
  for (i2= 0; i2< dots2.length; i2++) {
      dots2[i2].className = dots2[i2].className.replace(" active", "");
  }
  slides2[slideIndex2-1].style.display = "block";
  dots2[slideIndex2-1].className += " active";
  captiontext2.innerHTML = dots2[slideIndex2-1].alt;
}
