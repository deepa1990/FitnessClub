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
<div class="container">
<div class="page-header">
  <h1>WhyJoin</h1>
</div>
<p class="sansserif">
When you enter a Fitness Club, you know what to expect. The state of the art facility
and equipment are familiar and comfortable, but what we are most proud of are the
people who are there to serve you. The people who warmly greet you, expertly train
you, enthusiastically teach you. It is the entire team, our best resource, who is
dedicated to making your fitness experience an exceptional one.
</p>
           <ul class="mainList">
                <li>State-of-the-art equipment & Cardio area </li>
                <li>Group Fitness classes throughout the day, many at no additional charge*</li>
                <li>Indoor heated lap pool, whirlpool spa and saunas</li>
                <li>Racquetball & Basketball* (tournaments and leagues available)</li>
                <li>Locker facilities</li>
                <li>Personal Trainers*</li>
                <li>Kids Klub (babysitting)*</li>
                <li>Locations throughout US and Canada</li>
                <li>Open 7 days per week; with some locations open 24 hours</li>
                <li>Juice Bar*</li>
                <li>Swim School*</li>
                <li class="smallfont">*Additional fee may apply. Some facilities may vary.</li>
            </ul>
	<div class="col-sm-6 pull-right col-xs-6">
<img src="images/whyjoinimg2.jpg" alt="Take care of your body. It's the only place you have to live. Author, Jim Rohn" class="img-responsive" style="width:75%">
</div>
    <div class="col-sm-6 pull-top-right col-xs-6">	
 <div class="whyjoinrate">
                <img class="img-responsive" src="images/whyjoinimg1.jpg" alt="fitness club online sign up detail" />
            </div>
        </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>

<!-- Tether -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>

<!-- Bootstrap 4 Alpha JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>



<footer>
 <?Php 
 include 'footer.php';
 ?>
</footer>
</body>
</html>
