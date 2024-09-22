<?php

include ('connect.php');


if(isset($_POST['submit']))
{
//$flatNo=$_POST['fno'];
$Fno=$_POST['Fnum'];
$wing=$_POST['wing'];
$type=$_POST['types'];
$maintenance=$_POST['Maintenance'];
// $gender=$_POST['gender'];
//$adhar_No=$_POST['adr'];
//$nofamilyMembers=$_POST['membr'];


$sql="INSERT INTO flatedetails(flatNo,wing,type,maintenance) VALUES('$Fno','$wing','$type','$maintenance')";

$result=mysqli_query($con,$sql);
if($result){
    echo "<script>
alert('Successfully Added');
document.location.href = 'Flat_details.php';
</script>
";
}

//header("location:Flat_details.php");
}

?>















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add_owner</title>
     <!-- css link -->
     <link rel="stylesheet" href="css\adminStyle.css">
     
     


    
     
</head>
<body>



<?php include 'sidebar.php' ?>
<div class="main--content">
        
<?php include 'header.php' ?>

        <!-- table -->
   
<div class="tabular--wrapper" style="margin-top:0px;">
        <div class="frmdiv" style="height:auto;">
            <h2>Add Flate Details</h2>
        <form action="" method="post">
            <input type="text" name="Fnum" placeholder="Flate No." class="frmfilds">
            <input type="text" name="wing" placeholder="Flate wing" class="frmfilds"><br>
            <label for="id's">Select Flat Type : </label>

            
           <select name="types" class="frmfilds selectID" style="color:black;">
                <option value="1RK">1RK</option>
                <option value="1BHK">1BHK</option>
                <option value="2BHK">2BHK</option>
                <option value="3BHK">3BHK</option>
                <option value="4BHK">4BHK</option>
            </select><br>
            <input type="text" name="Maintenance" placeholder="Maintenance per year" class="frmfilds">
            <input type="submit" value="Add" class="formbtn" name="submit">
            
        </form>
        </div>

        <div class="table-container" style="margin-top:30px;">
        <table>
            <thead>
                <tr>
                    <td>Flate No.</td>
                    <td>Flate wing</td>
                    <td>Flat type</td>
                    <td>Maintenance (per year) </td>
                </tr>

            </thead>
            </thead>
            <tbody>
                <?php

                
 

               $query="SELECT * FROM flatedetails";
               $result = mysqli_query($con,$query);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row=mysqli_fetch_assoc($result)){
                        ?>

                <tr>
                    <td><?=$row['flatNo'] ?></td>
                    <td><?=$row['wing'] ?></td>
                    <td><?=$row['type'] ?></td>
                    <td><?=$row['maintenance'] ?></td>
                    
                    

                </tr>  

<?php
                    }
                }
                
                ?>
            </tbody> 
        </table>
    </div>
       
    
</div> 
     
    
</div>  

   












<!-- js file -->
<!-- <script src="js_files\bootstrap.bundle.min.js"></script>    -->
</body>
</html>