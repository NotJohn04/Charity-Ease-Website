<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        /* @import url('http://fonts.googleapis.com/css2?family=Roboto&display=swap'); */

        body {
            font-family: "Roboto", sans-serif;
            margin: 0;
            /* padding: 20px; */
            background-color: #00171E;
            overflow-x: hidden;
        }

        #box {
            background-color: white;
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #000000;
            border-radius: 10px;
            box-sizing: border-box;
            margin-top: 20px;
        }

        

        .input-field {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .submit-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            box-sizing: border-box;
        }

        .submit-btn:hover {
            background-color: #45a049;
        }

        label {
            margin-top: 10px;
            display: block;
            font-weight: bold;
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
        .box3 {
            flex-grow: 1;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        #charitylogo {
            width: 250px;
            height: auto;
        }

        #user {
            width: 80px;
            height: auto;
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
        .box3 {
            flex-grow: 1;
            display: flex;
            justify-content: flex-end;
            padding-right: 100px;
        }

        #charitylogo {
            width: 150px;
            height: auto;
        }

        #user {
            width: 60px;
            height: auto;
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

        #eventbtn {
            background-color: #00A8E8;
            border: none;
            border-radius: 30px;
            padding: 15px 50px;
            font-size: large;
            cursor: pointer;
            color: white;
        }

        #location-search {
            background-color: #0da8e8;
            border: none;
            font-size: x-large;
        }

        ::placeholder {
            color: white;
        }
        .header {
            background-color: #00171E;
            width: 100%;
            height: 140px;
            display: flex;
            align-items: center;
            padding: 20px;
            
        }
       
       
        
       

    </style>
</head>
<body>

<?php
session_start(); // 如果你使用会话来跟踪用户登录
include("conn.php");

$user_id = $_SESSION['user_id']; // 假设用户ID存储在会话中

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_name = $_POST['user_name'];
    $account_name = $_POST['account_name'];
    $user_phone = $_POST['user_phone'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_address = $_POST['user_address'];
    $user_gender = $_POST['user_gender'];
    $user_dob = $_POST['user_dob'];

    $update_sql = "UPDATE userdetail SET 
                    user_name='$user_name', 
                    account_name='$account_name', 
                    user_phone='$user_phone', 
                    user_email='$user_email', 
                    user_password='$user_password', 
                    user_address='$user_address', 
                    user_gender='$user_gender', 
                    user_dob='$user_dob'
                    WHERE user_id='$user_id'";

    if (mysqli_query($con, $update_sql)) {
        echo "<script>alert('Upload Successful.'); window.location.href = 'userhome.php';</script>";
        exit;
    } else {
        echo "Error updating profile: " . mysqli_error($con);
    }
}

$sql = "SELECT * FROM userdetail WHERE user_id='$user_id'";
$result = mysqli_query($con, $sql);

if ($row = mysqli_fetch_array($result)) {
?>
<div class="header">
    <!-- <div class="box1"> -->
        <button class="homebtn" onclick="window.location.href='userhome.php'">
            <img src="images/Charityeaselogo.jpg" alt="charityeaselogo" id="charitylogo">
        </button>
        <button id="eventbtn" onclick="window.location.href='userevent.php'">Event</button>
    <!-- </div> -->
    
    <div class="box3">
        <button class="profilebtn" onclick="window.location.href='user_profile.php'">Profile</button>
        <button class="loginbtn" onclick="window.location.href='login.php'">
            <img src="images/bananaman.png" alt="user" id="user">
        </button>
    </div>
</div>
<div class="header2">
        <input type="text" name="location-search" id="location-search" placeholder="🔎 Location">
    </div>

<div id="box">
    <form method="post">
        <label for="user_name">Name:</label>
        <input type="text" id="user_name" name="user_name" class="input-field" value="<?php echo $row['user_name']; ?>" required>

        <label for="account_name">Account Name:</label>
        <input type="text" id="account_name" name="account_name" class="input-field" value="<?php echo $row['account_name']; ?>" required>

        <label for="user_phone">Phone:</label>
        <input type="text" id="user_phone" name="user_phone" class="input-field" value="<?php echo $row['user_phone']; ?>" required>

        <label for="user_email">Email:</label>
        <input type="email" id="user_email" name="user_email" class="input-field" value="<?php echo $row['user_email']; ?>" required>

        <label for="user_password">Password:</label>
        <input type="password" id="user_password" name="user_password" class="input-field" value="<?php echo $row['user_password']; ?>" required>

        <label for="user_address">Address:</label>
        <input type="text" id="user_address" name="user_address" class="input-field" value="<?php echo $row['user_address']; ?>" required>

        <label for="user_gender">Gender:</label>
        <select id="user_gender" name="user_gender" class="input-field" required>
            <option value="Male" <?php if ($row['user_gender'] == 'Male') echo 'selected'; ?>>Male</option>
            <option value="Female" <?php if ($row['user_gender'] == 'Female') echo 'selected'; ?>>Female</option>
        </select>

        <label for="user_dob">Date of Birth:</label>
        <input type="date" id="user_dob" name="user_dob" class="input-field" value="<?php echo $row['user_dob']; ?>" required>

        <button type="submit" class="submit-btn">Update Profile</button>
    </form>
</div>

<?php
} else {
    echo "No user found.";
}

mysqli_close($con); // Close the connection after query execution
?>
</body>
</html>
