<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link href="images/Freelance.png" rel="icon">
</head>
</html>

<?php 
    $apiKey = "rzp_test_8qgkT37UOlZAmg";
?>
<form action="#section_3" method="POST">
<script
   src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>"  
    data-amount="199900" 
    data-currency="INR"
    data-id="<?php echo 'OID'.rand(10,100).'END'; ?>"
    data-buttontext="Pay with Razorpay"
    data-name="Testing"
    data-description=""
    data-image=""
    data-prefill.name=""
    data-prefill.email=""
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden"/>
</form>

<!-- <style>
    .razorpay-payment-button{display: none;}
</style>  -->

<script type="text/javascript">
    $(document).ready(function(){
        $('.razorpay-payment-button').click();
    });
</script>