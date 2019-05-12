
<?php
session_start();
$email=$_SESSION['l'];
$six_digit_random_number = mt_rand(100000, 999999);

$msg = "Thank you for using E-DEBBOU , Your order has been placed succesfully.
Verification number : $six_digit_random_number ";


require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;
// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC7ee60082a1f41f7511582a7bec8a3865';
$auth_token = 'e8b31b2fd0653506b45fdb9b76b19f13';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+12012926631";
$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    '+21625159269',
    array(
        'from' => $twilio_number,
        'body' => $msg
    )
);


?>
<html>

<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>

<body>
<div class="container">
	<div class="row">
    <div class="col-sm-6 col-sm-offset-2" ><!-- col -->
		<h2><h1>Check your email!</h1></h2>
        <p class="desc">We’ve sent a six-digit confirmation code to <strong><?php echo $email ?> </strong> Or +21625159269. Enter it below to confirm your email address and mobile number.</p>
        <br><br><br>
       <label><span class="normal">Your </span>confirmation code</label>
         <div class="confirmation_code split_input large_bottom_margin" data-multi-input-code="true">
    			<div class="confirmation_code_group">
					<div class="split_input_item input_wrapper"><input type="text" class="inline_input" maxlength="6"></div>
                </div>
                <input name="verifier" id="verifier" value="Verifier" type="submit">
            </div><!-- endof col -->
    </div>
</div>
</body>
</html>