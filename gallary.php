<?php
include('connect.php');
if (isset($_POST["submit"])) {
    if ($_FILES["image"]["error"] == 4) {
        echo
        "<script> alert('Image Does Not Exist'); </script>";
    } else {
        $fileName = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));
        if (!in_array($imageExtension, $validImageExtension)) {
            echo
            "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
        } else if ($fileSize > 10000000000) {
            echo
            "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
        } else {
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;

            move_uploaded_file($tmpName, 'gallary_images/' . $newImageName);
            $query = "INSERT INTO gallary VALUES('', '$name', '$newImageName')";
            mysqli_query($con, $query);
            echo
            "
      <script>
        alert('Successfully Added');
        document.location.href = 'data.php';
      </script>
      ";
        }
    }
}
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
    .btn{
        background:rgba(113, 99, 186, 255);
        padding:5px;
        font-size:17px;
        border-radius:5px;
    }
</style>

</head>

<body>
    <?php include 'sidebar.php' ?>
    <div class="main--content">
        <?php include 'header.php' ?>
        <div class="tabular--wrapper cumtdetail" style="margin-top:0px;">
            <div class="gfrmdiv">
                <h4>Add Images To Gallary</h4>
                <label for="image">Select Image</label>
                <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
                    <label for="name">Name : </label>
                    <input type="text" name="name" id="name" required value="" class="frmfilds"> <br>
                    <label for="image">Image : </label>
                    <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value="" class="frmfilds"> <br> <br>
                    <button type="submit" name="submit" class="btn">Submit</button>
                </form>
            </div>

           
            <div class="table-container">
        <table>
            <thead>
                <tr>
                    <td>Sr.no.</td>
                    <td>name</td>
                    
                </tr>

            </thead>
            <tbody>
                <?php

                
 

               $query="SELECT * FROM gallary";
               $result = mysqli_query($con,$query);
                if(mysqli_num_rows($result) > 0)
                {
                   
                    while($row=mysqli_fetch_assoc($result)){

            echo "
              <tr>
               <td>".$row['sr.no.']."</td>
               <td>".$row['name']."</td>
              
               </tr>  
                        ";

                    }
                }
                
                ?>
            </tbody>
            
                
    </div>
    </div>

            </div>

        </div>


  

</body>

</html>