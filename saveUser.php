<?php
require './config/conn.php';
error_reporting(0);
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
$job = $_POST['designation'];
$salary = $_POST['salary'];
$supervisor = $_POST['supervisor'];
     
  $insertQ = "INSERT INTO employee_details (email, designation, salary, supervisor,status,role)
  VALUES ('$username','$job', '$salary', '$supervisor',1,'$role')";
  $insertR = mysqli_query($connect,$insertQ);
  
  if ($insertR) {
    
	
		$paymentsql = "INSERT INTO `users`(`username`, `password`, `role`) VALUES ('$username','$password','$role')";
    	$paymentResult = mysqli_query($connect,$paymentsql);
  
         // If successful, display a success message using JavaScript
         echo "<script>alert('Record inserted successfully');</script>";
    echo "<script>window.location.href='addUser.php'</script>";
	}

	


   
   else {
    // If not successful, display an error message using JavaScript
    echo "<script>alert('Error inserting record: " . mysqli_error($con) . "');</script>";
  }
?>