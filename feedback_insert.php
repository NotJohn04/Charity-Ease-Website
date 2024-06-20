<?php
session_start(); 
if(isset($_POST['FBsubmitBtn']))
{
    include('conn.php');

    if(isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id']; // Get user_id from session
        echo "User ID: " . $user_id; 
    } else {
        die('Error: User not logged in'); // Exit script if user is not logged in
    }

    $feedback = mysqli_real_escape_string($con, $_POST['feedback']);

    $sql = "INSERT INTO feedback (user_id, feedback) 
            VALUES ('$user_id', '$feedback')";

    if (!mysqli_query($con, $sql)){
        die('Error: ' . mysqli_error($con));
    }
    else{
        echo "<script>alert('Thanks For Your Feedback!'); window.location.href='comments.php';</script>";
    }

    mysqli_close($con);
}
else{
    echo "<script>alert('error'); window.location.href='feedback.php';</script>";
}
?>