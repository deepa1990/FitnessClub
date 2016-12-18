<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
		<title>Fitness Club</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" rel="stylesheet">
		<link href="myStyles.css" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="login.css" rel="stylesheet">
		<!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
</head>
<body>
<?Php 
 session_start();
include 'layout.php';
?>
<div class="margin-space"></div>
<div class="container">
<!-- Slide Show -->
<section>
<h3>Gallery</h3>
  <img class="mySlides img-responsive" src="images/img1.jpg" alt="random image" style="width:33%">
  <img class="mySlides img-responsive" src="images/img2.jpg" alt="random image" style="width:33%">
  <img class="mySlides img-responsive" src="images/img3.jpg" alt="random image"   style="width:33%">	  
  <img class="mySlides img-responsive" src="images/img4.jpg" alt="random image"   style="width:33%">	  	
  <img class="mySlides img-responsive" src="images/img5.jpg" alt="random image"   style="width:33%">
  <img class="mySlides img-responsive" src="images/img6.jpg" alt="random image"   style="width:33%">
  <img class="mySlides img-responsive" src="images/img7.jpg" alt="random image"   style="width:33%">
  <img class="mySlides img-responsive" src="images/img8.jpg" alt="random image"   style="width:33%">
  <img class="mySlides img-responsive" src="images/img9.jpg" alt="random image"   style="width:33%">
  <img class="mySlides img-responsive" src="images/img10.jpg" alt="random image" style="width:33%">
  <img class="mySlides img-responsive" src="images/img11.jpg" alt="random image" style="width:33%">
  <img class="mySlides img-responsive" src="images/img12.jpg" alt="random image" style="width:33%">
  <img class="mySlides img-responsive" src="images/img13.jpg" alt="random image" style="width:33%">
  <img class="mySlides img-responsive" src="images/img14.jpg" alt="random image" style="width:33%">
  <img class="mySlides img-responsive" src="images/img15.jpg" alt="random image" style="width:33%">
  </section>
 </div>
 </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>

<!-- Tether -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>

<!-- Bootstrap 4 Alpha JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>

  <!-- Footer -->

<footer>
 <?Php 
 include 'footer.php';
 ?>
</footer>

</body>
</html>
  