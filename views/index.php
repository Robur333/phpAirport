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
  <body>
      <div class="pop-up hidden" id="pop-up-id">
        <button class="close-tag grey-btn" onclick="closePopUp()">Return</button>
        <p>To reserve a flight, please <b>sign up</b> or <b>login</b> first</p>
        <div class=pop-up-buttons>
          <a class="navLink" href="/Login">Login</a>
          <a class="navLink" href="/register">Sign up</a>
        </div>
      </div>

    <div class="container">
      <nav class="navBar">
        <div>Cheap Flights Today!</div>
        <div>
          <?php 
          session_start();
          $_SESSION['errorMessage'] = '';
          if(isset($_SESSION['user'])) {
            $user = $_SESSION['name'];
            echo "<p> Hi '$user' </p> ";
                   echo  '         <a class="navLink" id="authenticated" href="/logout">Logout</a>
                   ';
                   echo '<a class="navLink" href="/profile">Profile </a>';
          } else {
           

         echo'   <a class="navLink" href="/Login">Login</a>';
            echo ' <a class="navLink" href="/register">Sign up</a> ';
          } ?>
        </div>
      </nav>
      <div id="flightBoardId" class="flightBoard">
        <h2>Available Flights</h2>
      </div>
    </div>
    <script src="/build/index/index.js"></script>
    <script>

    </script>
  </body>
</html>

