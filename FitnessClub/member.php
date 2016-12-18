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
include 'config.php';
session_start();
 $conn = mysqli_connect($servername, $username, $password, $database);
 $Id = $_SESSION['login_user_id']; 
 if($Id == null){
 header("location: login.php");
 }
 
$sql1 = "Select * from customer where Customer_Id = $Id";
$result = mysqli_query($conn,$sql1);
$row = mysqli_fetch_array($result);
$_SESSION['Name'] = $row['FirstName'];
include 'layout.php';
 if(isset($_POST['training'])){
if(!empty($_POST['check_list'])) {
    foreach($_POST['check_list'] as $check) {
           $sql4 = "Insert into training(Program_Id,Customer_Id)values((Select Program_Id from training_programs where Fitness_Section = '$check'),$Id)";
		   $retval = mysqli_query($conn,$sql4);
    }
	 if(! $retval) {
               echo "<div class='container'><div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Update Failed</div></div>";
            }else{
			   echo "<div class='container'><div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Updated Your Training program</div></div>";
			}
}
}
$sql2 = "select employee.First_Name,employee.Last_Name,training_programs.Fitness_Section,training_programs.Days,training_programs.Timing from training 
inner join training_programs on training.Program_Id = training_programs.Program_Id inner join employee on training_programs.Employee_Id = employee.Employee_Id
where training.Customer_Id = $Id";
$scheduleResult = mysqli_query($conn,$sql2);
$count = mysqli_num_rows($scheduleResult);
if($count > 0){
$sql3 = "select training_programs.Fitness_Section from training_programs where Program_Id not in (Select Program_Id from 
training where Customer_Id = $Id)";
$trainingOptions = mysqli_query($conn,$sql3);
}else{
$sql3 = "select training_programs.Fitness_Section from training_programs";
$trainingOptions = mysqli_query($conn,$sql3);
mysqli_close($conn);
}


?>
<div class="container">
<div class="margin-space"></div>
<div class="card card-block">
  <p class="card-text">Address: <?php 
  echo $row['Address1'] . ','. $row['Address2'] .','. $row['City'] .','. $row['Zip'];
  ?></p>
</div>
<?Php
if(mysqli_num_rows($trainingOptions) > 0){
echo "<div class='card card-block'>";
  echo "<h5 class='card-title'>Are you interested in our personal Training Program:(Please choose)</h4>";
echo "<form action="."'".$_SERVER['PHP_SELF']."'"." method='POST' name='training' id='training'>";
echo "<div class='form-group row'>";
echo "<div class='col-sm-10'>";

   while($trainingOptionsRow = mysqli_fetch_array($trainingOptions)){
   echo "<label class='form-check-inline'><input type='checkbox' class='form-check-input' name='check_list[]' value=".$trainingOptionsRow['Fitness_Section'].">  ".$trainingOptionsRow['Fitness_Section']."</label>";
   }
echo "</div></div>";
echo "<div class='form-group row'>";
      echo "<div class='col-sm-10'>";
      echo "<button type='submit' name='training' class='btn btn-primary'>Save</button>";
      echo "</div></div></form></div>";
}
?>

<div class="card card-block">
  <h4 class="card-title">Personal Training assigned to you:</h4>
   <table class="table table-striped table-inverse">
  <thead>
    <tr>
      <th>Trainer</th>
	  <th>Fitness Section</th>
	  <th>Scheduled Days</th>
	  <th>Timings</th>
    </tr>
  </thead><tbody><?Php
  while($scheduleRow = mysqli_fetch_array($scheduleResult)) {
				echo "<tr><td>".$scheduleRow['First_Name']." ".$scheduleRow['Last_Name']."</td><td>".$scheduleRow['Fitness_Section']."</td><td>".$scheduleRow['Days']."</td><td>".$scheduleRow['Timing']."</td></tr>";}?>
</tbody>
</table>
</div>


<div class="card card-block">
  <h4 class="card-title">Membership Validity:</h4>
  <p class="card-text">Membership Expiration Date: <?php 
   echo $row['Expiry_date'];
   
?></p>
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