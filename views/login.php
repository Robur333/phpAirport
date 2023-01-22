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
 
 $resultPassword = $connect->query($selectPassword);
  $resultLogin = $connect->query($selectLogin);

    if($loginQuery == '' || $passwordQuery == '') {
      $_SESSION["errorMessage"] = "Invalid login or password";

    }
 



    // output data of each row
    while($row = $resultPassword->fetch_assoc()) {
      echo 123;
      if($row['password'] == $passwordQuery) {
        $_SESSION['user'] = $loginQuery;
        $_SESSION["errorMessage"] = "";

        header("Location: /");
 } else {
  echo 123;
    $_SESSION["errorMessage"] = "Invalid login or password";
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
        echo $_SESSION['errorMessage'];
        if ( ! empty($_SESSION['errorMessage'])){
        echo '<p> Wrong login or password</p>';
        }else{
            $isPasswordCorrect = true;;

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
