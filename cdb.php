<?php
$cn=$_POST['cname'];
$ce=$_POST['cemail'];
$cs=$_POST['csubject'];
$cm=$_POST['cmessage'];
$cc=mysqli_connect('localhost','root','');
mysqli_select_db($cc,'studentfriendly');
$cq=("insert into contact_us(cname,cemail,csubject,cmessage)values('$cn','$ce','$cs','$cm')");
mysqli_query($cc,$cq);
include('allicon.php');
echo "<script>alert('Your message was sent successfully');</script>";
mysqli_close($cc);
?>
