<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
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

        body {
            margin: 0;
            overflow-x: hidden;
            font-family: Arial, Helvetica, sans-serif;
        }

        .header {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 900px;
            padding: 20px;
        }

        .field {
            margin-bottom: 10px;
        }

        .field label {
            display: block;
            font-weight: bold;
        }

        .field input[type="text"],
        .field input[type="tel"],
        .field input[type="email"],
        .field input[type="date"],
        .field input[type="username"],
        .field input[type="password"],
        .field textarea {
            width: 100%;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }


    </style>
</head>
<body>
    <div class="header">
        <div class="container">
            <h2>ADD NEW USER</h2>
            <form action="admin_add_user_insert.php" method="post">
                <div class="field">
                    <label for="name">Name</label>
                    <input type="text" id="nameID" name="name" required>
                </div>

                <div class="field">
                    <label for="username">Username</label>
                    <input type="text" id="usernameID" name="username" required>
                </div>

                <div class="field">
                    <label for="phonenumber">Phone Number</label>
                    <input type="tel" id="phonenumberID" name="phonenumber" required>
                </div>

                <div class="field">
                    <label for="emailaddress">Email Address</label>
                    <input type="email" id="emailaddressID" name="emailaddress" required>
                </div>

                <div class="field">
               <label for="password">Password</label>
                    <input type="password" id="passwordID" name="password" required>
                </div>

                <div class="field">
                    <label for="homeaddress">Home address</label>
                    <textarea name="homeaddress" id="homeaddressID" cols="20" rows="3" required></textarea>
                </div>

                <div class="field">
                    <label for="gender">Gender</label>
                    <input type="radio" id="maleID" name="gender" value="Male">
                    <label for="male">Male</label>
                    <input type="radio" id="femaleID" name="gender" value="Female">
                    <label for="female">Female</label>
                </div>

                <div class="field">
                    <label for="dateofbirth">Date of Birth</label>
                    <input type="date" id="dateofbirthID" name="dateofbirth" required>
                </div>
                    
                <div class="field">
                    <input type="submit" name="NUsubmitBtn" value="Submit">
                    <input type="reset" id="resetID" name="resetBtn" value="Reset">
                </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>
