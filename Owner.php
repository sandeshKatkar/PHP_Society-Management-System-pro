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
        
        <div class="container-fluid">
            <div class="row frm" style="width:100%">
                <h2>Add Flate Owners</h2>
                <div class="col-lg-6">
                    
                    <input type="text" class="frm-input" placeholder="Flat No.">
                    <input type="text" class="frm-input" placeholder="Mobile No.">
                    <div class="frm-input" style="margin-left:56px;">
                        <div  style="margin-right: 200px;">
                            <span class="rd"><input type="radio"><label>Male</label></span>
                            <span class="rd" style="margin-left: 30px;"><input type="radio"><label>Male</label></span>
                            <span class="rd" style="margin-left: 30px;"><input type="radio"><label>Male</label></span>
                        </div>
                    </div>
                    <input type="text" class="frm-input" placeholder="complaint type">
                    <input type="file" class="frm-input" placeholder="about complaint"><br>
                    
                </div>
                <!-- justify-content-center -->
                <div class="col-lg-6">
                    <input type="text" class="frm-input" placeholder="Name">
                    <input type="text" class="frm-input" placeholder="Email">
                    <input type="date" class="frm-input" placeholder="Name">
                    <input type="text" class="frm-input" placeholder="complaint type">
                    <input type="file" class="frm-input" placeholder="about complaint"><br>
                    
                </div>
                <input type="button" value="send" class="frm-btn">
            </div>
        </div>
    
</div> 
     
    
</div>  

<!-- js file -->
<script src="js_files\bootstrap.bundle.min.js"></script>   
</body>
</html>