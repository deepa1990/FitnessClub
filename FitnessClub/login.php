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
<?php
   session_start();
   include 'layout.php';
   include 'config.php';
   $conn = mysqli_connect($servername, $username, $password, $database);
   $Session = array_filter($_SESSION);
	if(count($Session) > 0){
	$IsAdmin = $_SESSION['IsAdmin'];
	if($IsAdmin == 1){
	header("location: Employee_admin.php");
	}else{
	header("location: member.php");
	}
	}
   if(isset($_POST['login'])) {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT Customer_Id,Employee_Id,Admin FROM user_details WHERE Email = '$myusername' and Passcode = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
	   if($row['Employee_Id'] != null){
	  $_SESSION['login_user_id'] = $row['Employee_Id'];
	  $_SESSION['IsAdmin'] = $row['Admin'];
	        header("location: Employee_admin.php");

	  }else{
	  $_SESSION['login_user_id'] = $row['Customer_Id'];
	  $_SESSION['IsAdmin'] = $row['Admin'];
	        header("location: member.php");

	  }
      }else {
	  echo "<div class='container'><div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Your Login Name or Password is invalid</div></div>";
      }
	  
   }
   mysqli_close($conn);
?>

<div class="container">
<div class="margin-space"></div>
<form action="<?php $_PHP_SELF ?>" method="POST" name="login" id="login">
<div class="form-group row">
  <label for="email" class="col-sm-2 col-form-label">Email *</label>
   <div class="col-sm-10">
        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
   </div>
</div>
    <div class="form-group row">
      <label for="password" class="col-sm-2 col-form-label">Password *</label>
      <div class="col-sm-10">
        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
      <button type="submit" name="login" class="btn btn-primary">Sign in</button>
      </div>
    </div>
	<div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <a href="createAccount.php">Not Registered! Please SignIn</a>
      </div>
    </div>
  </form>
  </div>
  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>

<!-- Tether -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>

<!-- Bootstrap 4 Alpha JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>



<!-- Initialize Bootstrap functionality -->
<script>
// Wait for the DOM to be ready
$(function() {
$('[data-toggle="tooltip"]').tooltip();
$('[data-toggle="popover"]').popover();
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("#login").validate({
    // Specify validation rules
    rules: {
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    // Specify validation error messages
       highlight: function (element) {
        $(element).closest('.form-group row').removeClass('success').addClass('error');
    },
    success: function (element) {
        element.text('OK!').addClass('valid')
            .closest('.form-group row').removeClass('error').addClass('success');
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
</script> 
<footer>
<?Php 
 include 'footer.php';
 ?>
</footer>
</body>
</html>