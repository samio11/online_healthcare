<?php

if (isset($_REQUEST['message'])) {
    $_SESSION['chat_app_id'] = $_REQUEST['message'];
    
    header("Location: ../../view/patient/chatroom.php");
    echo $_SESSION['chat_app_id'];
}
