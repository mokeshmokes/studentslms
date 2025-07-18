<?php
session_start(); // ✅ Must be at the top
?>
<?php
include('headericon.php');
?> 
<br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div class="container" style="width: 50%; background-color: aqua;">
        <div class="row text-center">
            <p style="font-size: 40px;font-weight: bolder;" class="text-center">Notice</p>
            <p style="font-size: 140%;"  class="text-center">If you face any issues while using this website, kindly send us your feedback.We will review your suggestions and make improvements as needed.📧Please message your feedback to our email.Thank you for your support!</p>
            <a href="feedback.php"><button style="background-color: darksalmon;border-color: darksalmon;">Feedback Form</button></a>
        </div>
        <br>
    </div>
</body>
</html>
<br><br>
<?php
include('footer.php');
?>