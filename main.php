 <!DOCTYPE html>
 <html>
<head>
<title>HOME</title>
<link href="main.css" rel="stylesheet">
</head>
<body>
	<div class="header"> 
	    <b href = "main.html" > <img src="ab.png" id ="logo"> </b>
		<span class="head">LIMITED</span>
		<a href = "home.html" class="b"> HOME </a>
		<a href = "gallery.html" class="b"> GALLERY </a>
		<a href = "home.html" class="b"> LOGIN </a>
		<a href = "home.html" class="b"> LOGIN</a>
		<a href = "about.html" class="b"> ABOUT US </a>
	</div>
	<div class="t2">
		  <img class="mySlides" src="pic1.jpg" width="750px" height="350px">
		  <img class="mySlides" src="pic2.jpg" width="750px" height="350px">
		  <img class="mySlides" src="pic3.jpg" width="750px" height="350px">
		  <img class="mySlides" src="pic4.jpg" width="750px" height="350px">
		  <img class="mySlides" src="pic5.jpg" width="750px" height="350px">
	</div>
		<script>
		var myIndex = 0;
		carousel();

		function carousel() {
		    var i;
		    var x = document.getElementsByClassName("mySlides");
		    for (i = 0; i < x.length; i++) {
		       x[i].style.display = "none";  
		    }
		    myIndex++;
		    if (myIndex > x.length) {myIndex = 1}    
		    x[myIndex-1].style.display = "block";  
		    setTimeout(carousel, 2000); // Change image every 2 seconds
		}
		</script>
	<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>
</body>

</html> 