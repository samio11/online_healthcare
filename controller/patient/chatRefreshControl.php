<?php
include '../../model/patient_db.php';
$room = $_POST['room'];
$mydb = new Model();
$str = '';
$conObj = $mydb->OpenCon();
$result = $mydb->msgdatabase($conObj, $room);
foreach ($result as $document) {
    if ($document['flag'] == 'patient')
        $str .= '<div class="container">' . $document['name'] . ' <p class="right">' . $document['msg'] . '</p><span class="time-right">' . $document['time'] . '</span></div>';
    else
        $str .= '<div class="container darker">' . $document['name'] . ' <p>' . $document['msg'] . '</p><span class="time-right">' . $document['time'] . '</span></div>';
}
echo $str;
