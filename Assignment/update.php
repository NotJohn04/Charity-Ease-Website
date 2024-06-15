<?php
    include("conn.php");

    $user_id = $_POST['id'];
    $user_name = $_POST['name'];
    $user_password = $_POST['password'];
    $user_phone = $_POST['phone_number'];
    $user_email = $_POST['email_address'];
    $user_address = $_POST['home_address'];
    $user_gender = $_POST['gender'];
    $user_dob = $_POST['dob'];

    $sql = "UPDATE userdetail SET
    user_name='$user_name',
    user_phone='$user_phone',
    user_password='$user_password',
    user_email='$user_email',
    user_address='$user_address',
    user_gender='$user_gender',
    user_dob='$user_dob'
    WHERE user_id='$user_id'";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Record updated!');
        window.location.href='view.php';</script>";
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }

    mysqli_close($con);
?>
