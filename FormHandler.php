<?php
	
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['message'];

		$to='jeremias.william@gmail.com';
		$subject='Freelancer Website';
		$message="Name: ".$name."\n"."Sends the Following: "."\n\n".$message;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers )){
			echo "<h1>Message send successfully!, Thank you"."  ".$name.", I will contact you soon... </h1>"
		}

		else{
			echo "Something went unexpected";
		}
	}