
<?php
require('config/conn.php');
$nameArr = $_POST["name"];
$superArr = $_POST["head"];
$jobArr = $_POST["job"];
$payArr = $_POST["pay"];
$date = $_POST["date1"];

/* Check connection */
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
for ($i = 0; $i < count($nameArr); $i++) {

    if(($nameArr[$i] != "")){   /* not allowing empty values and the row which has been removed. */
        $sql = "INSERT INTO pay_slip (ps_id, name,supervisor, salary,status, designation,date1) 
        VALUES ('','$nameArr[$i]', '$superArr[$i]', '$payArr[$i]','1','$jobArr[$i]','$date')";
    if (!mysqli_query($connect,$sql))
    {
        die('Error: ' . mysqli_error($connect));
    }
    }
}
echo "<script>alert('PaySlip created successfully!');</script>";
header('Location:./paySlip.php');
mysqli_close($connect);
?>


