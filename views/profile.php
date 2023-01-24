<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="/build/index/index.css" />
    <link rel="stylesheet" href="/build/shared/style.css" />
  </head>
    <title>Profile</title>
    <style>
    header {
        background-color: blue;
        color: white;
        text-align: center;
    }

    main {
        padding: 20px;
    }

    footer {
        text-align: center;
    }
    </style>
</head>
<body>
    <header>
        <h1>User Profile</h1>
    </header>

    <main>
        <h2>Profile Information</h2>

        <h3>Full Name</h3>
        <?php
    $hostname = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "phpdb";
    $conn = new mysqli($hostname, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT name, surname FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
    echo $row["name"], " ", $row["surname"];
        }
    }
    ?>
    <h3>Email</h3>
    <?php
    $sql = "SELECT email FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
    echo $row["email"];
        }
    }
    ?>
    <h3>Phone Number</h3>
    <?php
    $sql = "SELECT phoneNumber FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
    echo $row["phoneNumber"];
        }
    }
    $conn->close();
    ?>
    </main>

    <footer>
        <p>Copyright ©2022 Airport</p>
    </footer>