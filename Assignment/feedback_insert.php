<?php

if(isset($_POST['FBsubmitBtn']))
{
    include('conn.php');

    $feedback = mysqli_real_escape_string($con, $_POST['feedback']);

    $sql = "INSERT INTO feedback (feedback) 
            VALUES ('$feedback')";

    if (!mysqli_query($con, $sql)){
        die('Error: ' . mysqli_error($con));
    }
    else{
        echo "<script>alert('Thanks For Your Feedback!'); window.location.href='event.php';</script>";
    }

    mysqli_close($con);
}
else{
    echo "<script>alert('error'); window.location.href='feedback.php';</script>";
}
?>