<!DOCTYPE html> 
<html lang="en">
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
<div class="container">
<div class="page-header">
<h1>History</h1>
</div>
    <blockquote class="card-blockquote">
      <p class="serif">Fitness, as we know it today,seems to be a relatively modern invention-something that started with
	  jogging and jazzercise.But physical excersice obviously goes back much further than that,
to a time where people wouldn't have thought of it as working out, but rather a way of life. Centuries and 
millennia ago, they did not have all the machines and weights and gyms that we have today, and yet they were
 in better shape than we are. To understand why this is, how we got to our modern fitness club, and what we 
 have lost along the way, it's helpful to take a look at the history of excersice. One of the greatest 
 accomplishments to be celebrated in the continous pursuit of fitness since the beginning of man's existence.
On taking the next steps to improved health and wellness! Remember, you haven't made a commitment to us but to
 yourself and we at the FITNESS CLUB will do what it takes to help you be true to yourself. Now that you have 
 elected to improve your health and physical condition, We will be by your side every step of the way. Our 
 mission here at the FITNESS CLUB is to provide and create a fitness environment that continously motivates 
 our members to improve their health and physical condition by educating our community on the lifetime 
 benefits of moderate excercise.</p>
    </blockquote>

  </div>
  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>

<!-- Tether -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>

<!-- Bootstrap 4 Alpha JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>


<!-- Initialize Bootstrap functionality -->
<script>
// Initialize tooltip component
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Initialize popover component
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script> 
<footer>
 <?Php include 'footer.php';
 ?>
</footer>
</body>
</html>