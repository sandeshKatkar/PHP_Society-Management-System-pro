<?php
// include ('connect.php');
include ('userFunction.php');
if(!isset($_SESSION['username'])){
    header("location:userlogin.php");

    //include ('Functions.php');

    echo " <script>alert('hello');</script>";
           
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user Index</title>
   
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="userStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        .banner-main{
            
            background:url('../images/h1.jpg') no-repeat 0 0;
            background-size:cover;
            height:91vh;
        }
    </style>
</head>
<body>
    <!-- <div class="header">
        <div class="cntainer">
            <div class="row">
                <div class="col-md-4"><h1 class="logo">Compan name</h1></div>
                <div class="col-md-8"></div>
            </div>
        </div>
    </div> -->

    <!-- navbar -->

<!-- <div class="container-fluid p-0 g">  -->
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
          <a class="nav-link" href="paymentIndex.php">Maintanance</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#gallary">Gallary</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <!-- <p><?php //echo $_SESSION['username']; ?></p> -->
        <button class="btn btn-outline-danger" type="submit"><a href="logout.php" style="color:white;text-decoration: none;">Log out</a></button>
      </form>
    </div>
  </div>
</nav>


<!-- </div>  -->
<!-- baner -->
<div class="main-b">
    <div class="container-fluid banner-main">
        <div class="row">
            <div class="col-lg-8 col-sm-12">

            </div>

            <?php
            // Fetching current id
        //     $query1="SELECT max(NoticeID) FROM noticedetails";
        //      $result1 = mysqli_query($con,$query1);
        // if(mysqli_num_rows($result1) > 0)
        // {
        //     if($row1=mysqli_fetch_assoc($result1)){
        //         $maxID=$row1['NoticeID'];
        //     }
        // }
                

            
        // $query="SELECT * FROM noticedetails";
        $query="SELECT * FROM noticedetails where NoticeID=(select max(NoticeID) from noticedetails)";
        $result = mysqli_query($con,$query);
        
        if(mysqli_num_rows($result) > 0)
        {
            if($row=mysqli_fetch_assoc($result))
            {
            ?>
            <div class="col-lg-4 col-sm-12 notice-box br" style=" height: 40vh; background: linear-gradient(to right bottom,rgba(140, 67, 199, 0.767),rgba(153, 43, 204, 0.699));">
                <div class="notice-title"><h1 class="title">Notices</h1></div>
                <div class="notice-sub"><h1 class="sub-details" ><?=$row['NoticeTitle'] ?></h1><p><?=$row['NoticeDescription'] ?></p>
            
                <div><h4>Date : <?=$row['NoticeDate'] ?></h4> </div>
            
                </div>
                

            </div>
            <?php
            }
        }

            ?>
        </div>
    </div>
</div>
<!-- banner end -->
   <!-- sections -->
   <div class="container section">
    <div class="row">
        <div class="col-md-12">
            <h2 class="section-head">Highlights</h2>
        </div>
        <div class="col-md-4">
            <div class="highlight-box">
            <i class="fa-solid fa-building"></i>
                <h3>Infrastructure</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet reiciendis quisquam aliquid distinctio tempora animi.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="highlight-box">
            <i class="fa-solid fa-shield-halved"></i>
                <h3>Security</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet reiciendis quisquam aliquid distinctio tempora animi.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="highlight-box">
            <i class="fa-solid fa-screwdriver-wrench"></i>
                <h3>Maintenance</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet reiciendis quisquam aliquid distinctio tempora animi.</p>
            </div>
        </div>
    </div>
   </div>
   <p id="about"></p>
