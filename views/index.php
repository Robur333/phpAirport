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
        <div class="navLinks">
          <button class="navLink"><a href="/Login">Login</a></button>
          <button class="navLink"><a href="/register">Sign up</a></button>
          <?php 
          session_start();
          if(isset($_SESSION['user'])) {
                   echo  '<button class="navLink"><a href="/profile">Profile</a></button>';

          }; ?>
          <?php 
          if(isset($_SESSION['user'])) {
                   echo  '<button class="navLink"><a href="/logout">Logout</a></button>';

          }; ?>
        </div>
      </nav>
      <div class="flightBoard">
        <h2>Dostępne Loty</h2>
        <div class="flight">
            <div>Flight Detail</div>

            <div>
                <span>65zł</span>
                <button>Select</button>
            </div>
        </div>
        <div>Flight Detail</div>

        <div>
            <span>65zł</span>
            <button>Select</button>
        </div>
    </div>
    <div>Flight Detail</div>

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

