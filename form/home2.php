<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PHP Form Validation Example</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

  <!-- Custom styles for this template -->
  <link href="css/new-age.min.css" rel="stylesheet">

</head>

<body id="page-top">
 

<?php

// define variables and set to empty values
$nameErr = $emailErr = $usernameErr = $passwordErr = $genderErr = "";
$name = $email = $username = $password = $comment = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //Name
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  //Email
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  //Username  
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
  }

  //Password
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }

  //Comment
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  //Gender
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-7 my-auto">
          <div class="header-content mx-auto">
            <h1>PHP Form Validation Example</h1>
      <p><span class="error">* required field</span></p>

      <form role = "form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">

   <div class = "col-sm-offset-2 col-sm-10">

      <label for = "name">Name</label><span class="error">* <?php echo $nameErr;?></span>
      <input type = "text" class = "form-control" id = "name" placeholder = "Enter Name" name="name">
   </div>
    <div class = "col-sm-offset-2 col-sm-10">
      <label for = "name">Email</label><span class="error">* <?php echo $emailErr;?></span>
      <input type = "text" class = "form-control" id = "name" placeholder = "Enter Name" name="email">
   </div>
    <div class = "col-sm-offset-2 col-sm-10"> 
      <label for = "name">UserName</label> <span class="error">*<?php echo $usernameErr;?></span>
      <input type = "text" class = "form-control" id = "name" placeholder = "Enter Username" name="username">
   </div>
   <div class = "col-sm-offset-2 col-sm-10"> 
      <label for = "name">Password</label><span class="error">*<?php echo $passwordErr;?></span>
      <input type = "text" class = "form-control" id = "name" placeholder = "Enter Password" name="password">
   </div>
   <div class = "col-sm-offset-2 col-sm-10"> 
      <label for = "name">Comment</label>
      <textarea class = "form-control" rows = "3" name="comment"></textarea>      
   </div>
   <div class = "col-sm-offset-2 col-sm-10">  <br>
     Gender: 
          <input type="radio" name="gender" value="female">Female
          <input type="radio" name="gender" value="male">Male
          <span class="error">* <?php echo $genderErr;?></span>   
   </div>
   
   <div class = "col-sm-offset-2 col-sm-10">
   <button type = "submit" class = "btn btn-info btn-sm" name="login" value="LOGIN">Send Information</button></div>
</form>        
           
          </div>
        </div>
        <div class="col-lg-5 my-auto">
          <div class="device-container">
            <div class="device-mockup iphone6_plus portrait white">
              <div class="device">
                <div class="screen" style="padding: 15px;">
                  <?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $username;
echo "<br>";
echo $password;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
                  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/new-age.min.js"></script>

  
  <!-- Navigation 
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#download">Download</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#features">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>-->

</body>

</html>
