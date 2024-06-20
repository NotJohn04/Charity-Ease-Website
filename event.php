<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charity Ease Malaysia</title>
<!-- lets try siome thing -->
    <style>
        
        body{
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

        .header3  {

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
            margin-left: 10px;


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
            margin-left: 10px

        }
        #pl {
            padding: 10px;
            background-color: #00A8E8;
            border: none;
            border-radius: 10px;
            font-size: large;
            color: white;
            width: 100%;
            align-items: center;
            padding: 10px;
            margin-top: 5px;
            margin-left:10px ;

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
        .row{
            display: flex;
            flex-direction: row;
            width: 100%;
            height: 60px;
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
            <button class="loginbtn" onclick="window.location.href='login.php'">
                <img src="images/bananaman.png" alt="user" id="user">
            </button>
        </div>
    </div>
    <div class="header2">
        
        <input type="text" name="location-search" id="location-search" placeholder="🔎 Location" >
    </div>
    <div class="header3">
        
        <div class="leftarrow">

                <!-- <img src="images/urfather.png" alt="left-arrow"> -->


        </div>
        <div class="preview-image">
            <img src="images/charity_giving_poster.png" alt="preview-image" id="preimg">



        </div>
        <div class="description">
            <div class="des-title">
                <h1 id="des-title">Empower Community Spirit: #GivingTuesday Charity Bash</h1>

            </div>
            <div class="des-content">
                hello
                As the spirit of #GivingTuesday sweeps across the globe, we invite you to be a part of a movement that celebrates generosity in its most joyous form. Join us on Saturday, 30th November 2030, for a day where every act of kindness resonates with the heartbeat of the community.
                Dive into our "Charity Bash" where fun, festivities, and philanthropy come together in a spectacular blend. It's more than an event—it's a carnival of compassion, set against the backdrop of vibrant laughter and shared purpose. We're bringing together the young and old, as we dance, sing, and give back to the community that binds us all.
                Located at the heart of Any City, on 123 Anywhere St, this event is your chance to contribute to a cause while creating unforgettable memories. Whether you're swinging to live music, savoring delightful treats, or participating in our workshops, you're part of a larger narrative that fosters change and upliftment.
                Bookmark www.charityeasemalaysia.com for more details, and prepare to immerse yourself in a day where every moment is a celebration of unity and every gesture contributes to a legacy of giving. Your presence is the magic that transforms lives; let's make it count together. Join us, bring smiles, and let's make generosity go viral!
                
            </div>
                <div class="row">
                <button id="pl" onclick="window.location.href='pleaseLogin.php'">Feedback</button>
                    Feedback
                </button>
                <button id="pl" onclick="window.location.href='pleaseLogin.php'">Comments</button>
                    Comments
                </button>
    </div>

                


        </div>
        <div class="rightarrow">
            <!-- <img src="images/urmother.png" alt="left-arrow"> -->


        </div>

    </div>
    
</body>
</html>
