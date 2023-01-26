<?php
session_start();
     global $isPasswordCorrect;
     if(isset($_POST['login'])== false){
        $isPasswordCorrect = true;
     };

     if(isset($_POST['login'])){
    $loginQuery = $_POST['login'];
    $passwordQuery = $_POST['password'];
    $hostname = "127.0.0.1";
    $username = "root";
    $password = "";
    $databasename = "phpdb";
    $isPasswordCorrect = false;
    $email = $_POST['login'];
    

$connect = new mysqli(
    $hostname,
    $username,
    $password,
    $databasename
  );

 // $selectPassword = "SELECT password FROM users where email = '$loginQuery'";
 $selectPassword = "SELECT password FROM users where email = '$loginQuery' ";
 // $selectLogin = "SELECT email FROM users where email = '$loginQuery'";
 $selectLogin = "SELECT * FROM users"  ;

 $selectName =  "SELECT name FROM users where email = '$loginQuery' ";

 
 $resultPassword = $connect->query($selectPassword);
  $resultLogin = $connect->query($selectLogin);
  $resulName = $connect->query($selectName);

 
    if($loginQuery == '' || $passwordQuery == '') {
      $_SESSION["errorMessage"] = "Invalid login or password";

    }
    while($row = $resultLogin->fetch_assoc()) {
      echo 123;
      if($row['password'] != $passwordQuery) {
        $_SESSION['password'] = $loginQuery;
        $_SESSION["errorMessage"] = "Invalid login or password";
        header("Location: /Login");
 }
}
    while($row = $resultPassword->fetch_assoc()) {
      echo 123;
      if($row['password'] == $passwordQuery) {
        while($row = $resulName->fetch_assoc()) {
          $_SESSION['name'] = $row['name'];
        }
        $_SESSION['user'] = $loginQuery;
        $_SESSION["errorMessage"] = "";

        header("Location: /");
 } 
    }
  } 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./build/css/intlTelInput.min.css" />

    <link rel="stylesheet" href="./styling/styles.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <main class="container">
      <h1>Login</h1>
      <Form class="card" method="POST" action="">
        <?php 
        if ( ! empty($_SESSION['errorMessage'])){
        echo '<p class="error-message">Wrong login or password</p>';
        }
        ?>
        <div class="form-step">
          <div class="step-title">
            
            <h3>Email</h3>
          </div>
          <li id="step1" class="form-imputs">
            <input
              name="login"
              id="mail"
              type="text"
              placeholder="Enter your email"
            />
          </li>
        </div>

        <div class="form-step">
          <div class="step-title">
            <h3>Password</h3>
          </div>
          <div id="step3" class="form-imputs">
            <input type="password" id="password" name="password" />
          </div>
        </div>
        <button type="submit" id="submit-btn" class="blue-btn">Sign In</button>
      </Form>
      <button id="back-3" on class="grey-btn"><a href="/">Return</a></button>
      <p>
        Don't have an account? Click here to <a href="/register">sign up</a>
      </p>
    </main>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="./build/js/intlTelInput.min.js"></script>
    <script src="./build/register/register.js"></script>
  </body>
</html>
