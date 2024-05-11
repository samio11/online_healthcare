<?php
include 'homepage.php';
include '../../controller/patient/billingControl.php';
include '../../controller/patient/paymentControl.php'
?>
<!DOCTYPE html>
<html>

<head>
	<title>Apointments</title>
	<script type="text/javascript" src="../../js/patient_myscript.js"></script>
	<link rel="stylesheet" href="../../css/patient/myStyle.css">
</head>

<body>
	<form action="" method="POST">
		<div class="docmain">
			<table width="100%" class="text" cellpadding="10" align="center" border="1">

				<thead>
					<h3>Due Payments</h3>
					<th>ID</th>
					<th>Doctor's Name</th>
					<th>Speciality</th>
					<th>Time</th>
					<th>Pay</th>
				</thead>
				<tbody>
					<?php foreach ($dueApp as $appointment) : ?>
						<tr>
							<td><?php echo $appointment['app_id'] ?></td>
							<td><?php echo $appointment['d_name']; ?></td>
							<td><?php echo $appointment['d_cat']; ?></td>
							<td><?php echo $appointment['stime']; ?></td>
							<td><button type="submit" name="pay" value="<?php echo $appointment['app_id'] ?>">Pay</button></td>

						<?php endforeach; ?>
						</tr>

				</tbody>
				
			</table>
			<br>
			<table width="100%" border="1" class="text" cellpadding="10" align="center">
				<tr>
					<h3>Paid</h3>
					<th>ID</th>
					<th>Doctor's Name</th>
					<th>Speciality</th>
					<th>Amount</th>
					<th>TRX Id</th>
					<th>TRX Date</th>
				</tr>
				<tr><?php echo $dstr ?></tr>
			</table>
		</div>

	</form>
</body>