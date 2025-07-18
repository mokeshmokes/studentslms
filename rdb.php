<?php
$name=$_POST['lname'];
$password=$_POST['lpassword'];
$email=$_POST['lemail'];
$mobileno=$_POST['lmobileno'];

$rc=mysqli_connect('localhost','root','');
mysqli_select_db($rc,'studentfriendly');
$rq=("select * from register where lemail='$email' ");
$rcc = mysqli_query($rc, $rq);

if (mysqli_num_rows($rcc) > 0) {
    include('register.php');
    echo "Already Registered!";
}
else {
$ri=("insert into register(lname,lpassword,lemail,lmobileno)values('$name','$password','$email','$mobileno')");    
$rr=mysqli_query($rc,$ri);
include('login.php');
echo "registation was successfully completed";

}

mysqli_close($rc);
?>
