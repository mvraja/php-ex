


<?php 
include('config/conn.php');
$ltype = $_POST['ltype'];
$fdate = $_POST['frdate'];
$tdate = $_POST['todate'];
$ename = $_POST['employee_name'];
$reason = $_POST['reason'];

$sql = "INSERT INTO leave_request (leave_type,name,from_date,to_date,reason)
VALUES ('$ltype','$ename','$fdate','$tdate','$reason')";
 if ($connect->query($sql) === TRUE)
{    
     echo "Leave request submitted!";
}
else
{
    echo "<script>alert('Error inserting record: " . mysqli_error($connect) . "');</script>";
//echo "fail";
}