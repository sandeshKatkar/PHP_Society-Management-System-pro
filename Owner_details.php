<?php
//include ( 'connect.php');
include ('Functions.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css\adminStyle.css">
    
</head>
<body>
    <?php include 'sidebar.php' ?>
    <div class="main--content">
        
        <?php include 'header.php' ?>

        <!-- table -->
        <div class="tabular--wrapper" style="margin-top:1rem;">
        <h2>Owner Detail</h2><br>
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
                        ?>

                <tr>
                    <td><?=$row['id'] ?></td>
                    <td><?=$row['flateNo'] ?></td>
                    <td><?=$row['name'] ?></td>
                    <td><?=$row['mobile'] ?></td>
                    <td><?=$row['date'] ?></td>
                    <td><?=$row['email'] ?></td>
                    <td><?=$row['adharNo'] ?></td>
                    <td><?=$row['members'] ?></td>
                    <td><?=$row['gender'] ?></td>
                    <td><?=$row['password'] ?></td>
                    <td><a href="updateowner.php" style="background:green;">update</a></td>
                    <td><a href="deleteowner.php" style="background:red;">delete</a></td>

                </tr>  

<?php
                    }
                }
                
                ?>
            </tbody>
            </table>   
    </div>
         
        
    </div>  
   

   
</body>
</html>