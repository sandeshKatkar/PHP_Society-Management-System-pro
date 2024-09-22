<?php
include ( 'connect.php');


if(isset($_POST['submit']))
{

$Nname=$_POST['noticeT'];
$Ndescription=$_POST['noticeD'];
$Ndate=$_POST['Ndate'];

$sql="INSERT INTO noticedetails (NoticeTitle,NoticeDescription,NoticeDate) 
VALUES('$Nname','$Ndescription','$Ndate')";

$result=mysqli_query($con,$sql);

if($result)
{
    echo "
    <script>
        alert('Successfully Added');
        document.location.href = 'Notice.php';
      </script>
      ";
}

//sheader("location:Notice.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add_Notice</title>
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
            <h2>Add Notice</h2>
        <form action="" method="post">
            
            <input type="text" name="noticeT" placeholder="Entre notice title" class="frmfilds">
            <input type="text" name="noticeD" placeholder="Add notice description" class="frmfilds">
            <input type="date" name="Ndate" class="frmfilds">
            
            <input type="submit" value="Add" class="formbtn" name="submit">
            
        </form>
        </div>
       

        <div class="table-container">
        <table>
            <thead>
                <tr>
                    <td>id</td>
                    <td>Notice title</td>
                    <td>Notice description</td>
                    <td>Notice Date</td>
                    
                </tr>

            </thead>
            <tbody>
                <?php

                
 

               $query="SELECT * FROM noticedetails";
               $result = mysqli_query($con,$query);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row=mysqli_fetch_assoc($result)){
                        ?>

                <tr>,,
                    <td><?=$row['NoticeID'] ?></td>
                    <td><?=$row['NoticeTitle'] ?></td>
                    <td><?=$row['NoticeDescription'] ?></td>
                    <td><?=$row['NoticeDate'] ?></td>
                    

                </tr>  

<?php
                    }
                }
                
                ?>
            </tbody>
            
                
    </div>
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