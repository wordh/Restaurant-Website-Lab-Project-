
	<?php  //Start the Session
	session_start();
	 require('connect.php');
	if (isset($_POST['Email']) and isset($_POST['password'])){
	$Email = $_POST['Email'];
	$password = $_POST['password'];
	$query = "SELECT * FROM `user` WHERE Email='$Email' and password='$password'";
	 
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	$count = mysqli_num_rows($result);
	
	if ($count == 1){
	$_SESSION['Email'] = $Email;
	}else{
	
	$fmsg = "Invalid Login Credentials.";
	}
	}
	//3.1.4 if the user is logged in Greets the user with message
	if (isset($_SESSION['Email'])){
	$Email = $_SESSION['Email'];
		header("location: Profile.php");
	 
	}else{
		echo "Your Email or Password is wrong
		";
	}
	?>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/cyborg/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/myStyle.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">


    <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/formstyle.css" type="text/css">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="index.html">Wordh's Arabian Food</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu.html">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallery.html">Gallery</a>
              </li>
                    <li class="nav-item active">
              <a class="nav-link" href="Register.php">Registration </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Login.php">Login </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Profile.php">Profile </a>
            </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="contact.html">Contact Us</a>
              </li>
            </ul>
          </div>
        </nav>

<div class="body-content">
      <div class="module">
        <h1>Welcome Back</h1>
        <br><br>
        <br><br>
        <form class="form" action="Login.php" method="post" enctype="multipart/form-data" autocomplete="off">
          <div class="alert alert-error"></div>
          <input type="email" placeholder="Email" name="Email" required />
          <input type="password" placeholder="Password" name="Password" autocomplete="new-password" required />
          <br><br>
        <br><br>
          <input type="submit" value="Login" name="login" class="btn btn-block btn-primary" />
          <br><br>
        <br><br>
       
          <a  href="Register.php" class=" btn btn-block btn-primary" required> Not Register? Register Now</a>

        </form>
      </div>
    </div>


    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

        <div class="card-footer text-muted">
    All rights reserved by Wordh's Arabian Food
  </div>