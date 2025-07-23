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
    <title>Contact Us</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <div class="container" style="max-width: 500px; background-color: darkgray;">
        <p class="text-center" style="font-size: 35px;">Feedback Form</p>
        <div>
           <form action="cdb.php" method="POST">
            <label for="name">Your Name</label><br><br>
            <input type="text" placeholder="enter your name" required style="width: 100%;" name="cname"><br><br>
            <label for="email">Email</label><br><br>
            <input type="email" required placeholder="example@gmail.com" style="width: 100%;" name="cemail"><br><br>
            <label for="subject">Subject</label><br><br>
            <input type="text" required style="width: 100%;" name="csubject"><br><br>
            <label for="message">Message</label><br><br>
            <textarea id="message" rows="5" style="width: 100%;" name="cmessage"></textarea><br><br>
            <button style="background-color: aqua; border: aqua 2px; margin-left: 40%;">Send Message</button>
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
