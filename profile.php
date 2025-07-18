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
    <link rel="stylesheet" href="bootstrap.css">
    <title>Profile</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="container">
    <div style="margin-left: 35%; margin-top: 30px; background-color:gainsboro; width: 30%;">
    <p style="text-align: center;" class=""><i style="color:gray;" class="mt-3 fas fa-user-tie fa-6x"></i></p>
    <p class="mx-3">Name: <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?> </p>
    <p class="mx-3">Email: <?php echo isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Available'; ?> </p>
    <p class="mx-3">Mobile: <?php echo isset($_SESSION['mobileno']) ? $_SESSION['mobileno'] : 'Not available'; ?> </p>
    <p class="mx-3">Password: <?php echo isset($_SESSION['password']) ? $_SESSION['password'] : 'Not available'; ?> </p>
    <br></div>
</div>

</body>
</html>
<br><br>
<?php
include('footer.php');
?>
