<?php
	function fix_name($name){
		$name = trim($name);
		$name = ucfirst($name);
		$name = addslashes($name);
		return $name;
	}
	function fix_email($email){
		$email = trim($email);
		$email = strtolower($email);
		$email = addslashes($email);
		return $email;
	}
	function fix_addr($addr){
		$addr = trim($addr);
		$addr = strtoupper($addr);
		$addr = addslashes($addr);
		return $addr;
	}
	function fix_rollno($rollno){
		$rollno = trim($rollno);
		$rollno = strtolower($rollno);
		$rollno = addslashes($rollno);
		return $rollno;
	}
?>