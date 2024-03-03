<?php
$Con=mysqli_connect('sql6.freesqldatabase.com','sql6688133','KLYamwhJUM','sql6688133');
if(isset($_POST['submit']))
{
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Mobile=$_POST['Mobile'];
    $Comment=$_POST['Comment'];
    $query="INSERT INTO website_data(Name,Email,Mobile,Comment) VALUES ('$Name','$Email','$Mobile','$Comment')";
    $run=mysqli_query($con,$query);
}
?>
