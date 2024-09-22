<?php
 include 'sidebar.php' ;
 include ('connect.php');
 
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\adminStyle.css">
</head>
<body>
   

    <!-- <div class="sidebar">
    <div class="logo"></div>
<ul class="mainUl">
<li class="active">
<a href="Admin_Dashboard.php"> <i>></i><span>Dashboard</span></a>
</li>
<li>
<a href="Add_flat_owner.php"> <i>></i><span>Add owner</span></a>
</li>
<li>
<a href="Owner_details.php"> <i>></i><span>Owner Details</span></a>
</li>
<li>
<a href="complaints.php"> <i>></i><span>Complaints</span></a>
</li>
<li>
<a href="Maintenance.php"> <i>></i><span>Maintenance</span></a>
</li>
<li>
<a href="#"> <i>></i><span>About us</span></a>
</li>
<li>
<a href="#"> <i>></i><span>Gallary</span></a>
</li>
<li class="logout">
<a href="#"> <i>></i><span>Log out</span></a>
</li>
<li>
<a href="Notice.php"> <i>></i><span>Add notice</span></a>
</li>
</ul>
</div> -->





<div class="main--content">
        
        <?php include 'header.php' ?>

        <!-- table -->
        <div class="tabular--wrapper" style="margin-top:1rem;">
        <?php 
         $query="SELECT * FROM complaints";
         $result = mysqli_query($con,$query);
         ?>
         <h2>complaints Detail</h2><br>
        <h4>Total complaint :<?php echo mysqli_num_rows($result); ?></h4><br>
        <div class="table-container">
        <table>
        <thead>
                <tr>
                    <td>com_id</td>
                    <td>name</td>
                    <td>Flat No.</td>
                    <td>Date</td>
                    <td>complent type</td>
                    <td class="tw">About complaint</td>
                    <td>status</td>
                </tr>

            </thead>
            <tbody>
                <?php

                
 

               $query="SELECT * FROM complaints";
               $result = mysqli_query($con,$query);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row=mysqli_fetch_assoc($result)){
                        ?>

                <tr>
                    <td><?=$row['ComplaintNo'] ?></td>
                    <td><?=$row['name'] ?></td>
                    <td><?=$row['flatNo'] ?></td>
                    <td><?=$row['date'] ?></td>
                    <td><?=$row['complainttype'] ?></td>
                    <td><?=$row['aboutcomplaint'] ?></td>
                    <td>
                        <?php
                        if($row['status']==1)
                        {
                            echo "<p><a href='status.php?id=".$row['ComplaintNo']."&status=0' style='background:green;'>Completed</a></p>";
                        } 
                        else
                        {
                            echo "<p><a href='status.php?id=".$row['ComplaintNo']."&status=1' style='background:red;'>pedding</a></p>";
                        }
                        ?>
                    </td>
                  

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
<thead>
                <tr>
                    
                    
                </tr>

            </thead>