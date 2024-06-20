<?php
include("conn.php");
if(isset($_GET['payment_id'])){
    $payment_id = $_GET['payment_id'];
    $sql= "DELETE FROM payment WHERE payment_id =$payment_id";
    $result = mysqli_query($con,$sql);
    mysqli_close ($con);
    echo "<script>alert('Record Deleted!');
    window.location.href='admin_view_pm.php';</script>";
}
else{
    echo "<script>alert('Please select the record to delete');
    window.location.href='admin_view_pm.php';</script>";
}

?>