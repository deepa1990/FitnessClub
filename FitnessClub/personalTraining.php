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
include 'config.php';

?>
<?php 
 $conn = mysqli_connect($servername, $username, $password, $database);
 $sql1 = "select training_programs.Fitness_Section,training_programs.Days,training_programs.Timing,employee.First_Name,employee.Last_Name FROM
  training_programs inner join employee on training_programs.Employee_Id = employee.Employee_Id";
 $retval = mysqli_query($conn,$sql1);
 

if(! $conn ) {
               die('Could not connect: ' . mysqli_error());
            }
			
			mysqli_close($conn);
            
?>
<div class="container">
<div class="margin-space"></div>

<table class="table table-striped table-inverse">
  <thead>
    <tr>
      <th>Trainer</th>
	  <th>Fitness Section</th>
	  <th>Scheduled Days</th>
	  <th>Timings</th>
    </tr>
  </thead><tbody><?Php
  while($row = mysqli_fetch_array($retval)) {
				echo "<tr><td>".$row['First_Name']." ".$row['Last_Name']."</td><td>".$row['Fitness_Section']."</td><td>".$row['Days']."</td><td>".$row['Timing']."</td></tr>";}?>
</tbody>
</table>
  </div>
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>

<!-- Tether -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>

<!-- Bootstrap 4 Alpha JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>

<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
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
  <?Php 
 include 'footer.php';
 ?>
</footer>
</body>
</html>