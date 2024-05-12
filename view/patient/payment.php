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
			<table class="customTable">

				<tr class="pendingApp">
					<h3 style="color:orange">Due Payments</h3>
					<th>ID</th>
					<th>Doctor's Name</th>
					<th>Speciality</th>
					<th>Time</th>
					<th>Pay</th>
				</tr>
				<?php foreach ($dueApp as $appointment) : ?>
					<tr>
						<td><?php echo $appointment['app_id'] ?></td>
						<td><?php echo $appointment['d_name']; ?></td>
						<td><?php echo $appointment['d_cat']; ?></td>
						<td><?php echo $appointment['stime']; ?></td>
						<td><button type="submit" name="pay" value="<?php echo $appointment['app_id'] ?>" class="penButton">Pay</button></td>

					<?php endforeach; ?>
					</tr>

			</table>
			<br>
			<table class="customTable">
				<tr class="approvedApp">
					<h3 style="color:green">Paid</h3>
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