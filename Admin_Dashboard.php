<?php
    session_start();
    include('connect.php');
    if(!isset($_SESSION['username'])){
        header("location:signup.php");

        //include ('Functions.php');
               
    }
    // fetch no. of flat owners
    $query1="SELECT * FROM flateowners";
    $result1 = mysqli_query($con,$query1);
    $ownerrow=mysqli_num_rows($result1);
    
    // fetch no of complaints

    $query2="SELECT * FROM complaints where status=1";
    $result2 = mysqli_query($con,$query2);
    $completedrow=mysqli_num_rows($result2);
    
    $query3="SELECT * FROM complaints where status=0";
    $result3 = mysqli_query($con,$query3);
    $peddingrow=mysqli_num_rows($result3);
    


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <!-- css link -->
    <link rel="stylesheet" href="css\adminStyle.css">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <style>
    .cardbtn{
    font-size: 17px;
    text-decoration: none;
    background: rgb(226, 146, 226);
    color: white;
    margin-top:20px;
    padding:2px;
    border-radius: 5px;
}
    </style>
</head>
<body>

    
<?php include 'sidebar.php' ?>
<div class="main--content">
    <!-- header -->
    <div class="header--wrapper">
        <div class="header--title">
            <span>primary</span>
            <h2>Dashboard</h2>
        </div>
        <div class="user--info">
            <div class="user--details">
                <span><i class="fa-solid fa-user"></i></span>
                <span><?php echo $_SESSION['username']; ?></span>
            </div>
            <img src="images\flower.jpg" alt="">
            
        </div>
    </div>

    <!-- cards -->
    <div class="card--container">
        <!-- <h3 class="card--titel">Users</h3> -->
        <div class="card--wrapper">
            <div class="main--card light-blue">
                <div class="card--header">
                    <div class="numbers">
                        <span class="title">Total :</span>
                        <span class="total--value"><?php echo $ownerrow; ?></span>
                    </div>
                <i class="icon dark-blue">$</i>
                </div>
                <span class="card-detail">Number of users</span>
            </div>

            <div class="main--card light-purple">
                <div class="card--header">
                    <div class="numbers">
                        <span class="title">Total :</span>
                        <span class="total--value">20</span>
                    </div>
                <i class="icon dark-purple">$</i>
                </div>
                <span class="card-detail">Number Of Flats</span> 
            </div>

            <div class="main--card light-green">
                <div class="card--header">
                    <div class="numbers">
                        <span class="title">Total :</span>
                        <span class="total--value"><?php echo $completedrow; ?></span>
                    </div>
                <i class="icon dark-green">$</i>
                </div>
                <span class="card-detail">Completed Complaints</span>
            </div>

            <div class="main--card light-red">
                <div class="card--header">
                    <div class="numbers">
                        <span class="title">Total :</span>
                        <span class="total--value"><?php echo  $peddingrow; ?></span>
                    </div>
                <i class="icon dark-red">$</i>
                </div>
                <span class="card-detail">Pedding complaints</span>
                <!-- <span class="card-detail">Pedding complaints</span><span><a href="http://" class="cardbtn">show</a></span> -->
            </div>
        </div>
    </div>

    <!-- table -->
    <div class="tabular--wrapper">
        <h2>Flat owners</h2><br>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <td>id</td>
                    <td>Flate No.</td>
                    <td>Name</td>
                    <td>Mobile</td>
                    <td>Date</td>
                    <td>Email</td>
                    <td>Adhar</td>
                    <td>members</td>
                    <td>gender</td>
                    <td>password</td>
                    <td>update</td>
                    <td>delete</td>
                </tr>

            </thead>
            <tbody>
                <?php

                
 

               $query="SELECT * FROM flateowners";
               $result = mysqli_query($con,$query);
                if(mysqli_num_rows($result) > 0)
                {
                   
                    while($row=mysqli_fetch_assoc($result)){

            echo "
              <tr>
               <td>".$row['id']."</td>
               <td>".$row['flateNo']."</td>
               <td>".$row['name']."</td>
               <td>".$row['mobile']."</td>
               <td>".$row['date']."</td>
               
               <td>".$row['email']."</td>
               <td>".$row['adharNo']."</td>
               <td>".$row['members']."</td>
               <td>".$row['gender']."</td>
               <td>".$row['password']."</td>
               <td><a href='updateowner.php?updateid=".$row['id']."' style='background:green;'>update</a></td>
               <td><a href='deleteowner.php?deleteid=".$row['id']."' style='background:red;'>delete</a></td>
               </tr>  
                        ";

                    }
                }
                
                ?>
            </tbody>
            
                
    </div>
    </div>

</div>




</body>



</html>