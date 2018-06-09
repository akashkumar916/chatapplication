<?php

$servername = "localhost";
$username = "root";
$password = "Akashkumar";

$dbname="chat";
$conn = mysqli_connect($servername, $username, $password, $dbname);
 



if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['submit'])){
       
    $mess=$_POST['message'];
  
 
    $sqlw="INSERT INTO newchat (message) VALUES('$mess') ;";

    $result = mysqli_query($conn, $sqlw);
   $sql="SELECT * FROM newchat;";
  

   $result = mysqli_query($conn, $sql);
$ma=array();
   while ($rows = mysqli_fetch_assoc($result))  
   $ma[]=array('message'=>$rows['message']);


   mysqli_close($conn);
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>chatting</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<style>
   body{color:white;
            margin:0;
            padding:0;
            background:url('image/1.jpg') no-repeat;
            background-size: cover;
            width:100%;
            height:100%;
            position:absolute;
            background-color: blueviolet;
align:center;
float:center;
            color:white;

            }
            .frame{
position:absolute;
left:20%;
      border:2px solid red;
height:50%;
width:60%;
            }
           

h1,p{color:white}

    </style>
</head>
<body>

<div class="col-sm-6 ">
<h2 >Welcome</h2>
<span></span>


</div>
    <div class="container ">
<h2 class="d1 text-danger">Connect to anyone</h2>

<div class="frame">





<div >
<form class="from-inline" action=" " method="post" >
<div >
<input class=" form-control" type="text" name="message" placeholder="Type your message" required>
<button class=" form-control btn btn-success btn-block" name="submit" type="submit">Send</button>
<div>
    </form>
    <div class="footer text-center fl-r" style="color:yellow;float:right;text-align:right">
Powered by Latestudy.in

    </div>
<div style="color:yellow">
<span style="font-size:30px;font-weight:bold;margin-top:30px;"><?php 
if(isset($ma)){
  foreach($ma as $ma)
  echo $ma['message'];
}
?>
</span></div>
        </div>
    </div>




        </div>


</body>
</html>
