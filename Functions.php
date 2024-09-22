<?php
include ( 'connect.php');
function getAll($tablename)
{
    global $con;
    $table=$tablename;
    $query="SELECT * FROM $table";
    $result = mysqli_query($con,$query);
    return $result;
}


?>