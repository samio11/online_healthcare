<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../css/patient/chatStyle.css">
    <script type="text/javascript" src="../../js/patient_myscript.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        setInterval(runFunction, 1000);
    </script>
</head>

<body>

    <h2>Chat Messages</h2>

    <div class="container">
        <div class="anyclass">

            <p>Hello. How are you today?</p>
            <span class="time-right">11:00</span>
        </div>
    </div>


    <input type="text" name="usermsg" id="usermsg" placeholder="Add message"><br>
    <button type="button" name="sendmsg" id="sendmsg" onclick="chat('<?php echo $_SERVER['REMOTE_ADDR'] ?>')">Send</button>

</body>

</html>