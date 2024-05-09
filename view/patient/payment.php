<?php include '../../controller/patient/paymentControl.php' ?>

<form action="submit.php" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="1000"
		data-name="Online Healthcare"
		data-description="Doctor's Fee"
		data-image="https://www.logostack.com/wp-content/uploads/designers/eclipse42/small-panda-01-600x420.jpg"
		data-currency="usd"
		data-email="demo@gmail.com"
	>
	</script>

</form>