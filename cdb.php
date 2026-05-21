<?php
$cn=$_POST['cname'];
$ce=$_POST['cemail'];
$cs=$_POST['csubject'];
$cm=$_POST['cmessage'];
$cc=mysqli_connect('sql102.infinityfree.com','if0_41975110','w560KoeygZ');
mysqli_select_db($cc,'if0_41975110_studentnotes');
$cq=("insert into contact_us(cname,cemail,csubject,cmessage)values('$cn','$ce','$cs','$cm')");
mysqli_query($cc,$cq);
include('index.php');
echo "<script>alert('Your message was sent successfully');</script>";
mysqli_close($cc);
?>
