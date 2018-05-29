
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="index.php">SEND-OTP</a> || 
	<a href="verify.php">VERIFY-OTP</a> || 
	<a href="resend.php">RESEND-OTP</a>
	<form action="otp_sms.php" method="post">
		<table>
			<tr>
				<td>sender:</td>
				<td><input type="text" name="sender" value="GOTUTO"></td>
			</tr>
			<tr>
				<td>authkey:</td>
				<td><input type="text" name="authkey"></td>
			</tr>
			
			<tr>
				<td>mobile:</td>
				<td><input type="text" name="mobile"></td>
			</tr>
			<tr>
				<td>OTP:</td>
				<td><input type="text" name="message" id="otp"> | <a href="#" onclick="document.getElementById('otp').value = getOTP(999999,111111)">Generate OTP</a></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Send"></td>
			</tr>

		</table>
		
	</form>
</body>
	<script>
		function getOTP(min, max) {
		    return Math.floor(Math.random() * (max - min)) + min;
		}
	</script>
</html>