<div class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-md-12" >
            <h2 class="section-head" style="color: white;">Abot Us</h2>
            </div>
            <div class="col-md-12">
            <h3 class="abot-head">Vrindhavan</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quae tenetur sapiente eaque sint nobis, corrupti, atque officia, vitae saepe temporibus tempora. Eligendi illum ducimus fuga et velit maiores, illo veniam earum beatae repellendus impedit eum expedita minus? Praesentium, nesciunt assumenda. Quasi possimus expedita, eligendi nostrum velit culpa ipsa debitis omnis sit corrupti esse, corporis ab rerum nihil quod, dolor optio quos. Placeat error in quia rem tempora ea aliquam numquam? Maxime, est culpa. Quidem fugit ratione amet suscipit dolorum sint voluptate aliquam debitis perferendis et, delectus consequatur iure accusantium ex animi hic reiciendis laboriosam tempore maiores eligendi. Beatae, ipsam.
            </p>
            </div>
            <div class="col-md-6 contact-us">
                <div class=""><h3>Contact Us</h3></div>
                <div class="contact-details"><p><i>>112/34 , hydrabad road , near market yard , solapur-413005</p></i></div>
                <div class="contact-details"><p><i>></i>(0217) 1232454 , 5674643</p></div>
                <div class="contact-details"><p><i>></i>Vrindhavansociety@gmail.com</p></div>
                <div class="contact-details"><i>></i><a href="">google map</a></div>

            </div>
           
            <div class="col-md-6 committee">
                <div class="committee-box"><h3>Committee</h3></div>
               <div class="row">
                <div class="commitee-details col-sm-4">
                        <h4>President</h4>
                     <?php

                        $pst1="President";
                        $query="SELECT * FROM aboutus where post='$pst1'";
                        $result = mysqli_query($con,$query);
                        if(mysqli_num_rows($result) > 0)
                        {
                            while($row=mysqli_fetch_assoc($result)){


                        ?>
                        <div class="com-nm">
                            <p> <?=$row['name'] ?><br>
                            <i>></i> <?=$row['mobile'] ?></p>
                        </div>
                        <?php
                      }
                            }?>
                    </div>
                    <div class="commitee-details col-sm-4">
                        <h4>President</h4>
                     <?php

                        $pst2="Secretory";
                        $query="SELECT * FROM aboutus where post='$pst2'";
                        $result = mysqli_query($con,$query);
                        if(mysqli_num_rows($result) > 0)
                        {
                            while($row=mysqli_fetch_assoc($result)){


                        ?>
                        <div class="com-nm">
                            <p> <?=$row['name'] ?><br>
                            <i>></i> <?=$row['mobile'] ?></p>
                        </div>
                        <?php
                      }
                            }?>
                    </div>
                    <div class="commitee-details col-sm-4">
                        <h4>President</h4>
                     <?php

                        $pst3="Treasurer";
                        $query="SELECT * FROM aboutus where post='$pst3'";
                        $result = mysqli_query($con,$query);
                        if(mysqli_num_rows($result) > 0)
                        {
                            while($row=mysqli_fetch_assoc($result)){


                        ?>
                        <div class="com-nm">
                            <p> <?=$row['name'] ?><br>
                            <i>></i> <?=$row['mobile'] ?></p>
                        </div>
                        <?php
                      }
                            }?>
                    </div>
               </div>
                
            </div>

          
    </div>
</div>
   </div>

     <p id="gallary"></p>
   <div class="amenities section" id="gallary">
   <div class="container text-center">
   <h2 class="section-head" >Amenities</h2>
  <div class="row ">
    
 




    <?php
      $i = 1;
      $result = mysqli_query($con, "SELECT * FROM gallary")
      ?>

      <?php while ($row=mysqli_fetch_assoc($result)) { ?>

        
    <img src="../gallary_images/<?php echo $row['img']; ?>" title="<?php echo $row['img']; ?>" height="300" width="300">
    </div><div class="col-lg-4 col-mg-4 col-sm-12 p-3">
      
      <?php } ?>
    

  </div>
  
</div> 

</div>

   </div>

   <!-- footer -->
   <!-- .container-fluid -->
<!-- js file -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>