
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
      <h1>Sign Up Form</h1>
      <Form class="card" method="POST" action="/views/registered.php">
        <div class="form-step">
          <div class="step-title">

            <h3>Email</h3>
          </div>
          <li id="step1" class=" form-imputs ">
            <input id="mail" name='login' type="text" placeholder="Enter your email" />
            
          </li>
        </div>
        <div class="form-step">
          <div class="step-title">
            
            <h3>Name</h3>
          </div>
          <div id="step2" class="form-imputs  ">
            <input name='name' id="name" type="text" placeholder="Enter your name" />
            <input  name='surname' id="surname" type="text" placeholder="Enter your surname" />
            
          </div>
        </div>
        <div class="form-step">
          <div class="step-title">
           
            <h3>Password</h3>
          </div>
          <div id="step3" class="form-imputs ">
            <input
              type="password"
              id="psw"
              name="password"
              pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
              title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
              required
              placeholder="Enter your password"
            />
            <div id="message">
              <h5>Password must contain the following:</h3>
              <p id="letter" class="invalid">A lowercase letter</p>
              <p id="capital" class="invalid">A capital (uppercase) letter
              </p>
              <p id="number" class="invalid">A number</p>
              <p id="length" class="invalid">Minimum 8 characters || Max12   characters
              </p>
            </div>
            
          </div>
        </div>
        <div class="form-step">
          <div class="step-title">
            
            <h3>Phone Number</h3>
          </div>
          <div id="step4" class="form-imputs ">
            <input name="phoneNumber" id="phone" type="tel" />
            <div>
              <button id="back-3" on class="grey-btn"><a href="/">Return</a></button>
              <button id="submit-btn" class="blue-btn">Sign In</button>
            </div>
          </div>
        </div>
      </Form>
    </main>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="./build/js/intlTelInput.min.js"></script>
    <script src="./build/register/register.js"></script>

  </body>
</html>
