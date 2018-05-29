
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resend OTP</title>
</head>
<body>
	<a href="index.php">SEND-OTP</a> || 
	<a href="verify.php">VERIFY-OTP</a> || 
	<a href="resend.php">RESEND-OTP</a>
	<form action="re_send_otp.php" method="post">
		<table>
			
			<tr>
				<td>authkey:</td>
				<td><input type="text" name="authkey"></td>
			</tr>
			
			<tr>
				<td>mobile:</td>
				<td><input type="text" name="mobile"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" value="Send"></td>
			</tr>

		</table>
		
	</form>
</body>
</html>
