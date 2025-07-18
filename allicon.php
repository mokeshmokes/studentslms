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
</head>
<body>
    <div class="container mt-5">
    <br><br>
    <div class="row">
    <div class="col">
    <i style="color:gray;" class="fas fa-user-tie fa-6x"></i>
    <a href="profile.php"><p class="mt-1 mx-3">Profile</p></a>
    </div>
    <div class="col">
    <i class="fas fa-pen-square fa-6x" style="color: sandybrown;"></i>
    <a href="notice.php"><p class="mt-1 mx-3">Notice</p></a>
    </div>
    <div class="col">
    <i class=" fas fa-lightbulb fa-6x" style="color:yellow;"></i>
    <a href="dout_searching.php"><p class="mt-1 ">Doute Searching</p></a>
    </div>
    <div class="col">
   <i class="fas fa-book fa-6x" style="color: mediumvioletred;"></i>
    <a href="guides.php"><p class="mt-1 mx-3">Guides</p></a>
    </div>
    </div><br><br>
   <div class="row">
   <div class="col">
    <i class="fas fa-video fa-6x" style="color: mediumseagreen;"></i>
    <a href="vedio.php"><p class="mx-3">Vedio</p></a>
    </div>
    <div class="col">
    <i class="fas fa-question-circle fa-6x" style="color: gray;"></i>
    <a href="questions.php"><p class="mt-1">Question Paper</p></a>
    </div>
    <div class="col">
    <i class="fas fa-sign-out-alt fa-6x" style="color: red;"></i>
    <a href="login.php"><p class="mt-1 mx-3">Logout</p></a>
    </div>
    </div>
    </div>
    
</body>
</html><br><br><br><br>

<?php
include('footer.php');
?> 