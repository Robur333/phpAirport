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
    <div class="container">
      <nav class="navBar">
        <div>Cheap Flights Today!</div>
        <div>
          <?php 
          session_start();
          $_SESSION['errorMessage'] = '';
          if(isset($_SESSION['user'])) {
                   echo  '         <a class="navLink" href="/logout">Logout</a>
                   ';
                   echo '<a class="navLink" href="/profile">Profile </a>';
          } else {
         echo'   <a class="navLink" href="/Login">Login</a>';
            echo ' <a class="navLink" href="/register">Sign up</a> ';
          } ?>
        </div>
      </nav>
      <div class="flightBoard">
        <h2>Dostępne Loty</h2>
        <div class="flight">
            <div>Flight Details</div>
            <div>
                <span>65zł</span>
                <button>Select</button>
            </div>
        </div>
        <div class="flight">
          <div>Flight Details</div>
        <div>
            <span>65zł</span>
            <button>Select</button>
        </div>
    </div>
    <div class="flight">
          <div>Flight Details</div>
        <div>
            <span>65zł</span>
            <button>Select</button>
        </div>
</div>
      </div>
    </div>
    <script src="/build/index/index.js"></script>
  </body>
</html>

