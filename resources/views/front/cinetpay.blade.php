<?php
//Credentials apiKey & siteId
$apikey = '157857979960d4b150120ff5.26018293';
$cpm_site_id ='744929';

//Post Parameters
$cpm_version = 'V1';
$cpm_language = 'fr';
$cpm_currency = 'CFA';
$cpm_page_action = 'PAYMENT';
$cpm_payment_config = 'SINGLE';
$cpSecure = "https://secure.cinetpay.com";
$signatureUrl = "https://api.cinetpay.com/v1/?method=getSignatureByPost";
/////////////////////////////

$cpm_amount = 100; //TransactionAmount
$cpm_custom = '';// This field exist soanything can be inserted in it;it will be send back after payment

$cpm_designation = 'Payement'; //this field exist to identify the article being paid


$cpm_trans_date = date("Y-m-d H:i:s");
$cpm_trans_id = 'payement-' . (string)date("YmdHis"); //Transaction id that will be send to identify the transaction
$return_url = "https://onecall-sms.com/slydesign/sms_payement.php"; //The customer will be redirect on this page after successful payment
$cancel_url = "https://onecall-sms.com/slydesign/";//The customer will be redirect on this page if the payment get cancel
$notify_url = "";//This page must be a webhook (webservice).
//it will be called weither or nor the payment is success or failed
//you must only listen to this to update transactions status


//Data that will be send in the form
$getSignatureData = array(
    'apikey' => $apikey,
    'cpm_amount' => $cpm_amount,
    'cpm_custom' => $cpm_custom,
    'cpm_site_id' => $cpm_site_id,
    'cpm_version' => $cpm_version,
    'cpm_currency' => $cpm_currency,
    'cpm_trans_id' => $cpm_trans_id,
    'cpm_language' => $cpm_language,
    'cpm_trans_date' => $cpm_trans_date,
    'cpm_page_action' => $cpm_page_action,
    'cpm_designation' => $cpm_designation,
    'cpm_payment_config' => $cpm_payment_config
);
// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'method' => "POST",
        'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
        'content' => http_build_query($getSignatureData)
        )
);

$context = stream_context_create($options);
$result = file_get_contents($signatureUrl, false, $context);
if ($result === false) {
    /* Handle error */
    \header($return_url);
    exit();
}
// var_dump($getSignatureData);
// echo("\n");
$signature = json_decode($result);
// var_dump($signature);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
       <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
       <!-- <link href="style.css" rel="stylesheet" id=""> -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
  </head>
  <style>
body {
	margin:0;
	color:#edf3ff; 
	background:#c8c8c8;
	background:url(https://hdqwalls.com/download/material-design-4k-2048x1152.jpg) fixed;
	background-size: cover;
	font:600 16px/18px 'Open Sans',sans-serif;
}
:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
	width: 100%;
	margin:auto;
	max-width:510px;
	min-height:510px;
	position:relative;
	/*background:url(https://maxcdn.icons8.com/app/uploads/2016/03/material-1-1000x563.jpg) no-repeat center;*/
	background-size: cover;
	/*box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);*/
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 70px 100% 70px;
	background:rgba(0 0 0 / 0%)
}
.login-html .sign-in-htm,
.login-html .for-pwd-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	-webkit-transform:rotateY(180deg);
	        transform:rotateY(180deg);
	-webkit-backface-visibility:hidden;
	        backface-visibility:hidden;
	-webkit-transition:all .4s linear;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .for-pwd,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .for-pwd:checked + .tab{
	color:#fff;
	border-color:#1161ee;
}
.login-form{
	min-height:345px;
	position:relative;
	-webkit-perspective:1000px;
	        perspective:1000px;
	-webkit-transform-style:preserve-3d;
	        transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:#aaa;
	font-size:12px;
}
.login-form .group .button{
	background:#1161ee;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	-webkit-transition:all .2s ease-in-out 0s;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	-webkit-transform:scale(0) rotate(0);
	        transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	-webkit-transform:scale(0) rotate(0);
	        transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	-webkit-transform:scale(1) rotate(45deg);
	        transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	-webkit-transform:scale(1) rotate(-45deg);
	        transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .for-pwd + .tab + .login-form .sign-in-htm{
	-webkit-transform:rotate(0);
	        transform:rotate(0);
}
.login-html .for-pwd:checked + .tab + .login-form .for-pwd-htm{
	-webkit-transform:rotate(0);
	        transform:rotate(0);
}

.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	text-align:center;
}

  </style>
<body>

<body>
      
	  <div class="login-wrap">
	  
		<div class="login-html" style="background:rgba(0,0,0,0.5);">
		<form id="formInscri"action="<?php echo $cpSecure; ?>" method="post">
       
		<input type="hidden" value="<?php echo $apikey; ?>" name="apikey">
        <input type="hidden" value="<?php echo $cpm_custom; ?>" name="cpm_custom">
        <input type="hidden" value="<?php echo $cpm_site_id; ?>" name="cpm_site_id">
        <input type="hidden" value="<?php echo $cpm_version; ?>" name="cpm_version">
        <p><input type="hidden" value="<?php echo $cpm_currency; ?>" name="cpm_currency"></p>
        <input type="hidden" value="<?php echo $cpm_trans_id; ?>" name="cpm_trans_id">
        <input type="hidden" value="<?php echo $cpm_language; ?>" name="cpm_language">
        <input type="hidden" value="<?php echo $getSignatureData['cpm_trans_date']; ?>" name="cpm_trans_date">
        <input type="hidden" value="<?php echo $cpm_page_action; ?>" name="cpm_page_action">
        <p><input type="hidden" value="<?php echo $cpm_designation; ?>" name="cpm_designation"> </p>
        <input type="hidden" value="<?php echo $cpm_payment_config; ?>" name="cpm_payment_config">
        <input type="hidden" value="<?php echo $signature; ?>" name="signature">
        <input type="hidden" value="<?php echo $return_url; ?>" name="return_url">
        <input type="hidden" value="<?php echo $cancel_url; ?>" name="cancel_url">
        <input type="hidden" value="<?php echo $notify_url; ?>" name="notify_url">
        	
        <input type="hidden" value="1" name="debug">
  
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Veillez suivre la procedure</label>
			<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab"></label>
			
			<div class="login-form">
				
				<div class="sign-in-htm">
					
					<div class="group">
						<label for="mtpaid" class="label">montant</label>
						<input  id="mtpaid" type="text" value="<?php echo $cpm_amount; ?>" name="cpm_amount" class="input">
					</div>
					<div class="group">
						<input type="submit" id="btnpaid" class="button" value="Valider">
					</div>
					<div class="hr"></div>
				</div>
				<!--<div class="for-pwd-htm">-->
				<!--	<div class="group">-->
				<!--		<label for="user" class="label">Username or Email</label>-->
				<!--		<input id="user" type="text" class="input">-->
				<!--	</div>-->
				<!--	<div class="group">-->
				<!--		<input type="submit" class="button" value="Reset Password">-->
				<!--	</div>-->
				<!--	<div class="hr"></div>-->
				<!--</div>-->
			</div>
			</form>
		</div>
		
	</div>
	

</html>