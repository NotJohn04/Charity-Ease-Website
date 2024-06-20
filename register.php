<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charity Ease Malaysia</title>

    <style>
        body {
            margin: 0;
            overflow-x: hidden;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #00171E;
        }

        .header {
            background-color: #00171E;
            width: 100%;
            height: 140px;
            display: flex;
            align-items: center;
            padding: 20px;
        }

        .box1 {
            display: flex;
            align-items: center;
            margin-left: 100px;
            flex-grow: 1;
        }

        .box2 {
            flex-grow: 1;
        }
        
        .box3 {
            flex-grow: 1;
            display: flex;
            justify-content: flex-end;
            padding-right: 100px;
        }

        #charitylogo {
            width: 250px;
            height: auto;
        }

        #user {
            width: 80px;
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

        .header3 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 900px;
            padding: 20px;
        }

        .container {
            display: flex;
            background-color: #00171E;
            border-radius: 20px;
        }

        .box4 {
            background-color: #00A8E8;
            font-size: xx-large;
            color: white;
            width: 350px;
            height: auto;
            padding: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 20px 0 0 20px;
        }

        .box4 img {
            width: 400px;
            height: auto;
            margin-bottom: 20px;
        }

        .box2 {
            background-color: white;
            width: 400px;
            height: auto;
            padding: 20px;
            border-radius: 0 20px 20px 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input, 
        .form-group textarea {
            width: calc(100% - 20px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group textarea {
            resize: none;
        }

        .form-group input[type="radio"] {
            width: auto;
        }

        .form-group input[type="button"] {
            width: 48%;
            margin-right: 4%;
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
            width: auto;
            height: auto;
            padding: 0;
            cursor: pointer;
            display: inline-block;

        }

    </style>
</head>
<body>

    <div class="header">
        <div class="box1">
            <button class="homebtn" onclick="window.location.href='home.php'">
                <img src="images/Charityeaselogo.jpg" alt="chairityeaselogo" id="charitylogo">
            </button>
            <button id="eventbtn" onclick="window.location.href='event.html'">Event</button>
        </div>

        <div class="box3">
            <button class="loginbtn" onclick="window.location.href='login.php'">
                <img src="images/bananaman.png" alt="user" id="user">
            </button>   
        </div>
    </div>

    <div class="header2">
        <input type="text" name="location-search" id="location-search" placeholder="🔎 Location">
    </div>

    <div class="header3">
        <div class="container">
            <div class="box4">
                <img src="images/charitylogo1.png" alt="charity logo">
                <h1>Welcome</h1>
            </div>

            <div class="box2">
                <form action="register_insert.php" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="nameID" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="usernameID" name="username" required>
                    </div>

                    <div class="form-group">
                        <label for="phonenumber">Phone Number</label>
                        <input type="number" id="phonenumberID" name="phonenumber" required>
                    </div>

                    <div class="form-group">
                        <label for="emailaddress">Email Address</label>
                        <input type="email" id="emailaddressID" name="emailaddress" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="passwordID" name="password" required>
                    </div>

                    <div class="form-group">
                        <label for="homeaddress">Home address</label>
                        <textarea name="homeaddress" id="homeaddressID" cols="20" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <input type="radio" id="maleID" name="gender" value="Male">
                        <label for="male">Male</label>
                        <input type="radio" id="femaleID" name="gender" value="Female">
                        <label for="female">Female</label>
                    </div>

                    <div class="form-group">
                        <label for="dateofbirth">Date of Birth</label>
                        <input type="date" id="dateofbirthID" name="dateofbirth" required>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" id="submitID" name="submitBtn" value="Submit">
                        <input type="reset" id="resetID" name="resetBtn" value="Reset">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
