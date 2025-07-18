<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <link rel="stylesheet" href="bootstrap.css"/>
  <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: antiquewhite;">
  <div class="container" style="background-color: beige; width: 29%;">
    <div class="row  regester text-center mt-5" style="background-color:aqua; width: 400px;">
      <div class="col">
        <br>
        <p style="font-size: 25px; color: darkred;">Login</p>
        <form action="ldb.php" method="POST">
          <label for="email">Email:</label>
          <input type="email" name="lemail" placeholder="Enter your email" required><br><br>

          <label for="password">Password:</label>
          <input type="password" name="lpassword" placeholder="Enter the correct password" required><br><br>

          <input type="checkbox" name="check" required> Given data are valid <br><br>

          <button type="submit" id="loginmain" style="background-color: rgb(0, 255, 21); border: rgb(0, 255, 106); border-radius: 5px;">Login</button><br><br>
        </form>

        <a href="register.php">
          <button style="background-color: red; border: red; border-radius: 5px;">Register</button>
        </a><br><br>
      </div>
    </div>
  </div>
</body>
</html>
<br><br>
<?php
include('footer.php');
?>
