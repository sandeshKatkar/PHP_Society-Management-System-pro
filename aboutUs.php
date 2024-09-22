<?php

include ( 'connect.php');


if(isset($_POST['Updatepre']))
{

$name=$_POST['pname'];
$mobile=$_POST['pmobile'];
$pst="President";

$sql="update aboutus set name='$name',mobile='$mobile' where post='$pst'";

$result=mysqli_query($con,$sql);

if($result)
{
    echo
    "
<script>
alert('updated successfully');
</script>
";
header("location:aboutUs.php");
}
}
if(isset($_POST['UpdateSec']))
{

$name=$_POST['sname'];
$mobile=$_POST['smobile'];
$pst="Secretory";

$sql="update aboutus set name='$name',mobile='$mobile' where post='$pst'";

$result=mysqli_query($con,$sql);
if($result)
{
    echo
    "
<script>
alert('updated successfully');
</script>
";
header("location:aboutUs.php");
}

}
if(isset($_POST['Updatetre']))
{

$name=$_POST['tname'];
$mobile=$_POST['tmobile'];
$pst="Treasurer";

$sql="update aboutus set name='$name',mobile='$mobile' where post='$pst'";

$result=mysqli_query($con,$sql);

if($result)
{
    echo
    "
<script>
alert('updated successfully');
</script>
";

}

}
header("location:aboutUs.php");

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\adminStyle.css">

    <style>
        .upbtn{
            font-size:15px;
            padding:5px;
            background: rgb(175, 134, 223);
            margin-left:1000px;
            border:1px solid white;
            color:white;
            
        }
    </style>
   
</head>
<body>
<?php include 'sidebar.php' ?>
<div class="main--content">
    <?php include 'header.php' ?>
    <div class="tabular--wrapper cumtdetail" style="margin-top:0px;">
    <h2>About Us Detail</h2><br>
       <div class="col1">
       <div class="frmdiv">
            <h4>President Details</h4>
            <form action="" method="post">
                <input type="text" name="pname" placeholder="Entre Name" class="frmfilds">
                <input type="text" name="pmobile" placeholder="Entre Mobile Number" class="frmfilds"><br>
                <input type="submit" value="Update"  name="Updatepre" class="upbtn">
            </form>
        </div>
        <div class="frmdiv">
            <h4>Secretory Details</h4>
            <form action="" method="post">
                <input type="text" name="sname" placeholder="Entre Name " class="frmfilds">
                <input type="text" name="smobile" placeholder="Entre Mobile Number" class="frmfilds"><br>
                <input type="submit" value="Update" name="UpdateSec" class="upbtn">
            </form>
        </div>
        <div class="frmdiv">
            <h4>Treasurer Details</h4>
            <form action="" method="post">
                <input type="text" name="tname" placeholder="Entre Name " class="frmfilds">
                <input type="text" name="tmobile" placeholder="Entre Mobile Number" class="frmfilds"><br>
                <input type="submit" value="Update"  name="Updatetre" class="upbtn">
            </form>
        </div>
       </div>
      
    </div>
</div>
    
</body>
</html>