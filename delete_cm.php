<?php
include("conn.php");
if(isset($_GET['feedback_id'])){
    $feedback_id = $_GET['feedback_id'];
    $sql= "DELETE FROM feedback WHERE feedback_id =$feedback_id";
    $result = mysqli_query($con,$sql);
    mysqli_close ($con);
    echo "<script>alert('Record Deleted!');
    window.location.href='admin_view_cm.php';</script>";
}
else{
    echo "<script>alert('Please select the record to delete');
    window.location.href='admin_view_cm.php';</script>";
}

?>