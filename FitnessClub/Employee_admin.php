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
include 'config.php';
 $conn = mysqli_connect($servername, $username, $password, $database);
 $Id = $_SESSION['login_user_id']; 
 if($Id == null){
 header("location: login.php");
 }
 
$sql1 = "Select * from employee where Employee_Id = $Id";
$result = mysqli_query($conn,$sql1);
$row = mysqli_fetch_array($result);
$_SESSION['Name'] = $row['First_Name'];
include 'layout.php';
mysqli_close($conn);

?>
<div class="container">
<div class="margin-space"></div>
<div class="card card-block">
  <p class="card-text">Address: <?php 
  echo $row['Address1'] . ','. $row['Address2'] .','. $row['City'] .','. $row['Zip'];
  ?></p>
</div>
<div class="card card-block">
  <h4 class="card-title">Employee Details:</h4>
  <p class="card-text">
   Name: <?php echo $row['First_Name'] .','.$row['Last_Name'] .'<br>';?>
   Employee ID: <?php echo $row['Employee_Id'] .'<br>' ?>
   Designation: <?php echo $row['Designation'] .'.'?>
   </p>
</div>
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
 <?Php 
 include 'footer.php';
 ?>
</footer> 
</body>
</html>
