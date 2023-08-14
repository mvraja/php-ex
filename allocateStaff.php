<?php
include('config/conn.php');
// Escape user inputs for security
$year = mysqli_real_escape_string($connect, $_REQUEST['year']);
$semester = mysqli_real_escape_string($connect, $_REQUEST['semester']);
$department = mysqli_real_escape_string($connect, $_REQUEST['dept_name']);
$staffId = mysqli_real_escape_string($connect, $_REQUEST['staff_id']);
$subject = mysqli_real_escape_string($connect, $_REQUEST['sub_name']);
$staff = mysqli_real_escape_string($connect, $_REQUEST['staff_name']);
$class = mysqli_real_escape_string($connect, $_REQUEST['class']);
$email = mysqli_real_escape_string($connect, $_REQUEST['email']);
 
// Attempt insert query execution
$sql = "INSERT INTO staff_allocation (id, s_year, semester, s_dept, sub_name, staff_name, s_class, status,staff_id, email) VALUES ('', '$year', '$semester', '$department', '$subject', '$staff', '$class', '1','$staffId','$email')";
if(mysqli_query($connect, $sql)){
    header('Location:./staffAllocation.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}
 
// Close connection
mysqli_close($connect);
?>