<?php

include ( 'connect.php');

$id=$_GET['updateid'];
echo $id;
$s="select * from `flateowners` where id=$id";
$result=mysqli_query($con,$s);
$row=mysqli_fetch_assoc($result);

$flatNo=$row['flateNo'];
$name=$row['name'];
$mobile=$row['mobile'];
$date=$row['date'];
$email=$row['email'];
$gender=$row['gender'];
$adhar_No=$row['adharNo'];
$nofamilyMembers=$row['members'];
$pass=$row['password'];




if(isset($_POST['submit']))
{
$flatNo=$_POST['fno'];
$name=$_POST['nm'];
$mobile=$_POST['mob'];
$date=$_POST['jdate'];
$email=$_POST['email'];

$adhar_No=$_POST['adr'];
$nofamilyMembers=$_POST['membr'];



$sql="UPDATE flateowners set flateNo='$flatNo',name='$name',mobile='$mobile',date='$date',email='$email',adharNo='$adhar_No',members='$nofamilyMembers' where id=$id" ;


$result=mysqli_query($con,$sql);

if($result)
{
    echo "inserted";
}
else{
    echo "not inserted";
}
header("location:Admin_Dashboard.php");
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




<div class="main--content">
        


        <!-- table -->
   
<div class="tabular--wrapper" style="margin-top:0px;">
        <div class="frmdiv">
            <h2>Update Owner Details</h2>
        <form action="" method="post">
            
            <input type="text" name="flateNo" placeholder="Select Flat No." class="frmfilds" value=<?php echo $flatNo; ?>>
            <input type="text" name="nm" placeholder="Entre Name" class="frmfilds" value=<?php echo $name; ?>>
            <input type="text" name="mob" placeholder="Mobile" class="frmfilds" value=<?php echo $mobile; ?>>
            <input type="date" name="jdate" class="frmfilds" value=<?php echo $date; ?>>
            <input type="email" name="email" placeholder="Entre Email" class="frmfilds" value=<?php echo $email; ?>>
           
            <input type="text" name="adr" placeholder="Entre Adhar no. " class="frmfilds" value=<?php echo $adhar_No; ?>>
            <input type="text" name="membr" placeholder="Entre Number of members" class="frmfilds" value=<?php echo $nofamilyMembers; ?>>
            
            <br>
        
            <input type="submit" value="update" class="formbtn" name="submit">
            
        </form>
        </div>
       
    
</div> 
     
    
</div>  

  




<?php 



?>



</body>
</html>