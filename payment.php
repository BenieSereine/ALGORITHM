<?php
$con = mysqli_connect('127.0.0.1','root','');
if(!$con){
    echo'not connect to serve';
}
if(!mysqli_select_db($con,'algoweb-db'))
{
    echo'DATA BASE NOT SELECTED';
}
$name = $_POST['Name'];
$number = $_POST['Number'];
$cvv = $_POST['CVV'];
$sql = "INSERT INTO paymentcard(name,number,cvv) VALUES ('$name','$number','$cvv')";
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

