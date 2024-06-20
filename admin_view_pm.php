<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin View</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

        body {
            font-family: "Roboto", sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        #box {
            background-color: lightblue;
            width: 300px;
            height: auto;
            float: left;
            margin: 10px;
            padding: 20px;
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
            font-size: 12px;
            color: #000;
            border-radius: 5px;
            margin-right: 10px;
        }

        #editBtn {
            background-color: yellow;
            border: none;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            color: #000;
            border-radius: 5px;
        }

        #deleteBtn:hover {
            background-color: #ab3a3a;
            color: #fff;
        }

        #editBtn:hover {
            background-color: #ffd700;
        }

        .form-container {
            margin-bottom: 20px;
        }

        .form-container form {
            display: flex;
            align-items: center;
        }

        .form-container input[type="search"] {
            padding: 5px;
            font-size: 16px;
        }

        .form-container button {
            padding: 5px 10px;
            font-size: 16px;
            margin-left: 10px;
            cursor: pointer;
        }

        a {
            text-decoration: none;
            color: blue;
        }

        hr {
            margin: 20px 0;
        }
        #deleteBtn {
            background-color: #ff8585;
            border: none;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            color: #000;
            border-radius: 5px;
            margin-right: 10px;
        }

        #deleteBtn:hover {
            background-color: #ab3a3a;
            color: #fff;
        }
    </style>
</head>
<body>
<div class="form-container">
    <a class="link" href="admin_view.php">View User</a>
    <a class="link" href="admin_view_cm.php">View Comments</a>

</div>
<hr>
<div class="form-container">
    <form method="post">
        <label for="search_keyword">Search:</label>
        <input type="search" name="search_keyword" id="search_keyword" required>
        <button type="submit" name="searchBtn">Search</button>
    </form>
</div>
<hr>
<?php
$search_keyword = "";

if (isset($_POST['searchBtn'])) {
    $search_keyword = $_POST['search_keyword'];
}

include("conn.php");
$sql = "SELECT * 
        FROM payment 
        INNER JOIN userdetail ON payment.user_id = userdetail.user_id 
        WHERE userdetail.user_name LIKE '%$search_keyword%'";

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
    echo '<p><strong>Account Name:</strong> '. $row['account_name'].'</p>';
    echo '<p><strong>Card Detail:</strong> '. $row['card_detail'].'</p>';
    echo '<p><strong>Card Holder_name:</strong> '. $row['cardholder_name'].'</p>';
    echo '<p><strong>Expiry Date:</strong> '. $row['expiry_date'].'</p>';
    echo '<p><strong>CVV:</strong> '. $row['CVV'].'</p>';
    echo '<p><strong>Amount:</strong> '. $row['amount'].'</p>';
    echo '<a id="deleteBtn" href="delete_pm.php?payment_id='.$row['payment_id'].'" onclick="return confirm(\'Are you sure to delete the record?\')">Delete</a>';

    echo '</div>';
}

mysqli_close($con);
?>
</body>
</html>

