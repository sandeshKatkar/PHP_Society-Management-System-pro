<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css\adminStyle.css">

     <!-- font awsome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <!-- sidebar -->
<div class="sidebar">
<div class="logo"></div>
<ul class="mainUl">
<li class="active">
<a href="Admin_Dashboard.php"><i class="fa-solid fa-gauge"></i><span>Dashboard</span></a>
</li>
<li>
<a href="Add_flat_owner.php"> <i><i class="fa-solid fa-user"></i></i><span>Add owner</span></a>
</li>
<li>
<a href="Owner_details.php"><i class="fa-solid fa-circle-info"></i><span>Owner Details</span></a>
</li>
<li>
<a href="complaints.php"> <i class="fa-solid fa-envelope-open-text"></i><span>Complaints</span></a>
</li>
<li>
<a href="Maintenance.php"><i class="fa-solid fa-indian-rupee-sign"></i><span>Maintenance</span></a>
</li>
<li>
<a href="aboutUs.php"> <i class="fa-solid fa-address-card"></i><span>About us</span></a>
</li>
<li>
<a href="gallary.php"> <i class="fa-brands fa-envira"></i><span>Gallary</span></a>
</li>
<li>
<a href="Flat_details.php"> <i class="fa-solid fa-circle-info"></i><span>Flat details</span></a>
</li>
<li>
<a href="Notice.php"> <i class="fa-solid fa-triangle-exclamation"></i><span>Add notice</span></a>
</li>
<li class="logout">

<a href="Adminlogout.php"><i class="fa-solid fa-right-from-bracket"></i><span>Log out</span></a>
<?php //session_start(); session_destroy(); header("location:signup.php");?>
</li>
</ul>
</div>

</body>
</html>