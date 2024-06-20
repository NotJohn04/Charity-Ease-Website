<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charity Ease Malaysia</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans">
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
        }

        body {
            font-family: 'Josefin Sans', sans-serif;
            margin: 0;
            overflow-x: hidden;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .header {
            background-color: #00171E;
            width: 100%;
            height: 140px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
        }

        .header .box1 {
            display: flex;
            align-items: center;
        }

        .header .box3 {
            display: flex;
            align-items: center;
        }

        #charitylogo {
            width: 150px;
            height: auto;
            margin-right: 20px;
        }

        #eventbtn {
            background-color: #00A8E8;
            border: none;
            border-radius: 30px;
            padding: 15px 50px;
            font-size: large;
            cursor: pointer;
            color: white;
            margin-right: 20px;
        }

        #user {
            width: 60px;
            height: auto;
        }

        .header2 {
            background-color: #0da8e8;
            height: 60px;
            width: 100%;
            display: flex;
            align-items: center;
            padding-left: 100px;
        }

        #location-search {
            background-color: #0da8e8;
            border: none;
            font-size: x-large;
            padding: 10px;
            border-radius: 5px;
            color: white;
            width: 100%;
            max-width: 300px;
            margin-right: 20px;
        }

        ::placeholder {
            color: white;
        }

        .header3 {
            background-color: #00171E;
            width: 100%;
            min-height: 650px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .box2 {
            background-color: white;
            width: 400px;
            padding: 20px;
            border-radius: 20px;
            margin-top: 30px;
        }
        .checkout_form p {
            margin-bottom: 25px;
            font-size: 20px;
            text-transform: uppercase;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 18px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 2px solid #dddddd;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-group input:focus {
            border-color: #00A8E8;
        }

        .checkout_form .details .btn {
            background: #00A8E8;
            padding: 10px;
            border-radius: 25px;
            text-align: center;
            margin-top: 25px;
        }

        .checkout_form .details .btn input {
            color: #fff;
            letter-spacing: 5px;
            display: block;
            border: none;
            cursor: pointer;
            font-size: 18px;
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
        #eventbtn {
            background-color: #00A8E8;
            border: none;
            border-radius: 30px;
            padding: 15px 50px;
            font-size: large;
            cursor: pointer;
            color: white;
        }
        #charitylogo {
            width: 250px;
            height: auto;
        }
        #user {
            width: 80px;
            height: auto;
        }
        .box1 {
            display: flex;
            align-items: center;
            margin-left: 100px;
            flex-grow: 1;
        }
        .box3 {
            flex-grow: 1;
            display: flex;
            justify-content: flex-end;
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
                <div class="checkout_form">
                    <form action="payment_insert.php" method="post">
                        <p>Payment Section</p>
                        <div class="form-group">
                            <label for="cardDetail">Card Details</label>
                            <input type="number" id="cardDetailID" name="cardDetail" required>
                        </div>
                        <div class="form-group">
                            <label for="cardholderName">Cardholder Name</label>
                            <input type="text" id="cardholderNameID" name="cardholderName" required>
                        </div>
                        <div class="form-group">
                            <label for="expiryDate">Expiry Date</label>
                            <input type="date" id="expiryDateID" name="expiryDate" required>
                        </div>
                        <div class="form-group">
                            <label for="CVV">CVV</label>
                            <input type="number" id="CVVID" name="CVV" maxlength="3" oninput="limitCVV(this)" required>
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="number" id="amountID" name="amount" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" id="pmsubmitID" name="pmsubmitBtn" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function limitCVV(input) {
            if (input.value.length > 3) {
                input.value = input.value.slice(0, 3);
            }
        }
    </script>
</body>
</html>
