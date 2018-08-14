<!DOCTYPE html>
<html>
<head>
	<title>Registration Info</title>
	<style>
		table{
			border:2px solid black;
		}
		table td{
			padding: 2px;

		}
		table tr:nth-child(odd){
			background-color: yellow;
		}
	</style>
</head>
<body>
<?php
	require_once 'function.php';
	if($_POST){
		$rollno = $_POST['rollno'];
		$name = $_POST['sname'];
		$gender = $_POST['gender'];
		$addr = $_POST['address'];
		$dob = $_POST['dob'];
		$sem = $_POST['sem'];
		$semail = $_POST['semail'];
		$dept = $_POST['dept'];
		$batch = $_POST['batch'];
		if (!empty($rollno)&&!empty($name)&&!empty($gender)&&!empty($addr)&&!empty($dob)&&!empty($sem)&&!empty($semail)&&!empty($dept)&&!empty($batch)){

			$link = mysqli_connect('localhost','root','root','aiktc');
			if(!$link){
				echo '<br>Unable To connect to database.'.mysqli_connect_error();
			}
			$query="Insert into Student values('$rollno','$name','$gender','$addr','$dob','$sem','$semail','$dept','$batch')";
			$result = mysqli_query($link,$query);
			if(!$result){
				echo "<br>".mysqli_error($link);
			}
			else{
				echo '<br><h4>Your Data Inserted</h4>';
			}

			?>
			<table>
			<tr>
			<td>Roll no</td>
			<td><?php echo fix_rollno($rollno);?></td>
			</tr>
			<tr>
			<td>Name</td>
			<td><?php echo fix_name($name);?></td>
			</tr>
			<tr>
			<td>Gender</td>
			<td><?php echo $gender;?></td>
			</tr>
			<tr>
			<td>Address</td>
			<td><?php echo fix_addr($addr);?></td>
			</tr>
			<tr>
			<td>DATE OF BIRTH</td>
			<td><?php echo $dob;?></td>
			</tr>
			<tr>
			<td>semester</td>
			<td><?php echo $sem;?></td>
			</tr>
			<tr>
			<td>SEmail</td>
			<td><?php echo fix_email($semail);?></td>
			</tr>
			<tr>
			<td>department</td>
			<td><?php echo $dept;?></td>
			</tr>
			<tr>
			<td>batch</td>
			<td><?php echo $batch;?></td>
			</tr>
			</table>
	
	
<?php
		}
		else{
			echo "<span>SOMETHING MISSING</spam>";
			header('Refresh:2,url=register.html');
		}
	}
	else{
		header('Refresh:0,url=register.html');
	}

?>

</body>
</html>