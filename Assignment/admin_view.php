<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('http://fonts.googleapis.com/css2?family=Roboto&display=swap');

        body {
            font-family: "Roboto", sans-serif;
        }

        #box {
            background-color: lightblue;
            width: 300px;
            height: 400px;
            float: left;
            margin: 5px;
            padding: 10px;
            border: 1px solid #000000;
            border-radius: 10px;
        }

        .link {
            border: none;
            padding: 8px 26px;
            text-align: center;
            text-decoration: none;
            color: #000;
            display: inline-block;
            margin: 2px 1px;
            cursor: pointer;
            border-radius: 5px;
        }

        #deleteBtn {
            background-color: #ff8585;
            border: none;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 10px;
            color: #000;
            border-radius: 5px;
        }
        #editBtn {
            background-color: yellow;
            border: none;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 10px;
            color: #000;
            border-radius: 5px;
        }
        #deleteBtn:hover {
            background-color: #ab3a3a;
            color: #fff;
        }
    </style>
</head>
<body>
<div>
    <a href="register.php">Add New Contact</a>
</div>
<hr>
<form method="post">
    Search: <input type="search" name="search_keyword" required>
    <button type="submit" name="searchBtn">Search</button>
</form>
<hr>
<?php
$search_keyword = "";

if(isset($_POST['searchBtn'])){
    $search_keyword = $_POST['search_keyword'];
}

include("conn.php");
$sql = "SELECT * FROM userdetail 
        WHERE user_name 
        LIKE '%$search_keyword%'";

$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($result)) {
    echo '<div id="box">';
    if ($row['user_gender'] == "Male") {
        $gender_image = "images/male.png";
    } elseif ($row['user_gender'] == "Female") {
        $gender_image = "images/female.png";
    }

    echo '<img src="'.$gender_image.'" width="50">';

    echo '<h3>'. $row['user_name'].'</h3>';
    echo '<p>'. $row['account_name'].'</p>';
    echo '<p>'. $row['user_phone'].'</p>';
    echo '<p>'. $row['user_email'].'</p>';
    echo '<p>'. $row['user_password'].'</p>';
    echo '<p>'. $row['user_address'].'</p>';
    echo '<p>'. $row['user_gender'].'</p>';
    echo '<p>'. $row['user_dob'].'</p>';

    echo '<a id="deleteBtn" href="delete.php?user_id='.$row['user_id'].'" onclick="return confirm(\'Are you sure to delete the record?\')">Delete</a>';
    echo '<a id="editBtn" class="link" href="edit.php?id='.$row['user_id'].'">Edit</a>';
    echo '</div>';
}
?>
</body>
</html>
