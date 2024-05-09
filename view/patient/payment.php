<?php
include 'homepage.php';
include '../../controller/patient/billingControl.php'
?>
<!DOCTYPE html>
<html>

<head>
	<title>Apointments</title>
	<script type="text/javascript" src="../../js/patient_myscript.js"></script>
	<link rel="stylesheet" href="../../css/patient/myStyle.css">
</head>

<body>
	<div class="docmain">
		<table class="text" cellpadding="10" align="center">

			<thead>
				<td>Doctor's Name</td>
				<td>Gender</td>
				<td>Speciality</td>
				<td>Time</td>
				<td>Note</td>
				<td>Status</td>
				<td>Payment</td>
			</thead>
			<tbody><?php echo $str ?></tbody>



		</table>
	</div>


</body>