<?php
//include '../../model/patient_db.php';
session_start();

if ($_SESSION['flag'] == true) {
  $_SESSION['flag'] = false;
  header("Location: ../../view/patient/viewAppointment.php");
}
if (isset($_REQUEST['showProfile'])) {
  header("Location: ../../controller/patient/viewProfileControl.php");
}
if (isset($_REQUEST['updateProfile'])) {
  header("Location: ../controller/updateControl.php");
}
if (isset($_REQUEST['docList'])) {
  header("Location: ../../view/patient/doctorList.php");
}
if (isset($_REQUEST['appointment'])) {
  header("Location: ../../view/patient/viewAppointment.php");
}
if (isset($_REQUEST['assistant'])) {
  header("Location: ../../view/patient/medAssistList.php");
}
if (isset($_REQUEST['prescription'])) {
  header("Location: ../../view/patient/prescription.php");
}
if (isset($_REQUEST['billing'])) {
  header("Location: ../../view/patient/payment.php");
}
if (isset($_REQUEST['addinfo'])) {
  header("Location: ../../view/patient/addInfo.php");
}
if (isset($_REQUEST['logout'])) {
  session_destroy();
  header("Location: ../../view/patient/login.php");
}
