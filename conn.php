<?php

$con = mysqli_connect("localhost","root","","assignment");

if(mysqli_connect_errno()){
    echo"Can't connect to the DB:".
    mysqli_connect_error();
}

?>