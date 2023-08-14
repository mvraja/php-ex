<?php 
include('conn.php');
$user = $_POST['username'];
$pass = $_POST['password'];
$role = $_POST['role'];
$job = $_POST['designation'];
$pay = $_POST['salary'];
$head = $_POST['supervisor'];
$sql = "INSERT INTO employee_details(email, designation, salary, supervisor,status,role)
VALUES ('$user','$job', '$pay', '$head',1,'$role')";
if(mysqli_query($connect,$sql))
{
    $paymentsql = "INSERT INTO `users`(`username`, `password`, `role`) VALUES ('$user','$pass','$role')";
    $paymentResult = mysqli_query($connect,$paymentsql);

     // If successful, display a success message using JavaScript
     echo "<script>alert('Record inserted successfully');</script>";

}
else
{
    echo "<script>alert('Error inserting record: " . mysqli_error($connect) . "');</script>";
//echo "fail";
}