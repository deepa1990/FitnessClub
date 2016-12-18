<!DOCTYPE html> 
<html>
<head lang="en">
	<meta charset="UTF-8">
		<title>Fitness Club</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" rel="stylesheet">
		<link href="myStyles.css" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="login.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
		<!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

</head>
<body>
<?Php
		session_start();
		 $Id = $_SESSION['login_user_id']; 
		if($Id == null){
			header("location: login.php");
		}
		include 'layout.php';
		include 'config.php';
		$conn = mysqli_connect($servername, $username, $password, $database);
		if(isset($_POST['edit'])){
		$Cust_Id = $_POST['id'];
		$FirstName = $_POST['firstName'];
		$LastName = $_POST['lastName'];
		$Address = explode(",",$_POST['address']);
		$update = "Update customer Set FirstName = '$FirstName',LastName = '$LastName',Address1 = '$Address[0]',
		Address2 = '$Address[1]',City = '$Address[2]',Zip = '$Address[3]' where Customer_Id = $Cust_Id";
		$updateResult = mysqli_query($conn,$update);
		 if(! $updateResult) {
               echo "<div class='container'><div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Could Not Update Data</div></div>";
            }else{
			   echo "<div class='container'><div class='alert alert-success'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Updated Successfully</div></div>";
			}
		}
		$sql1 = "Select customer.Customer_Id,customer.FirstName,customer.LastName,customer.Address1,customer.Address2,customer.City,
		customer.Zip,customer.Phone,user_details.Email from customer inner join user_details on customer.Customer_Id = user_details.Customer_Id";
		$result = mysqli_query($conn,$sql1);
		if(! $conn ) {
		   die('Could not connect: ' . mysqli_error());
		}
		mysqli_close($conn);		
?>
<div class="container">
	<div class="row">
		
        
    <div class="col-md-12">
	 <h5 class="card-title">Please click on the customer row to edit details:</h4>
	<div class="table-responsive">
        <table id="mytable" class="table table-bordred table-striped">
                   <thead>
				   <tr>
				   <th>Id</th>
                   <th>First Name</th>
                   <th>Last Name</th>
                   <th>Address</th>
                   <th>Email</th>
                   <th>Contact</th>
                   </tr>
                   </thead>
				   <tbody>
				   <?Php
				   while($row = mysqli_fetch_array($result)){
				   echo "<tr>
	<td>".$row['Customer_Id']."</td>
    <td>".$row['FirstName']."</td>
    <td>".$row['LastName']."</td>
    <td>".$row['Address1'].",".$row['Address2'].",".$row['City'].",".$row['Zip']."</td>
    <td>".$row['Email']."</td>
    <td>".$row['Phone']."</td>
    </tr>";
	}
	?>
    </tbody>     
</table>

<div class="clearfix"></div>
                
            </div>
            
        </div>
	</div>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
		  <form action="<?php $_PHP_SELF ?>" method="POST" name="edit" id="edit">
		  <div class="form-group">
        <input class="form-control " id="id" name="id" type="text" readOnly="true">
        </div>
          <div class="form-group">
        <input class="form-control " id="firstName" name="firstName" type="text">
        </div>
        <div class="form-group">
        
        <input class="form-control " id="lastName" name="lastName" type="text">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" id="address" name="address"></textarea> 
        </div>
      </div>
          <div class="modal-footer ">
        <button type="submit" name="edit" class="btn btn-warning btn-lg" style="width: 100%;">Update <i class="fa fa-check-circle" aria-hidden="true"></i></button>
      </div>
	  </form>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></button>
        <h4 class="modal-title custom_align" id="Heading1">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
		<form action="<?php $_PHP_SELF ?>" method="POST" name="delete" id="delete">
		 <div class="form-group">
        <input class="form-control " id="id" name="id" type="text" readOnly="true">
        </div>
		<button type="submit" name="delete" class="btn btn-success" >Yes</button>
		<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
		</form>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
<!-- Tether -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>

<!-- Bootstrap 4 Alpha JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

<!-- Initialize Bootstrap functionality -->
<script>
// Initialize tooltip component
$(document).ready(function(){
$('table tbody tr  td').on('click',function(){
    $("#edit").modal("show");
	$("#id").val($(this).closest('tr').children()[0].textContent);
    $("#firstName").val($(this).closest('tr').children()[1].textContent);
    $("#lastName").val($(this).closest('tr').children()[2].textContent);
	$("#address").val($(this).closest('tr').children()[3].textContent);
});
   $('#mytable').DataTable({
			select: true,
            "scrollY": "600px",
            "scrollCollapse": true,
            "bSort": true,
            "paging": true
        });
$('[data-toggle="tooltip"]').tooltip()
$('[data-toggle="popover"]').popover()
    
    $("[data-toggle=tooltip]").tooltip();
});
</script> 
<footer>
 <?Php 
 include 'footer.php';
 ?>
</footer>
</body>
</html>