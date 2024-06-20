<?php
session_start();
/*if(isset($_POST['LoginBtn'])){
    echo "<script>alert('Please Login!)";
}

*/

if(!isset($_SESSION["user_id"])){
    echo "<script>alert('Please Login!'); window.location.href='login.php';</script>";
}
//else{
 //   echo "<script>alert('Welcome!'); window.location.href='userhome.php';</script>";
//}

?>