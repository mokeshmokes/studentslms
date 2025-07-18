<?php 
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: antiquewhite;">
    <div class="container text-center mt-5">
        <div class="regester" style="background-color: aqua; margin-left: 33%; width: 35%;">
        <p style="color: red; font-size: 25px;">Regester</p>
        <form action="rdb.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="lname" placeholder="enter your name" required style="width: 50%;"><br><br>
            <label for="email">Email:</label>
            <input type="email" name="lemail" placeholder="example@gmail.com" required style="width: 50%;"><br><br>
            <label for="mobilenumber">Mobile No:</label>
            <input type="tel" name="lmobileno" maxlength="10" style="width: 50%;"><br><br>
            <label for="password">Password:</label>
            <input type="password" required style="width: 50%;" name="lpassword"><br><br>
            <a href="login.php"><button type="submit" style="background-color: red; border-color: red;">Register</button></a>
            <br><br>
        </form>
        </div>
        
    </div>
</body>
</html>
<br><br>

<?php
include('footer.php');
?>