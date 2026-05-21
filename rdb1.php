<?php
$name=$_POST['fname'];
$name1=$_POST['lname'];
$dob=$_POST['dob'];
$Gender=$_POST['Gender'];
$school=$_POST['school'];
$student_id=$_POST['student_id'];
$place=$_POST['place'];
$state=$_POST['state'];
$password=$_POST['lpassword'];
$email=$_POST['lemail'];
$mobileno=$_POST['lmobileno'];

$rc=mysqli_connect('sql102.infinityfree.com','if0_41975110','w560KoeygZ');
mysqli_select_db($rc,'if0_41975110_studentnotes');
$rq=("select * from register where lemail='$email' ");
$rcc = mysqli_query($rc, $rq);

if (mysqli_num_rows($rcc) > 0) {
     echo "<script>alert('Already Registered!');</script>";
    include('register.php');
    
}
else {
$ri=("insert into register(fname,lname,dob,Gender,school,student_id,place,state,lpassword,lemail,lmobileno)values('$name','$name1','$dob','$Gender','$school','$student_id','$place','$state','$password','$email','$mobileno')");
$rr=mysqli_query($rc,$ri);
include('login.php');
echo "<script>alert('registation was successfully completed')</script>";

}

mysqli_close($rc);
?>
