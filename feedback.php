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
            
            height: 60px;
            
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
        .charitylogobox {
            width: 100px;
        }
        
        textarea {
  width: 100%;
  height: 500px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
}

        .Feedback {
            color: #00171E;

        }

        .submit {
            width: 100%;
            background-color: #00171E;
            color: white;
            border: none;
            border-radius: 10px;
            height: 70px;
            font-size: x-large;
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
    </div>
    <div class="header2">
        <input type="text" name="location-search" id="location-search" placeholder="🔎 Location">
    </div>
    <div class="header3">
        <div class="container">
            <div class="box4">
                <img src="images/charitylogo1.png" alt="charitylogo" class="charitylogobox">
                <h3>Enter Your Feedback Here!</h3>
            </div>
            <div class="box2">
                <form action="feedback_insert.php" method="post">
                    <span><h1 class="Feedback">Feedback :</h1></span>
                    <textarea name="feedback" id="feedbackID"></textarea>
                    <input type="submit" value="Submit" class="submit" name="FBsubmitBtn">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
