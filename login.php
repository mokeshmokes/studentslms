<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <link rel="stylesheet" href="bootstrap.css"/>
  <link rel="stylesheet" href="style.css">
  <style>
    .login-box {
      max-width: 500px;
      margin: 50px auto;
      background-color: beige;
      padding: 20px;
      border-radius: 10px;
    }

    .login-form {
      background-color: aqua;
      border-radius: 10px;
      padding: 30px 20px;
    }

    .login-form input[type="email"],
    .login-form input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      margin-bottom: 15px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .login-form button {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      color: white;
      font-weight: bold;
    }

    .login-form .btn-login {
      background-color: green;
      border: none;
      margin-bottom: 10px;
    }

    .login-form .btn-register {
      background-color: red;
      border: none;
    }

    .login-form label {
      float: left;
      font-weight: bold;
    }

    @media (max-width: 576px) {
      .login-box {
        margin: 20px;
        padding: 15px;
      }

      .login-form {
        padding: 20px 10px;
      }
    }
  </style>
</head>
<body style="background-color: antiquewhite;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-sm-10">
        <div class="login-box">
          <div class="login-form text-center">
            <p style="font-size: 25px; color: darkred;">Login</p>
            <form action="ldb.php" method="POST">
              <label for="email">Email:</label>
              <input type="email" name="lemail" placeholder="Enter your email" required>

              <label for="password">Password:</label>
              <input type="password" name="lpassword" placeholder="Enter the correct password" required>

              <div class="text-start">
                <input type="checkbox" name="check" required> Given data are valid
              </div><br>

              <button type="submit" class="btn-login">Login</button>
            </form>
            <a href="register.php"><button class="btn-register">Register</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
<br><br>
<?php include('footer.php'); ?>
