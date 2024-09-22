<?php

include ( 'connect.php');


if(isset($_POST['submit']))
{
$flatNo=$_POST['fno'];
$name=$_POST['nm'];
$mobile=$_POST['mob'];
$date=$_POST['jdate'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$adhar_No=$_POST['adr'];
$nofamilyMembers=$_POST['membr'];
$pass=$_POST['pass'];


$sql="INSERT INTO flateowners (flateNo,name,mobile,date,email,gender,adharNo,members,password) 
VALUES('$flatNo','$name','$mobile','$date','$email','$gender','$adhar_No','$nofamilyMembers','$pass')";

$result=mysqli_query($con,$sql);

if($result)
{
    echo "
    <script>
        alert('Successfully Added');
        document.location.href = 'Add_flat_owner';
      </script>
      ";
}

//header("location:Add_flat_owner.php");
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
        <div class="frmdiv">
            <h2>Add Owner Details</h2>
        <form action="" method="post">
            <label for="id">Select Flat No. : </label>
            <select name="fno" class="frmfilds selectID">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select><br>
            <input type="text" name="nm" placeholder="Entre Name" class="frmfilds">
            <input type="text" name="mob" placeholder="Mobile" class="frmfilds">
            <input type="date" name="jdate" class="frmfilds">
            <input type="email" name="email" placeholder="Entre Email" class="frmfilds">
            <div class="frmfilds rd1" align="left">
                <label >Gender :</label>
                <input type="radio" name="gender"  id="Male" class="rdbtn" value="Male" required><label for="Male">Male</label>
                <input type="radio" name="gender"  id="Female" class="rdbtn" value="FeMale" required><label for="Female">Female </label>
                <input type="radio" name="gender"  id="others" class="rdbtn" value="other" required><label for="others">others</label>
            </div>
            <input type="text" name="adr" placeholder="Entre Adhar no. " class="frmfilds">
            <input type="text" name="membr" placeholder="Entre Number of members" class="frmfilds">
            <!-- <input type="text" name="pass" placeholder="set password" class="frmfilds"> -->
            <br>
           <!--
            <label for="oph" class="lblph">owner photo</label><input type="file" name="ownphoto" class="frmfilds filefild" id="oph"><br>
            <label for="adrph" class="lblph">Adhar photo</label><input type="file" name="adrphoto" class="frmfilds filefild" id="adrph">
-->
            <input type="submit" value="Add" class="formbtn" name="submit">
            
        </form>
        </div>
       
    
</div> 
     
    
</div>  

  




<?php 






/*
$fname=$_FILES["adrphoto"]["name"];
$tempname=$_FILES["adrphoto"]["tmp_name"];
$folder="gallary_images/".$fname;
move_uploaded_file($tempname,$folder);


$fname1=$_FILES["ownphoto"]["name"];
$tempname1=$_FILES["ownphoto"]["tmp_name"];
$folder1="gallary_images/".$fname1;
move_uploaded_file($tempname1,$folder1);
header("location:Add_flat_owner.php");
}
*/

?>



</body>
</html>