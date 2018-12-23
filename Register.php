
<?php
/* Register.php */
    session_start();
    $_SESSION['message'] = '';
    $mysqli = new mysqli("localhost", "root", "", "arabianfood");

    require 'post.php';



?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/cyborg/bootstrap.min.css">


   <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href=index.html">Wordh's Arabian Food</a>
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



    <div class="body-content" align="center">
      <div class="module">
        <br><br>
        <br><br>
        <h1>Create an account</h1>
        <br><br>
        <br><br>
        <form class="form" action="Register.php" method="post" enctype="multipart/form-data" autocomplete="off">
          <div class="alert alert-error"></div>
          <input type="text" placeholder="First Name" name="Firstname" required />
          <input type="text" placeholder="Last Name" name="Lastname" required />
          <input type="email" placeholder="Email" name="Email" required />
         
          <input type="password" placeholder="Password" name="Password" autocomplete="new-password" required />
          <br><br>
          <label>Gender</label><br>
          <input type="radio" name="Gender" value="Male" required> Male<br>
            <input type="radio" name="Gender" value="Female" required> Female<br>
            <br><br>
          <input type="text" placeholder="Address" name="Address" required />
          <br><br>
          <br><br>
          <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
        </form>
      </div>
    </div>

    <div class="card-footer text-muted">
      All rights reserved by Wordh's Arabian Food
    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

