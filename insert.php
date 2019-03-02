<?php
$conn  = mysqli_connect('localhost','root','','chatlist');
$name = $_GET['name'];
$message = $_GET['message'];
$insert = "INSERT INTO chatdata (`user`,`message`) VALUES('$name','$message')";
 $iquery = mysqli_query($conn,$insert);

 mysqli_close($conn);
?>