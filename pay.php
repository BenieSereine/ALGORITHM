<?php
$con = mysqli_connect('127.0.0.1','root','');
if(!$con){
    echo'not connect to serve';
}
if(!mysqli_select_db($con,'algoweb-db'))
{
    echo'DATA BASE NOT SELECTED';
}
$UserName = $_POST['UserName'];
$NumberType = $_POST['NumberType'];
$MobileNumber = $_POST['MobileNumber'];
$sql = "INSERT INTO mtntigopayment(name,type,number) VALUES ('$UserName','$NumberType','$MobileNumber')";
if(!mysqli_query($con,$sql))
{
    echo '<script>alert("Fail to Pay, Please try again")</script>';
    echo '<script>window.location.href="pay.html";</script>';
}
else{
    echo '<script>alert("Thank you! Your Payment is successful")</script>';
    echo '<script>window.location.href="download.html";</script>';
}

?>