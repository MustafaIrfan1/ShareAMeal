<?php
include 'dbconnect.php';

if(isset($_POST['btn-contact']))
{
    $cname = $_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $msg=$_POST['msg'];

    $query="INSERT INTO message (messengerName,Email,Phone,Message) VALUES ('$cname','$email','$phone','$msg')";
    //$ins_query = "INSERT INTO yab-contact(name,email,msg) VALUES ('$name','$email','$msg')";
    if($db->query($query))
    {
        $msg = "<div class='alert alert-success'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Your Message is Successfully Sent!
                </div>";
        echo "<script> alert('Your Message is Successfully Sent !');location.href='../index.php'</script>";
    }
    else
    {
        $msg = "<div class='alert alert-danger'>
                <span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error while sending your message !
                </div>";
        echo "<script> alert('Error while sending your message !');location.href='../contact-us.php'</script>";
    }
}
?>