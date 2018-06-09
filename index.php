<?php
session_start();
require('connection.php');
if($_SERVER["REQUEST_METHOD"] == "POST"){
if(isset($_POST['submit'])){
   $name1=$_POST['name'];
   $name;
    $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
$passkey=$_POST['pass'];

echo  $_SESSION['name'] ;
$sql="INSERT INTO newchat (name,passward) VALUES('$name1','$passkey');";
mysqli_query($conn,$sql);

mysqli_close($conn);
session_destroy();
header('Location: chatting.php');
}}

?>
