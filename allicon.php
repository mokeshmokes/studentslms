<?php
session_start(); // ✅ Must be at the top
?>
<?php
include('headericon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>allicon</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .icon {
            font-size: 5vw; /* Responsive icon size */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-6 col-md-3">
                <i class="fas fa-user-tie icon" style="color:gray;"></i>
                <a href="profile.php"><p class="mt-1">Profile</p></a>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-pen-square icon" style="color: sandybrown;"></i>
                <a href="notice.php"><p class="mt-1">Notice</p></a>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-lightbulb icon" style="color:yellow;"></i>
                <a href="dout_searching.php"><p class="mt-1">Doute Searching</p></a>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-book icon" style="color: mediumvioletred;"></i>
                <a href="guides.php"><p class="mt-1">Guides</p></a>
            </div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col-6 col-md-3">
                <i class="fas fa-video icon" style="color: mediumseagreen;"></i>
                <a href="vedio.php"><p class="mt-1">Vedio</p></a>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-question-circle icon" style="color: gray;"></i>
                <a href="questions.php"><p class="mt-1">Question Paper</p></a>
            </div>
            <div class="col-6 col-md-3">
                <i class="fas fa-sign-out-alt icon" style="color: red;"></i>
                <a href="login.php"><p class="mt-1">Logout</p></a>
            </div>
        </div>
    </div>
</body>
</html>

<?php
include('footer.php');
?>
