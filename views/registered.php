<?php
$loginQuery = $_POST['login'];
$passwordQuery = $_POST['password'];
$nameQuery = $_POST['name'];
$surNameQuery = $_POST['surname'];
$phoneQuery = $_POST['phoneNumber'];
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$databasename = "phpdb";

echo $surNameQuery;
echo $phoneQuery;
$connect = new mysqli(
    $hostname,
    $username,
    $password,
    $databasename
  );

  $queryDoZapisuDanych = "INSERT INTO users (email,password,name,surname,phoneNumber) VALUES ('" . $loginQuery . "','" . $passwordQuery . "','" . $nameQuery . "','" . $surNameQuery . "','" . $phoneQuery . "')";
  $result = $connect->query($queryDoZapisuDanych);
    echo $result;

  header("Location: /");
