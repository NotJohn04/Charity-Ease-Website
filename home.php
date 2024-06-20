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
        }
        .description {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
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
            
        }
        #charitylogo {
            width: 250px;
            height: auto;
        }
        #user {
          margin-left: 500px;
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
            background-color: #00171E;
            width: auto;
            height: 1000px;
            display: flex;
            align-items: center;
            padding: 20px;
        }
        .leftarrow, .rightarrow {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            flex-grow: 0;

          
        }
        /* .leftarrow img {
            width: 100px;
            height: auto;
        }
        .rightarrow img {
            width: 100px;
            height: auto;
        } */
        #preimg {
            border-radius: 40px;
        }
        .des-title {
            background-color: #007fa6;
            border-radius: 20px;
            height: 120px;
            color: white;
        }
        #des-title {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }
        .des-content {
            padding: 10%;
            background-color: white;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 20px;
        }
        #Lmh {
            padding: 15px 50px;
            background-color: #00A8E8;
            border: none;
            border-radius: 10px;
            font-size: large;
            color: white;
            cursor: pointer;
            display: inline-block;
            text-align: center;
            margin-top: 10px;
            width: 100%;
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
            <button id="eventbtn" onclick="window.location.href='event.php'">Event</button>
        </div>
        <div class="box3">
            <button class="loginbtn" onclick="window,location.href='login.php'">
                <img src="images/bananaman.png" alt="user" id="user">
            </button>
        </div>
    </div>
    <div class="header2">
        <input type="text" name="location-search" id="location-search" placeholder="🔎 Location">
    </div>
    <div class="header3">
        <div class="leftarrow">
            <!-- <img src="images/urfather.png" alt="left-arrow"> -->
        </div>
        <div class="preview-image">
            <img src="images/WhatsApp Image 2024-05-01 at 20.15.20_6e98cadd.jpg" alt="preview-image" id="preimg">
        </div>
        <div class="description">
            <div class="des-title">
                <h1 id="des-title">Join Hands for Hope: Support Our Elders in Malaysia</h1>
            </div>
            <div class="des-content">
                In the heart of Malaysia, there's a story of resilience and community that unfolds every day. This snapshot captures a poignant moment — a group of spirited elders receiving much-needed care packages. Behind each pair of eyes, there's a tale of wisdom, a life filled with experiences, and a shared need for support as they face the challenges of their golden years.
                As part of the "Charity Ease" initiative, we strive to not only provide essentials but also to uphold the dignity and spirit of our cherished older generation. These moments are not just about giving; they're about connection, respect, and kindness. Each package is more than just aid; it's a message that they are not forgotten, a reminder that they are valued and loved.
                By clicking the donate button below, you become part of this compassionate journey. Your contribution is more than a donation; it's a beacon of hope, a hand extended in solidarity, and a step towards a better tomorrow for those who once cared for us. Let's not just watch from the sidelines—be the change that brightens the day for an elder in Malaysia. Your support can transform lives, one person at a time. Click and make a difference today!
            </div>
            <button id="Lmh" onclick="window.location.href='pleaseLogin.php'">Let me Help!</button>
        </div>
        <div class="rightarrow">
            <!-- <img src="images/urmother.png" alt="left-arrow"> -->
        </div>
    </div>
</body>
</html>
