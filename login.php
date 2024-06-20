<?php
    session_start();

    if(isset($_POST["LoginBtn"])){
    
        $conn = mysqli_connect("localhost","root","","assignment");
    
        $sql = "SELECT * FROM userdetail WHERE user_email = '".$_POST["user_email"]."' AND user_password ='".$_POST["user_password"]."'";
    
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
    
        if($row){
            $_SESSION["user_id"] = $row["user_id"];
    
            if(isset($_POST["remember"])){
                setcookie("user_login",$_POST["user_email"],time() + (7 * 24 * 60 * 60),"/");
    
            } else {
                unset($_COOKIE['user_login']);
                setcookie('user_login', null, -1, '/');
            }

                header("location:userhome.php");


        } else {
            echo"<script>alert('Invalid username/ password!');</script>";
        }
    }

            ///if($_row["user_gender"]=="Male"){
                ///header("location:userhome.php");
            ///}
            ///if($_row["user_gender"]=="Female"){
                ///header("location:userhome.php");
            ///}
        ///else {
            ///echo"<script>window.location.href='protected.php';</script>";
            ///}
?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charity Ease Malaysia</title>

    <style>
        body {
            margin: 0;
            overflow-x: hidden;
            height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
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
            height: 200px;
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

        .header3 {
            background-color: #00171E;
            width: 100%;
            height: 510px;
            display: flex;
            flex-direction: column; /* Center items vertically */
            align-items: center;
            justify-content: center; /* Center items horizontally */
        }

        .box2 {
            background-color: white;
            width: 400px;
            padding: 20px;
            border-radius: 20px;
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .wlc {
            font-size: xx-large;
            padding-top: 10px;
            text-align: center;
            font-weight: 600;
        }

        .logo {
            width: 100px;
            height: auto;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .box2_1 {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .input-group {
            width: 100%;
            margin: 10px 0;
        }

        .input-group input {
            /* width: calc(100% - 20px); */
            width:100%;
            padding: 10px;
            font-size: 1.2em;
            border-radius: 10px;
            border: 1px solid #ccc;
        }

        .emaillogin,
        .passwordlogin {
            background-color: #00171E;
            color: white;
        }

        .rememberBtn {
            background-color: white;
            color: gray;
            
            
        }

        .remember_me{
            /* display: flex;
            flex-direction: row; */
            width:200px;
        }


        .remember-group {
            display: flex;
            flex-direction:row ;
            text-align:left;
            height:20px;
        }


        .btn-group {
            display: flex;
            justify-content: space-between;
            width: 350px;
        }

        .btn-group input[type="button"] {
            width: 85%;
            padding: 15px;
            font-size: 1.2em;
            border-radius: 10px;
            border: none;
            cursor: pointer;
        }
        .btn-group input[type="submit"] {
           width:400px;
        }

        .backlogin {
            background-color: #00171E;
            color: white;
        }

        .nextlogin {
            background-color: #00A8E8;
            color: white;
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
        a:link {
            text-decoration: none;
            color: #00171E;
        }

        a:visited {
            text-decoration: none;
            color: #00171E;
        }

        a:hover {
            text-decoration: underline;
            color: #00A8E8;
        }

        a:active {
            text-decoration: underline;
            color: #00A8E8;
        }
        body {
            margin: 0;
            overflow-x: hidden;
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
            <button class="homebtn" onclick="window.location.href='home.php'">
                <img src="images/Charityeaselogo.jpg" alt="charityeaselogo" id="charitylogo">
            </button>
            <button id="eventbtn" onclick="window.location.href='event.php'">Event</button>
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
        <div class="box2">
            <div class="box2_1">
                <h1 class="wlc">Welcome</h1>
                <img src="images/Add a heading.png" alt="logo" class="logo">


            <form method="post" action="">
                <div class="input-group">
                    <div><label for="login"></label></div>
                        <div><input name="user_email" class="emaillogin" placeholder="Email" type="text" value="<?php if(isset($_COOKIE
                        ["user_login"])) {echo $_COOKIE["user_login"];} ?>">
                    </div>
                </div>


                <div class="input-group">
                    <div><label for="password"></label></div>
                <div><input name="user_password" type="password"  class="passwordlogin" placeholder="Password" value="">
                </div>

                <div>
                    <div class="Remember-group">
                    <label class="remember_me" for="remember_me">Remember me</label>
                    <input class="rememberBtn" type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE
                    ["user_login"])) { ?>checked <?php }?> />
                    </div>
                </div>

                <div class="btn-group">
                    <input type="button" name="backlogin" class="backlogin" value="Back" onclick="window.location.href='home.php'"></button>
                    <input type="submit" id="LoginBtn"name="LoginBtn" class="nextlogin" value="Login"></span>
                </div>

                
                <a href="register.php">Click Here to Register</a>
            </form>    
            </div>
        </div>
    </div>
</body>
</html>