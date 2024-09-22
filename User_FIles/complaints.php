
<?php

session_start();

include ( 'connect.php');
//include ('userFunction.php');

$sessionName=$_SESSION['username'];

echo $sessionName;

$query="SELECT * FROM flateowners where email='$sessionName'";
$result = mysqli_query($con,$query);
echo "hi";
                if(mysqli_num_rows($result) > 0)
                {
                  echo "hi";
                   while($row=mysqli_fetch_assoc($result)){

                      $Name=$row['name'];
                      $flateNo=$row['flateNo'];

                    }
                  }

                  echo $Name;
                  echo $flateNo;



?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complaints</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="userStyle.css">
    
   <style>
        #banner-main{
            margin-top:9vh;
            background:url('../images/h1.jpg') no-repeat 0 0;
            background-size:cover;
            height:91vh;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-light bg-info navbar-expand-lg  fixed-top ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="margin-left: 50px;">Vrindhavan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-ul">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="User-Index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="complaints.php">Complaint</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="rozarPay\index.php">Maintanance</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gallary</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <button class="btn btn-outline-danger" type="submit"><a href="logout.php">Log out</a></button>
      </form>
    </div>
  </div>
</nav>
<!-- </div>  -->
<!-- baner -->
<div id="banner-main" class="main-b">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12 col-sm-12 frm">
                <h2>Send complaint</h2>
            <form action="" method="post">
            
            <input type="text" class="frm-input" placeholder="complaint type" name="ctype">
            <input type="text-area" class="frm-input" placeholder="about complaint" name="cabout">
            <input type="date" class="frm-input" placeholder="Name" name="cdate">
 <br>
            <input type="submit" value="send" class="frm-btn" name="submit">

            
                  

            </form>
            </div>
            
        </div>
    </div>
</div>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
 

<?php


if(isset($_POST['submit']))
{
$Ctype=$_POST['ctype'];
$Cdescription=$_POST['cabout'];
$Cdate=$_POST['cdate'];

echo $Name;
echo $flateNo;
$sql="INSERT INTO complaints (name,flatNo,date,complainttype,aboutcomplaint) 
VALUES('$Name',$flateNo,'$Cdate','$Ctype','$Cdescription')";

$result=mysqli_query($con,$sql);

if($result)
{
    echo "inserted";
}
else{
    echo "not inserted";
}
header("location:complaints.php");
}


?>



</html>