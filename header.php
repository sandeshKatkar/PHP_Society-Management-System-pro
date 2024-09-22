<?php

session_start();
if(!isset($_SESSION['username'])){
    header("location:signup.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css\adminStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>
<!-- <header -->
<div class="main--content">
    <div class="header--wrapper">
        <div class="header--title">
            <span>primary</span>
            <h2>Dashboard</h2>
        </div>
        <div class="user--info">
            <div class="user--details">
                <span><i class="fa-solid fa-user"></i></span>
                <span>Hi <?php echo $_SESSION['username']; ?></span>
            </div>
            <img src="images\flower.jpg" alt="">
            
        </div>
    </div>
    
</div>
</body>
</html>