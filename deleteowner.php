<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    echo $id;

    $sql="delete from flateowners where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header("location:Admin_Dashboard.php");
    }
    else{
        die(mysqli_error($con));
    }

}
?>