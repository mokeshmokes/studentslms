<?php
session_start(); // ✅ Must be at the top!

$email = $_POST['lemail'];
$password = $_POST['lpassword']; 

$lc = mysqli_connect('sql102.infinityfree.com','if0_41975110','w560KoeygZ');
mysqli_select_db($lc, 'if0_41975110_studentnotes');

$lq = "SELECT * FROM register WHERE lemail='$email' AND lpassword='$password'";
$lr = mysqli_query($lc, $lq);

if (mysqli_num_rows($lr) > 0) {
    $row = mysqli_fetch_assoc($lr); // ✅ Use correct variable here

    // ✅ Store values in session
    $_SESSION['username0'] = $row['fname'];
    $_SESSION['username1']=$row['lname'];
    $_SESSION['dob']=$row['dob'];
    $_SESSION['Gender']=$row['Gender'];
    $_SESSION['school']=$row['school'];
    $_SESSION['student_id']=$row['student_id'];
    $_SESSION['place']=$row['place'];
    $_SESSION['state']=$row['state'];
    $_SESSION['email'] = $row['lemail'];
    $_SESSION['mobileno'] = $row['lmobileno'];
    $_SESSION['password'] = $row['lpassword']; // ✅ Fixed line

    echo "<script>alert('Login success'); window.location.href='allicon.php';</script>";
} else {
    echo "<script>alert('Email or password is incorrect. Try again.'); window.location.href='login.php';</script>";
}

mysqli_close($lc);
?>
