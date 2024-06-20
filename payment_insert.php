<?php
session_start(); 
if(isset($_POST['pmsubmitBtn'])) 
{
    include('conn.php');

    if(isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id']; // Get user_id from session
        echo "User ID: " . $user_id; 
    } else {
        die('Error: User not logged in'); // Exit script if user is not logged in
    }

    $cardDetail = mysqli_real_escape_string($con, $_POST['cardDetail']);
    $cardholderName = mysqli_real_escape_string($con, $_POST['cardholderName']);
    $expiryDate = mysqli_real_escape_string($con, $_POST['expiryDate']);
    $cvv = mysqli_real_escape_string($con, $_POST['cvv']);
    $amount = mysqli_real_escape_string($con, $_POST['amount']);


    // Insert the payment data into the database
    $sql = "INSERT INTO payment (user_id, card_detail, cardholder_name, expiry_date, CVV, amount) 
            VALUES ('$user_id', '$cardDetail', '$cardholderName', '$expiryDate', '$cvv', '$amount')";

    if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
    } else {
        echo "<script>alert('Payment Successful!'); window.location.href='userhome.php';</script>";
    }

    mysqli_close($con);
} 
else {
    echo "<script>alert('Form submission failed'); window.location.href='donation.php';</script>";
}
?>
