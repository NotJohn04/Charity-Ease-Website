<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
        body {
            margin: 0;
            padding: 0;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: "Roboto", sans-serif;
            margin: 0;
            padding: 20px;
        }

        #container {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        #box {
            background-color: lightblue;
            width: 100%;
            max-width: 600px; 
            margin: 0 auto;
            padding: 10px;
            border: 1px solid #000;
            border-radius: 10px;
            box-sizing: border-box;
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

        form {
            margin-bottom: 20px;
        }

        hr {
            margin: 20px 0;
        }

        .more {
            color: blue;
            cursor: pointer;
        }

        .hidden-text {
            display: none;
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
<div>
    <a class="link" href="admin_view.php">View User</a>
    <a class="link" href="admin_view_pm.php">View Payment</a>
</div>
<hr>
<form method="post">
    Search: <input type="search" name="search_keyword" required>
    <button type="submit" name="searchBtn">Search</button>
</form>
<hr>
<div id="container">
<?php
$search_keyword = "";

if(isset($_POST['searchBtn'])){
    $search_keyword = $_POST['search_keyword'];
}

include("conn.php");
$sql = "SELECT * 
        FROM feedback 
        INNER JOIN userdetail ON feedback.user_id = userdetail.user_id 
        WHERE userdetail.user_name LIKE '%$search_keyword%'";
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($result)) {
    $feedback = $row['feedback'];
    $feedback_id = $row['feedback_id'];
    $gender_image = ($row['user_gender'] == "Male") ? "images/male.png" : "images/female.png";
    
    if (strlen($feedback) > 100) {
        $visible_text = substr($feedback, 0, 100);
        $hidden_text = substr($feedback, 100);
        echo '<div id="box">';
        echo '<img src="'.$gender_image.'" width="50">';
        echo '<h3>'. $row['user_name'].'</h3>';
        echo '<p><strong>Account Name:</strong> '. $row['account_name'].'</p>';
        echo '<h3>'. $feedback_id .'</h3>';
        echo '<p>'. $visible_text .'<span class="hidden-text" id="hidden-'.$feedback_id.'">'. $hidden_text .'</span></p>';
        echo '<span class="more" id="more-'.$feedback_id.'" onclick="toggleMore('.$feedback_id.')">More</span>';
        echo '<br><a id="deleteBtn" href="delete_cm.php?feedback_id='.$feedback_id.'" onclick="return confirm(\'Are you sure to delete this feedback?\')">Delete</a>';
        echo '</div>';
    } else {
        echo '<div id="box">';
        echo '<img src="'.$gender_image.'" width="50">';
        echo '<h3>'. $row['user_name'].'</h3>';
        echo '<p><strong>Account Name:</strong> '. $row['account_name'].'</p>';
        echo '<h3>'. $feedback_id .'</h3>';
        echo '<p>'. $feedback .'</p>';
        echo '<a id="deleteBtn" href="delete_cm.php?feedback_id='.$feedback_id.'" onclick="return confirm(\'Are you sure to delete this feedback?\')">Delete</a>';
        echo '</div>';
    }
}


mysqli_close($con);
?>
</div>
<script>
    function toggleMore(id) {
        var hiddenText = document.getElementById('hidden-' + id);
        var moreLink = document.getElementById('more-' + id);
        
        if (hiddenText.style.display === 'none' || hiddenText.style.display === '') {
            hiddenText.style.display = 'inline';
            moreLink.textContent = 'Less';
        } else {
            hiddenText.style.display = 'none';
            moreLink.textContent = 'More';
        }
    }
</script>
</body>
</html>
