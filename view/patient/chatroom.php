<!DOCTYPE html>
<html>
<?php
session_start();
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../css/patient/chatStyle.css">
    <script type="text/javascript" src="../../js/patient_myscript.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        setInterval(runFunction, 1000, "<?php echo $_SESSION["chat_app_id"] ?>")
    </script>
</head>

<body>

    <h2>Chat Messages</h2>

    <div class="container">
        <div class="anyclass">

            <p></p>
            <span class="time-right"></span>
        </div>
    </div>


    <input type="textarea" cols="100" rows="5" name="usermsg" id="usermsg" placeholder="Add message">
    <button type="button" name="sendmsg" id="sendmsg" onclick='chat("<?php echo $_SESSION["chat_app_id"] ?>")'>Send</button>

</body>


</html>