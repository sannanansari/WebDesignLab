<!DOCTYPE html>
<html>
<head>
	<title>My PHP Example at AIKTC</title>
</head>
<body>
	<?php
		echo "<h1>Welcome to PHP</h1>";
		if($_POST){
			$username = $_POST['username'];
			$brand = $_POST['brand'];
			echo "Thank you $username. You have voted for $brand";
		}
		else{
			echo <<<_END
			<form method = "post"
			action="register.php">
			<br>
			<label for = "user">USERNAME:</label>
			<input type="text"
			name = "username" id = "username"/><br>
			<br><label>Please Vote for your Favorite</label><br>
			<br><label><input type="radio" name = "brand" value = "Nokia"/>Nokia</label>
			<br><label><input type="radio" name = "brand" value = "Apple"/>Apple</label>
			<br><label><input type="radio" name = "brand" value = "Samsung"/>Samsung</label>
			<br><label><input type="checkbox" name = "brand" value = "HTC"/>HTC</label>
			<br><input type="submit" value = "Vote"/>
			</form>
_END;

		}
	?>
</body>
</html>