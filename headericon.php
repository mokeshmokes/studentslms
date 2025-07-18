<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style>
        .header{
            top: 0px;
            position:relative;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="header">
        <header>
        <div class="container">
            <div class="row" style="background-color: ghostwhite;">
                <div class="col">
                    <img src="image/graduated-removebg-preview.png" alt="" height="100px" width="100px">
                </div>
                <div class="col">
                    <p class="h1 text-center mt-3" style="color: rgba(121, 69, 65, 0.7);">Student_Friendly</p>
                </div>
                <div class="col" style="top: 18px;position: relative;left: 80px;">
    <p>Name: <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?></p>
    <p>Email: <?php echo isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Available'; ?></p>
                </div>
                <div class="col">
                    <i style="color:gray;" class="fas fa-user-tie fa-5x"></i>
                </div>
                <!-- <div class="col text-center">
                <a href="login.php"><button id="loginhead" class="mt-4" style="background-color: aqua; border: 2px aqua; border-radius: 3px; font-size: 25px;font-weight: bolder;">login</button></a>
                </div>
                <div class="col text-center">
                   <a href="register.php"><button class="mt-4" style="background-color:red; border: 2px red; border-radius: 3px;font-size: 25px;font-weight: bold;">register</button></a>
                </div> -->
            </div>
        </div>
    </header>
    </div>