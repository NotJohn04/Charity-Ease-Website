<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
    <style>
        @import url('http://fonts.googleapis.com/css2?family=Roboto&display=swap');
        body {
            font-family: "Roboto", sans-serif;
        }

        .container {
            width: 300px;
            margin: 20px auto;
            padding: 10px;
            border: 1px solid #000000;
            border-radius: 10px;
        }

        .field {
            margin-bottom: 10px;
        }

        .field label {
            display: block;
            font-weight: bold;
        }

        .field input[type="text"],
        .field input[type="email"],
        .field input[type="tel"],
        .field input[type="password"],
        .field textarea {
            width: 100%;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .field input[type="radio"] {
            margin-right: 5px;
        }

        .field input[type="submit"],
        .field input[type="reset"] {
            padding: 8px 16px;
            border: none;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
        }

        .field input[type="submit"]:hover,
        .field input[type="reset"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php
        include("conn.php");
        $id = $_GET["id"];
        $sql = "SELECT * FROM userdetail WHERE user_id=$id";  
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
    ?>
    <div class="container">
        <h2>Edit Contact</h2>
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['user_id']; ?>">
            <div class="field">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required value="<?php echo $row['user_name']; ?>">
            </div>
            <input type="hidden" name="password" value="<?php echo $row['user_password']; ?>">
            <div class="field">
                <label for="name">Password</label>
                <input type="password" name="password" id="password" required value="<?php echo $row['user_password']; ?>">
            </div>
            <div class="field">
                <label for="phone">Phone Number</label>
                <input type="tel" name="phone_number" id="phone" required value="<?php echo $row['user_phone']; ?>">
            </div>
            <div class="field">
                <label for="email">Email Address</label>
                <input type="email" name="email_address" id="email" required value="<?php echo $row['user_email']; ?>">
            </div>
            <div class="field">
                <label for="address">Home Address</label>
                <textarea name="home_address" id="address" required><?php echo $row['user_address']; ?></textarea>
            </div>
            <div class="field">
                <label>Gender</label>
                <input type="radio" name="gender" id="male" value="Male" <?php if ($row['user_gender'] == 'Male') echo 'checked'; ?>>
                <label for="male">Male</label>
                <input type="radio" name="gender" id="female" value="Female" <?php if ($row['user_gender'] == 'Female') echo 'checked'; ?>>
                <label for="female">Female</label>
            </div>
            <div class="field">
                <label for="dob">Date Of Birth</label>
                <input type="date" name="dob" id="dob" value="<?php echo $row['user_dob']; ?>">
            </div>
            <div class="field">
                <input type="submit" name="submitBtn" value="Submit">
                <input type="reset" value="Reset">
            </div>
        </form>
    </div>
    <?php
        mysqli_close($con);
    ?>
</body>
</html>
