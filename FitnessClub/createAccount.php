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
<?php 
 session_start();
 include 'layout.php';
 include 'config.php';
 $conn = mysqli_connect($servername, $username, $password, $database);
 if(isset($_POST['add'])) {
			   $retval1 = null;
			   $retval2 = null;
               $FirstName = $_POST['FirstName'];
               $LastName = $_POST['LastName'];
               $Address1 = $_POST['Address1'];
			   $Address2 = $_POST['Address2'];
			   $City = $_POST['City'];
			   $Zip= $_POST['Zip'];
			   $Phone = $_POST['Phone'];
			   $Email = $_POST['email'];
			   $Passcode = $_POST['Password'];
			   
			   if(!empty($_POST['admin'])){
			   $IsAdmin = $_POST['admin'];
			   }else{
			   $IsAdmin = false;
			   }
			 
			if($IsAdmin){
			   $sql1 = "INSERT INTO employee(First_Name,Last_Name, 
               Address1,Address2,City,Zip,Phone,Designation)VALUES('$FirstName','$LastName','$Address1','$Address2','$City',$Zip,'$Phone','Admin Manager')";
			   $sql2 = "INSERT INTO user_details(Email,Passcode,Admin,Customer_Id,Employee_Id)VALUES('$Email','$Passcode',true,null,(SELECT Employee_Id from employee where First_Name = '$FirstName' and Last_Name = '$LastName'))";
               
            $retval1 = mysqli_query($conn,$sql1);
			$retval2 = mysqli_query($conn,$sql2);
			
			}else{
			   $sql1 = "INSERT INTO customer(FirstName,LastName, 
               Address1,Address2,City,Zip,Phone,Expiry_date)VALUES('$FirstName','$LastName','$Address1','$Address2','$City',$Zip,'$Phone',DATE_ADD(CURDATE(),INTERVAL 1 YEAR))";
			   $sql2 = "INSERT INTO user_details(Email,Passcode,Admin,Customer_Id,Employee_Id)VALUES('$Email','$Passcode',false,(SELECT Customer_Id from customer where FirstName = '$FirstName' and LastName = '$LastName'),null)";
               
            $retval1 = mysqli_query($conn,$sql1);
			$retval2 = mysqli_query($conn,$sql2);
			}
            
            if(! $retval1 or ! $retval2) {
               echo "<div class='container'><div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Data already exists</div></div>";
            }else{
			   echo "<div class='container'><div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Account Created, Please Login</div></div>";
			}
			}
			if(! $conn ) {
               die('Could not connect: ' . mysqli_error());
            }
			
			mysqli_close($conn);
    ?>
<div class="container">
<div class="margin-space"></div>
<form action="<?php $_PHP_SELF ?>" method="post" id="add" name="add">
<div class="form-group row">
  <label for="firstName" class="col-xs-2 col-form-label">FirstName *</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" placeholder="FirstName" id="FirstName" name="FirstName" required>
  </div>
</div>
<div class="form-group row">
  <label for="lastName" class="col-xs-2 col-form-label">LastName *</label>
  <div class="col-xs-10">
    <input class="form-control" type="search" placeholder="LastName" id="LastName" name="LastName" required>
  </div>
</div>
<div class="form-group row">
  <label for="email" class="col-xs-2 col-form-label">Email *</label>
  <div class="col-xs-10">
    <input class="form-control" type="email" placeholder="Email" id="email" name="email" required>
  </div>
</div>
<div class="form-group row">
  <label for="address1" class="col-xs-2 col-form-label">Address1*</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" placeholder="Address1" id="Address1" name="Address1" required>
  </div>
</div>
<div class="form-group row">
  <label for="address2" class="col-xs-2 col-form-label">Address2*</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" placeholder="Address2" id="Address2" name="Address2" required>
  </div>
</div>
<div class="form-group row">
  <label for="city" class="col-xs-2 col-form-label">City*</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" placeholder="City" id="City" name="City" required>
  </div>
</div>
<div class="form-group row">
  <label for="zipcode" class="col-xs-2 col-form-label">Zip*</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" placeholder="Zip" id="Zip" name="Zip" required>
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-xs-2 col-form-label">Telephone*</label>
  <div class="col-xs-10">
    <input class="form-control" type="tel" Placeholder="###-###-####" id="Phone" name="Phone" Pattern="^[0-9]{3}-[0-9]{3}-[0-9]{4}$" required>
  </div>
</div>
<div class="form-group row">
  <label for="example-password-input" class="col-xs-2 col-form-label">Password *</label>
  <div class="col-xs-10">
    <input class="form-control" type="password" Placeholder="Password" value="" id="Password" name="Password" required >
  </div>
</div>
<div class="form-group row">
  <label for="confirmPassword" class="col-xs-2 col-form-label">Confirm Password *</label>
  <div class="col-xs-10">
    <input class="form-control" type="password" Placeholder="Confirm Password" value="" id="ConfirmPassword" name="ConfirmPassword" required onchange='check_pass();'>
  </div>
</div>
  <div class="form-group row">
      <label class="col-sm-2">Create an Admin Account</label>
      <div class="col-sm-10">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="true" name="admin">
          </label>
        </div>
      </div>
    </div>
<div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-primary" id="add" name="add">Submit</button>
      </div>
    </div>
	</form>
<script>
// Initialize popover component
$(function () {
  $('[data-toggle="popover"]').popover()
  $('[data-toggle="tooltip"]').tooltip()
})
   function check_pass(){
    if (document.getElementById('Password').value!=document.getElementById('ConfirmPassword').value){
        $('#ConfirmPassword').closest("div").addClass("has-danger");
		$('#ConfirmPassword').closest("div").after( "<div class='form-control-feedback' id='danger1'>Sorry, Passwords don't match</div>" );
		$("button[name=add]").prop("disabled", true);

	}else {
		$('#ConfirmPassword').closest("div").removeClass("has-danger");
		$('#danger1').remove();
		$("button[name=add]").prop("disabled", false);

		}
    };
</script>


    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>

<!-- Tether -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>

<!-- Bootstrap 4 Alpha JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>


<!-- Initialize Bootstrap functionality -->
<footer>
   <?Php 
 include 'footer.php';
 ?>
</footer>
</body>
</html>