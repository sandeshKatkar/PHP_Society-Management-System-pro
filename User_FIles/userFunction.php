<?php
include ( 'connect.php');
session_start();
function getComplaintsdata($tablename)
{
    global $con;
    $sessionName=$_SESSION['username'];
    $table=$tablename;
    $query="SELECT * FROM $table where email=$sessionName";
    $result = mysqli_query($con,$query);
    return $result;
}


?>