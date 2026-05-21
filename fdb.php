<?php
$fn=$_POST['fname'];
$fe=$_POST['femail'];
$fs=$_POST['fsubject'];
$fm=$_POST['fmessage'];
$fc=mysqli_connect('sql102.infinityfree.com','if0_41975110','w560KoeygZ');
mysqli_select_db($fc,'if0_41975110_studentnotes');
$fq=("insert into feedback1(fname,femail,fsubject,fmessage)values('$fn','$fe','$fs','$fm')");
mysqli_query($fc,$fq);
include('allicon.php');
echo "<script>alert('Your feedback was sent successfully');</script>";
mysqli_close($fc);
?>
