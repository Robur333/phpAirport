<?php
$loginQuery = $_POST['login'];
$passwordQuery = $_POST['password'];


$hostname = "127.0.0.1";
$username = "root";
$password = "";
$databasename = "phpdb";


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
  // if($resultPassword->num_rows> 0){
  //   $options= mysqli_fetch_all($resultPassword, MYSQLI_ASSOC);
  //   foreach ($options as $option) {
  //     if ($option['password'] = $passwordQuery) {
  //       echo $option['password'];
  //       echo $passwordQuery;
  //      } else {
  //           header("Location: /Login?error='Wrong password or Username'");
  //         };
  //   }
  // }
 

  if ($resultPassword->num_rows > 0) {
    // output data of each row
    while($row = $resultPassword->fetch_assoc()) {
      
      if($row['password'] == $passwordQuery) {
        header("Location: /");
 } else {
      header("Location: /Login?error='Wrong password or Username'");      }
    }
  } 
    


  




