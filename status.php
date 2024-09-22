<?php
include ('connect.php');

$id=$_GET['id'];
$status=$_GET['status'];

echo $status;
$sql="update complaints set status=$status where ComplaintNo=$id";
$result=mysqli_query($con,$sql);



header("location:complaints.php");

?>