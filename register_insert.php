<?php

if(isset($_POST['submitBtn']))
{
    include('conn.php');

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
    $emailaddress = mysqli_real_escape_string($con, $_POST['emailaddress']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $homeaddress = mysqli_real_escape_string($con, $_POST['homeaddress']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $dateofbirth = mysqli_real_escape_string($con, $_POST['dateofbirth']);
    $user_type = 'member';

    $sql = "INSERT INTO userdetail (account_name, user_name, user_phone, user_email, user_password, user_address, user_gender, user_dob, user_type) 
            VALUES ('$name', '$username', '$phonenumber', '$emailaddress', '$password', '$homeaddress', '$gender', '$dateofbirth','$user_type')";

    if (!mysqli_query($con, $sql)){
        die('Error: ' . mysqli_error($con));
    }
    else{
        echo "<script>alert('Successful!'); window.location.href='login.php';</script>";
    }

    mysqli_close($con);
}
else{
    echo "<script>alert('Please fill in the form'); window.location.href='register.php';</script>";
}
?>