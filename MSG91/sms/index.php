
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="send_sms.php" method="post">
		<table>
			<tr>
				<td>sender:</td>
				<td><input type="text" name="sender"></td>
			</tr>
			<tr>
				<td>authkey:</td>
				<td><input type="text" name="authkey"></td>
			</tr>
			<tr>
				<td>route:</td>
				<td>
					<select name="route" id="">
							<option value="">Select</option>
							<option value="4">Transactional</option>
							<option value="1">Promotional</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>mobiles:</td>
				<td><textarea name="mobiles" id="" cols="30" rows="10"></textarea></td>
			</tr>
			<tr>
				<td>message:</td>
				<td><textarea name="message" id="" cols="30" rows="10"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Send"></td>
			</tr>

		</table>
		
	</form>
</body>
</html>
