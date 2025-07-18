<?php
session_start(); // ✅ Must be at the top!

$email = $_POST['lemail'];
$password = $_POST['lpassword'];

$lc = mysqli_connect('localhost', 'root', '');
mysqli_select_db($lc, 'studentfriendly');

$lq = "SELECT * FROM register WHERE lemail='$email' AND lpassword='$password'";
$lr = mysqli_query($lc, $lq);

if (mysqli_num_rows($lr) > 0) {
    $row = mysqli_fetch_assoc($lr); // ✅ Use correct variable here

    // ✅ Store values in session
    $_SESSION['username'] = $row['lname'];
    $_SESSION['email'] = $row['lemail'];
    $_SESSION['mobileno'] = $row['lmobileno'];
    $_SESSION['password'] = $row['lpassword']; // ✅ Fixed line

    echo "<script>alert('Login success'); window.location.href='allicon.php';</script>";
} else {
    echo "<script>alert('Email or password is incorrect. Try again.'); window.location.href='login.php';</script>";
}

mysqli_close($lc);
?>
