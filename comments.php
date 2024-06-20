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
            /* padding: 20px; */
            overflow-x: hidden;
            /* display: flex;
            flex-direction: row; */
            background-color: #00171E;
        }
        #container {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        #box {
            background-color: white;
            width: 100%;
            max-width: 600px; 
            margin: 0 auto;
            padding: 10px;
            border: 1px solid #000;
            border-radius: 10px;
            box-sizing: border-box;
            margin-top: 20px;
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
        
        .homebtn {
            border: none;
            background-color: transparent;
            width: auto;
            height: auto;
            padding: 0;
            cursor: pointer;
            display: inline-block;
        }
        .loginbtn {
            border: none;
            background-color: transparent;
            padding: 0;
            cursor: pointer;
            display: inline-block;
            margin-right: 160px;
        }
        .loginbtn img {
            width: 80px;
            height: auto;
        }   

        .profilebtn {
            background-color: #00171E;
            color: #00A8E8;
            font-size: x-large;

            cursor: pointer;
            margin-right: 50px;
            border-color: #00A8E8;
            border-radius: 30px;
            padding: 15px 50px;

        }
        #location-search {
            background-color: #0da8e8;
            border: none;
            font-size: x-large;
        }
        ::placeholder {
            color: white;
        }
        #eventbtn {
            background-color: #00A8E8;
            border: none;
            border-radius: 30px;
            padding: 15px 50px;
            font-size: large;
            cursor: pointer;
            color: white;
        }

        .header2 {
            background-color: #0da8e8;
            height: 60px;
            width: 100%;
            margin: 0;
            display: flex;
            align-items: center;
            padding-left: 100px;
        }
        #user {
            width: 80px;
            height: auto;
        }
        #charitylogo {
            width: 250px;
            height: auto;
        }
        .box3 {
            flex-grow: 1;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            
        }
        .box1 {
            display: flex;
            align-items: center;
            margin-left: 100px;
            flex-grow: 1;
        }
        .header {
            background-color: #00171E;
            width: 100%;
            height: 140px;
            display: flex;
            align-items: center;
            padding: 20px;
        }

        .searchbtn{
            background-color: #00A8E8;
            border-radius:20px;
            border-color: #00171E;
            color: #00171E;
            padding: 10px 30px;
            font-size: large;
        }
    </style>
</head>
<body>

<div class="header">
        <div class="box1">
            <button class="homebtn" onclick="window.location.href='userhome.php'">
                <img src="images/Charityeaselogo.jpg" alt="chairityeaselogo" id="charitylogo">
            </button>
            <button id="eventbtn" onclick="window.location.href='userevent.php'">Event</button>
        </div>
        <div class="box3">
        <button class="profilebtn" onclick="window.location.href='user_profile.php'" >Profile</button>
            <button class="loginbtn" onclick="window.location.href='logout.php'">
                <img src="images/bananaman.png" alt="user" id="user">
            </button>
        </div>
        <!-- <div class="header2">
        <input type="text" name="location-search" id="location-search" placeholder="🔎 Location">
    </div> -->

    </div>

<div class="header3">
<!-- <div>
    <a class="link" href="feedback.php">Add New Feedback</a>
</div> -->
<!-- <hr> -->
<form method="post" class="header2">
    <input type="search" name="search_keyword" id="location-search" placeholder="🔎 Location" required>
    <button type="submit" name="searchBtn" class="searchbtn">Search</button>
</form>
<!-- <hr> -->
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
        echo '</div>';
        
    } else {
        echo '<div id="box">';
        echo '<img src="'.$gender_image.'" width="50">';
        echo '<h3>'. $row['user_name'].'</h3>';
        echo '<p><strong>Account Name:</strong> '. $row['account_name'].'</p>';
        echo '<h3>'. $feedback_id .'</h3>';
        echo '<p>'. $feedback .'</p>';
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
