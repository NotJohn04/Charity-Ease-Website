<?php
include("conn.php");
if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
    $sql= "DELETE FROM userdetail WHERE user_id =$user_id";
    $result = mysqli_query($con,$sql);
    mysqli_close ($con);
    echo "<script>alert('Record Deleted!');
    window.location.href='view.php';</script>";
}
else{
    echo "<script>alert('Please select the record to delete');
    window.location.href='view.php';</script>";
}

?>