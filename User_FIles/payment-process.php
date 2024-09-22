<?php
include ('
connect.php');
session_start();
date_default_timezone_set("Asia/Calcutta");
echo "<script>alert('I am in payment process');</script>";

$paymentid = $_POST['payment_id'];
$amount = intval($_POST['amount']);
$username = $_SESSION['username'];
$dt = date('Y-m-d h:i:s');

$sql = "insert into tbltransaction (payment_id,username,amount,added_on,payment_status) values('$paymentid','user',$amount,'$dt','success')";
$result = mysqli_query($con, $sql);

if ($result) {
    return true;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

?>