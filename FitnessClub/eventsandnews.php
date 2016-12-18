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
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
<!-- Tether -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>

<!-- Bootstrap 4 Alpha JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>

<div class="container">
<div class="page-header">
  <h1>EventsAndNews</h1>
</div>
<div class="jumbotron">
	<h2>Be A Fitness Friend</h2>
<ul class="mainList">
	<li>Pick up your green envelopes at the front desk containing 3 “14-Day Pass” cards for your co-workers</li>
</ul>
<h2>Please stop by the Front Desk</h2>
<ul class="mainList">
           <li>confirm we have your correct email address and recieve information pertaining to.</li>
           <li>Revised Holiday Gym Hours.</li>
           <li>Group fitness classes.</li>
           <li>Personal Training Discount Specials.</li>
           <li>Gym contests.</li>
           <li>Health and Fitness Program Registration.</li>
           <li>and whatever else news worthy that floats our boat.</li> 
</ul>
<h2>Win your chance</h2>
<ul class="mainList">
<li>Bring a friend to workout for free on his/her 1st visit</li>
<li>Refer a friend to join on a 1-2 year membership and recieve 1 month free 1 month club membership.</li>
<li>Your name is entered into our yearly Refer-a friend contest for every friend that joins the gym!</li>
<li>You can WIN  1-year FREE membership!</li>
<li>You can sign up 48 hrs in advance and early without penalty up to 3o minutes before class start time! Please see desk for assistance.</li>
</ul>
</div>
</div>
</div>
<footer>
  <?Php 
 include 'footer.php';
 ?>
</footer>
</body>
</html>
