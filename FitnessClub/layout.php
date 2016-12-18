<div class="container">
<div>
	<img src="images/FitnessLogo.jpg" alt="logo" class="logo">
	<span class="title">FITNESS CLUB</span><?Php
   $Session = array_filter($_SESSION);
	if(count($Session) > 0){
	if($_SESSION['Name'] != null){
	$name = $_SESSION['Name'];
    echo "<span class='member'>Hi ";
	echo $name.'  ';
	echo "<a href='logout.php'><i class='fa fa-sign-out' aria-hidden='true'></i></a></span>";
	}
	}?>
</div>
  <nav class="navbar navbar-dark bg-inverse">
  <ul class="nav navbar-nav">
  <li class="nav-item">
      <a class="nav-link" href="fitnessClub.php">Home</a>
    </li>
<li class="nav-item">
  <a class="nav-link" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
    About
  </a>
  <div class="dropdown-menu menu-dropdown-adjust2" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="history.php">History</a>
    <a class="dropdown-item" href="whyjoin.php">Why Join</a>
	<a class="dropdown-item" href="imagegallery.php">Image Gallery</a>
  </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="" id="dropdownMenuLink1" data-toggle="dropdown" aria-expanded="false">
       Member Tools
     </a>
  <div class="dropdown-menu menu-dropdown-adjust1" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="createAccount.php">Create Online Account</a>
    <a class="dropdown-item" href="eventsandnews.php">Events/News</a>
  </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="personalTraining.php">Training</a>
    </li>
   	<li class="nav-item">
      <a class="nav-link" href="login.php">Login</a>
    </li>
	<?Php
	$Session = array_filter($_SESSION);
	if(count($Session) > 0){
	if($_SESSION['IsAdmin'] == 1){
    echo "<li class='nav-item'>";
	echo "<a class='nav-link' href='AdminPage.php'>Admin</a>";
	echo " </li>";
	}
	}
	?>
  </ul>
</nav>
</div>