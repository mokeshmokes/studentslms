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
    <style>
        .regester {
            background-color: aqua;
            width: 35%;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
        }

        @media (max-width: 992px) {
            .regester {
                width: 60%;
            }
        }

        @media (max-width: 768px) {
            .regester {
                width: 90%;
            }

            .regester input {
                width: 90% !important;
            }

            .regester button {
                width: 60%;
            }
        }
    </style>
</head>
<body style="background-color: antiquewhite;">
    <div class="container text-center mt-5">
        <div class="regester">
            <p style="color: red; font-size: 25px;">Regester</p>
            <form action="rdb.php" method="POST">
                <label for="name">Name:</label><br>
                <input type="text" name="lname" placeholder="enter your name" required style="width: 50%;"><br><br>
                
                <label for="email">Email:</label><br>
                <input type="email" name="lemail" placeholder="example@gmail.com" required style="width: 50%;"><br><br>
                
                <label for="mobilenumber">Mobile No:</label><br>
                <input type="tel" name="lmobileno" maxlength="10" style="width: 50%;"><br><br>
                
                <label for="password">Password:</label><br>
                <input type="password" required style="width: 50%;" name="lpassword"><br><br>
                
                <a href="login.php">
                    <button type="submit" style="background-color: red; border-color: red;">Register</button>
                </a>
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
