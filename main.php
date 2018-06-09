<?php

require('index.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <style>


        body{
            margin:0;
            padding:0;
            background:url('image/1.jpg') no-repeat;
            background-size: cover;
            width:100%;
            height:100%;
            position:absolute;
            background-color: blueviolet;
            }
            h1{
                color:white;
            }
            .row{
                display: inline;
            }
           
    </style>
</head>
<body>
    
<div class="container">

<div class="row" >



    <div class="col-sm-4" style="margin-left: -100px;margin-top:10%;">
  <form  method="post" action="index.php">
<div class="from-group">
<h1>Create and Login</h1>
<div>
    <input class="form-control mt-3" type="text"  name="name" required placeholder="  name"/>
</div>

<div>
    <input class="form-control mt-3" type="password" name="pass" required placeholder="password"/>
</div>

<div>
    <button class="btn btn-success form-control mt-3" name="submit" type="submit">login</button>
</div>

</div>


      
      
          </div>
</div>





</div>

</body>
</html>