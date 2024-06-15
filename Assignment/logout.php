<?php
session_start();

include("conn.php"); // 包含数据库连接文件

if(isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id']; // 假设用户ID存储在会话中

    // 更新 user_type 为 'none'
    $sql = "UPDATE userdetail SET user_type='none' WHERE user_id='$user_id' AND user_type='member'";

    if (mysqli_query($con, $sql)) {
        session_destroy();
        echo "<script>alert('Successfully Logout.'); window.location.href='home.php';</script>";
    } else {
        echo "Error updating user type: " . mysqli_error($con);
    }

    mysqli_close($con); // 关闭数据库连接
} else {
    echo "<script>alert('No user is logged in.'); window.location.href='home.php';</script>";
}
?>
