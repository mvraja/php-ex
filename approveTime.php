<?php
require('config/conn.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if($_POST['approve']){
  $head = $_POST['head'];
  if($_POST['all']){
    $sql1 ="SELECT  * FROM employee_details WHERE supervisor='$head' ";
    $result1 = mysqli_query($connect,$sql1);
   
    $n1 = $result1->num_rows; 
     
    if($n1 != 0){
    while($row1=mysqli_fetch_assoc($result1)){
      $ename= $row1['name'];
  
    $sql =$connect->query( "UPDATE leave_request SET approved_status = 1 WHERE name='$ename'"); }}
    echo "<script>alert('Leave request Approved!');</script>";
    echo "<script>window.location.href='leaveRequest.php'</script>";
  }else{
$hr4Arr = $_POST["hr4"];
    
for ($i = 0; $i < count($hr4Arr); $i++) {

    if(($hr4Arr[$i] != "")){
    
         /* not allowing empty values and the row which has been removed. */
         $sql =$connect->query( "UPDATE  leave_request SET approved_status = 1 WHERE sl_id ='$hr4Arr[$i]'"); 
         echo "<script>alert('Leave request Approved!');</script>";
        echo "<script>window.location.href='leaveRequest.php'</script>";
    }

}}}
else if($_POST['reject']){
  $head = $_POST['head'];
  if($_POST['all']){
    $sql1 ="SELECT  * FROM employee_details WHERE supervisor='$head' ";
    $result1 = mysqli_query($connect,$sql1);
   
    $n1 = $result1->num_rows; 
     
    if($n1 != 0){
    while($row1=mysqli_fetch_assoc($result1)){
      $ename= $row1['name'];
    $sql =$connect->query( "UPDATE leave_request SET approved_status = 2 WHERE name='$ename'");
    echo "<script>alert('Leave request Rejected!');</script>";
    echo "<script>window.location.href='leaveRequest.php'</script>";
    }}
  }
  else{
    $hr4Arr = $_POST["hr4"];
    
for ($i = 0; $i < count($hr4Arr); $i++) {

    if(($hr4Arr[$i] != "")){
      
         /* not allowing empty values and the row which has been removed. */
         $sql =$connect->query( "UPDATE  leave_request SET approved_status = 2 WHERE sl_id ='$hr4Arr[$i]'"); 
        echo "<script>alert('Leave Request Rejected!');</script>";
        echo "<script>window.location.href='leaveRequest.php'</script>";
       
     
    }

}}}

?>