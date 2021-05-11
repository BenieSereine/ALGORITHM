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
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$comment = $_POST['Comments'];
$sql = "INSERT INTO contactdata(name,email,phone,message) VALUES ('$name','$email','$phone','$comment')";
if(!mysqli_query($con,$sql))
{
    echo '<script>alert("Fail to contact us, Please try again")</script>';
    echo '<script>window.location.href="contact.html";</script>';
}
else{
    echo '<script>alert("Thank you! We will get back to you")</script>';
    echo '<script>window.location.href="index.html";</script>';
}

?>
<?php 
if(isset($_POST['Submit'])){
    $to = "sandrinewandinda@example.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['Name'];
    $phone = $_POST['Phone'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " " . $phone . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>