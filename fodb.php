<?php

$femail=$_POST['femail'];
$fpassword=$_POST['fpassword'];

$f=mysqli_connect('sql102.infinityfree.com','if0_41975110','w560KoeygZ','if0_41975110_studentnotes');
$fi=("select * from register where lemail='$femail'");
$fcc=mysqli_query($f,$fi);
if(mysqli_fetch_row($fcc)>0){
    $ps="update register set lpassword='$fpassword' where lemail='$femail'";
    mysqli_query($f,$ps);
    include('login.php');
    echo"<script>alert('password was updated');</script>";
}
else{
    include('Forgetpassword.php');
    print "<script>alert('email was not registered');</script>";
}
mysqli_close($f);

?>