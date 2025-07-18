<?php
$fn=$_POST['fname'];
$fe=$_POST['femail'];
$fs=$_POST['fsubject'];
$fm=$_POST['fmessage'];
$fc=mysqli_connect('localhost','root','');
mysqli_select_db($fc,'studentfriendly');
$fq=("insert into feedback(fname,femail,fsubject,fmessage)values('$fn','$fe','$fs','$fm')");
mysqli_query($fc,$fq);
include('allicon.php');
echo "<script>alert('Your feedback was sent successfully');</script>";
mysqli_close($fc);
?>
