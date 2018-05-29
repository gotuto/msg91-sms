<?php
//fetch data to the form
 $sender = $_POST['sender'];
 $mobile = $_POST['mobile'];
 $message = "Your verification code is:" . $_POST['message'];
 $otp = $_POST['message'];
 $authkey = $_POST['authkey'];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://control.msg91.com/api/sendotp.php?authkey={$authkey}&message={$message}&sender={$sender}&mobile={$mobile}&otp={$otp}",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo "OTP is delivered successfully. Your Response code: ". $response;
}