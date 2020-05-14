<?php
  if (session_status() == PHP_SESSION_NONE) {
    echo "Session not started";
  }
else{
  if (isset($_SESSION['username'])) {
  }
  //if user is not logged in
  else {
    echo"<script> 
    alert('Aha! Nope! You need log in first!');
    window.location.href='login.php';
    </script>";
    }

}
?>
<!DOCTYPE html>
<html>
 <head>
      <title> </title>
      <link rel="stylesheet"  href="/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">

</head>
<body>

<div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link active" href="homepage.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php">Create listing</a>
            </li>
            <li class="nav-item">  
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">  
              <a class="nav-link" href="#"><?php echo $_SESSION['username']?></a>
            </li>
          </ul>
        </nav>
        <h3 class="text-muted"><?php echo SITE_TITLE; ?></h3>
      </div>
      <?php displayMessage();?>

