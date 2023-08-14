<?php include('config/conn.php');
session_start();

if (isset($_POST["name"])) {

  $name = $_POST['name'];
  $month = $_POST['month'];


  $year = $_POST['year'];
  if ($name == 'all') {
    function fetch_data()

    {
      $localhost = "localhost";
      $username = "root";
      $password = "";
      $dbname = "employee";
      if (isset($_POST["name"])) {

        $name = $_POST['name'];
        $month = $_POST['month'];


        $year = $_POST['year'];
      } else {
        $month = '----';
        $year = '----';
      }
$i = 1;
$output ='';
      $sql5 = "SELECT a.t_id,  a.name, a.day1, a.approved_status,b.t_id,b.name FROM timesheet a INNER JOIN timesheet b ON a.t_id=b.t_id
      WHERE month(a.day1)='$month' AND week(a.day1)=week(now())-1 AND year(a.day1)='$year'  and a.approved_status=1 ";
      $connect = new mysqli($localhost, $username, $password, $dbname);
      $result5 = mysqli_query($connect, $sql5);
      if ($result5 != false) {
     
        while ($row5 = mysqli_fetch_array($result5)) {
          $name =$row5['name'];
          $output .= '<tr>
          <td>'.$name.'</td><td>';
          
         
         
     
      $result3 = mysqli_query($connect, "SELECT DISTINCT(name),day1,approved_status,a4,COUNT(a4) as aa FROM timesheet
      WHERE  month(day1)='$month' AND year(day1)='$year'  AND name='$name'  and approved_status=1 and a4!=0");
      if ($result3 != false) {
        $row3 = mysqli_fetch_assoc($result3); 
          $a = $row3['aa'];
        
      }
     
      $result6 = mysqli_query($connect, "SELECT DISTINCT(name),day1,approved_status,b4,COUNT(b4) as bb FROM timesheet
      WHERE  month(day1)='$month' AND year(day1)='$year' AND name='$name'  and approved_status=1 and b4!=0");
      if ($result6 != false) {
         $row6 = mysqli_fetch_assoc($result6); 
          $b = $row6['bb'];
        }
      
     
      $result7 = mysqli_query($connect, "SELECT DISTINCT(name),day1,approved_status,c4,COUNT(c4) as cc FROM timesheet
      WHERE month(day1)='$month' AND year(day1)='$year'  AND name='$name'  and approved_status=1 and c4!=0");
      if ($result7 != false) {
          $row7 = mysqli_fetch_assoc($result7); 
          $c = $row7['cc'];
        
      }
     
     
      $result8 = mysqli_query($connect, "SELECT DISTINCT(name),day1,approved_status,d4,COUNT(d4) as dd FROM timesheet
      WHERE  month(day1)='$month' AND year(day1)='$year'  AND name='$name'  and approved_status=1 and d4!=0");
      if ($result8 != false) {
        $row8 = mysqli_fetch_assoc($result8); 
          $d = $row8['dd'];
        
      }
     
    
      $result9 = mysqli_query($connect, "SELECT DISTINCT(name),day1,approved_status,e4,COUNT(e4) as ee FROM timesheet
      WHERE month(day1)='$month' AND year(day1)='$year'  AND name='$name'  and approved_status=1 and e4!=0");
      if ($result9 != false) {
        $row9 = mysqli_fetch_assoc($result9); 
          $e = $row9['ee'];
          $r = $a + $b + $c + $d + $e;
          $ab = 20 - $r;}
          if ($r == 20) {
        
      $output .= ' 
      
     
      Full Attendance</td>
      <td >Nil</td>
     </tr>'; 
                            
               $i++;          
                          
           }
           else {
      
            $output .= '
      
           
            '.$r.'</td>
            <td >'.$ab.'</td>
           </tr>'; 
          $i++;
          
          }  }  return $output; }
      
      } 
    if (isset($_POST["generate_pdf"])) {

      require_once('TCPDF-main/tcpdf.php');
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
      $obj_pdf->SetCreator(PDF_CREATOR);
      $obj_pdf->SetTitle("Attendance Report");
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
      $obj_pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
      $obj_pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
      $obj_pdf->SetDefaultMonospacedFont('helvetica');
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
      $obj_pdf->setPrintHeader(false);
      $obj_pdf->setPrintFooter(false);
      $obj_pdf->SetAutoPageBreak(TRUE, 10);
      $obj_pdf->SetFont('helvetica', '', 11);
      $obj_pdf->AddPage();

      $content = '';
      $content .= ' <span align="center"><img src="./assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" alt="" width="80" height="80" >  </span>
         <h4 align="center"><u>ATTENDANCE REPORT</u></h4>
         
        <br /><div></div>
         <table border="1" cellspacing="0" cellpadding="3">  
         <tr>  
        
         <th width="40%" ><b>Employee Name</b></th>
         <th  width="30%"><b>No of days worked</b></th>
         <th  width="30%"><b>No of leave days</b></th>
         
         </tr>  
         ';

      $content .= fetch_data();
      $content .= '</table>';
      $obj_pdf->writeHTML($content);
      $obj_pdf->Output('Attendance Report.pdf', 'I');
    }
  } else {
    function fetch_data()

    {
      $localhost = "localhost";
      $username = "root";
      $password = "";
      $dbname = "employee";
      if (isset($_POST["name"])) {

        $name = $_POST['name'];
        $month = $_POST['month'];


        $year = $_POST['year'];
      } else {
        $month = '----';
        $year = '----';
      }

      $i = 1;

      $output = '';
      $sql5 = "SELECT name,day1,approved_status,a4,COUNT(a4) as aa FROM timesheet
      WHERE month(day1)=month(now()) AND year(day1)=year(now())-1 AND name='$name'  and approved_status=1 and a4!=0";
      $connect = new mysqli($localhost, $username, $password, $dbname);
      $result5 = mysqli_query($connect, $sql5);
      if ($result5 != false) {
        while ($row5 = mysqli_fetch_array($result5)) {
          $a = $row5['aa'];
        }
      }
      $sql6 = "SELECT name,day1,approved_status,b4,COUNT(b4) as bb FROM timesheet
      WHERE month(day1)=month(now()) AND year(day1)=year(now()) AND name='$name'  and approved_status=1 and b4!=0";
      $connect = new mysqli($localhost, $username, $password, $dbname);
      $result6 = mysqli_query($connect, $sql6);
      if ($result6 != false) {
        while ($row6 = mysqli_fetch_array($result6)) {
          $b = $row6['bb'];
        }
      }
      $sql7 = "SELECT name,day1,approved_status,c4,COUNT(c4) as cc FROM timesheet
      WHERE month(day1)=month(now()) AND year(day1)=year(now()) AND name='$name'  and approved_status=1 and c4!=0";
      $connect = new mysqli($localhost, $username, $password, $dbname);
      $result7 = mysqli_query($connect, $sql7);
      if ($result7 != false) {
        while ($row7 = mysqli_fetch_array($result7)) {
          $c = $row7['cc'];
        }
      }
      $sql8 = "SELECT name,day1,approved_status,d4,COUNT(d4) as dd FROM timesheet
      WHERE month(day1)=month(now()) AND year(day1)=year(now()) AND name='$name'  and approved_status=1 and d4!=0";
      $connect = new mysqli($localhost, $username, $password, $dbname);
      $result8 = mysqli_query($connect, $sql8);
      if ($result8 != false) {
        while ($row8 = mysqli_fetch_array($result8)) {
          $d = $row8['dd'];
        }
      }
      $sql9 = "SELECT name,day1,approved_status,e4,COUNT(e4) as ee FROM timesheet
      WHERE month(day1)=month(now()) AND year(day1)=year(now()) AND name='$name'  and approved_status=1 and e4!=0";
      $connect = new mysqli($localhost, $username, $password, $dbname);
      $result9 = mysqli_query($connect, $sql9);
      if ($result9 != false) {
        while ($row9 = mysqli_fetch_array($result9)) {
          $e = $row9['ee'];

          $r = $a + $b + $c + $d + $e;
          $ab = 20 - $r;

          if ($r == 20) {
            $output .= '<tr> 
      <td>' . $row9["name"] . '</td>
      <td>Full Attendance</td>
      <td>Nil</td>
      </tr>';$i++;
            
          } else {
            $output .= '<tr> 
      <td>' . $name . '</td>
      <td>' . $r . '</td>
      <td>' . $ab . '</td>
      </tr>';
            $i++;
           
          }
        } return $output;
      }
    }
    if (isset($_POST["generate_pdf"])) {

      require_once('TCPDF-main/tcpdf.php');
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
      $obj_pdf->SetCreator(PDF_CREATOR);
      $obj_pdf->SetTitle("Attendance Report");
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
      $obj_pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
      $obj_pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
      $obj_pdf->SetDefaultMonospacedFont('helvetica');
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
      $obj_pdf->setPrintHeader(false);
      $obj_pdf->setPrintFooter(false);
      $obj_pdf->SetAutoPageBreak(TRUE, 10);
      $obj_pdf->SetFont('helvetica', '', 11);
      $obj_pdf->AddPage();

      $content = '';
      $content .= ' <span align="center"><img src="./assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" alt="" width="80" height="80" >  </span>
      <h4 align="center"><u>ATTENDANCE REPORT</u></h4>
      
     <br /><div></div>
      <table border="1" cellspacing="0" cellpadding="3">  
      <tr>  
           
      <th width="35%" ><b>Employee Name</b></th>
      <th  width="35%"><b>No of days worked</b></th>
      <th  width="30%"><b>No of leave days</b></th>
      
      </tr>  
      ';

      $content .= fetch_data();
      $content .= '</table>';
      $obj_pdf->writeHTML($content);
      $obj_pdf->Output('Attendance Report.pdf', 'I');
    }
  }
} else {
  $month = '----';
  $year = '----';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Attendance Report</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" rel="icon">
  <link href="assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="assets/vendor/jquery/jquery.js" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">



  <!-- Custom fonts for this template-->
  <link href="./assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="./assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="../img/logo.png" rel="icon">
  <!-- Custom fonts for this template-->
  <link href="./assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
  <script src="https: //unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  </script>

  <style>
    .header {
      color: grey;
      transition: all 0.5s;
      z-index: 997;
      height: 60px;
      box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);
      background-color: #FFFFF7;

      padding-left: 20px;
      /* Toggle Sidebar Button */
      /* Search Bar */
    }
  </style>
</head>

<body>

  <div class="fixed-top">
    <div class="container-fluid  navbar-cg p-2" style="margin-bottom:-15px; background-image: url('./assets/img/240_F_303562524_QfNWIptUFfYdGbR0AdcA0wJ0pZuJfW2w.jpg');  
  background-color: #5C00A3;
  height: 500px; 
  background-position: bottom; 
  background-repeat: no-repeat;
  background-size: cover; color:white; height:100px; position:sticky;">
      <center>
        <h4 style="margin-top:15px;">Jaam Communications LLC</h4>
      </center>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed d-flex align-items-center" style="position: sticky;">


      <div class="d-flex align-items-center justify-content-between">
        <a href="./dashboard.php" class="logo d-flex align-items-center">
          <img src="./assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" alt="" width="100" height="100">

        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div><!-- End Logo -->


      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <li class="nav-item dropdown pe-3">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <span class="d-none d-md-block dropdown-toggle ps-2"><?php
                                                                    echo $_SESSION['uname'];
                                                                    ?>
              </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                <h6><?php
                    echo $_SESSION['uname'];
                    ?></h6>
                <span><?php echo $_SESSION['role']; ?></span>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="./login/logout.php">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </a>
              </li>

            </ul>
            <!-- End Profile Dropdown Items -->
          </li>
          <!-- End Profile Nav -->
        </ul>
      </nav>
      <!-- End Icons Navigation -->

    </header>
    <!-- End Header -->
  </div>

 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar" style="margin-top: 85px; ">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed" href="./dashboard.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->
  <?php
  if ($_SESSION['role'] == 'Admin') {
  ?>




    <li class="nav-item">
      <a class="nav-link collapsed" href="addUser.php">
        <i class="bi bi-person-fill-add"></i>
        <span>Add user</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="updateSalary.php">
        <i class="bi bi-upload"></i>
        <span>Update Salary</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="paySlip.php">
        <i class="bi bi-cash"></i>
        <span>Payslip</span></a>
    </li>


    <li class="nav-item">
      <a class="nav-link " data-bs-target="#reports-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-receipt"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="reports-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="projectReport.php" >
            <i class="bi bi-circle"></i><span>Project Report</span>
          </a>
          <a href="attendanceReport.php" class="active">
            <i class="bi bi-circle"></i><span>Attendance Report</span>
          </a>

          <a href="salaryReport.php">
            <i class="bi bi-circle"></i><span>Salary Report</span>
          </a>

        </li>
      </ul>
    </li>


  <?php
  } else if ($_SESSION['role'] == 'S-Employee') {

  ?>
    <li class="nav-item">
      <a class="nav-link collapsed" href="addProfile.php">
        <i class="bi bi-person-lines-fill"></i>
        <span>Profile info</span></a>
    </li>

     <li class="nav-item">
      <a class="nav-link " href="myProject.php">
        <i class="bi bi-display"></i>
        <span>Projects</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="getPayslip.php">
        <i class="bi bi-cash"></i>
        <span>Payslip</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="timeSheet.php">
        <i class="bi bi-clock-history"></i>
        <span>Timesheet</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#leave-nav" data-bs-toggle="collapse" href="#students-nav">
        <i class=" bi bi-calendar3"></i> <span>Leave details</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="leave-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="requestLeave.php">
            <i class="bi bi-circle"></i><span>Request leave</span>
          </a>
        </li>
        <li>
          <a href="manageLeave.php">
            <i class="bi bi-circle"></i><span>My Requests</span>
          </a>
        </li>


      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#subjects-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-display"></i><span>Projects</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="subjects-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="projectAllocation.php">
            <i class="bi bi-circle"></i><span>Project Allocation</span>
          </a>
        </li>
        <li>
          <a href="manageAllocation.php">
            <i class="bi bi-circle"></i><span>Manage Allocation</span>
          </a>
        </li>
      </ul>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#approvals-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-check2-square"></i><span>Approvals</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="approvals-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="leaveRequest.php">
            <i class="bi bi-circle"></i><span>Employee requests</span>
          </a>
        </li>
        <li>
          <a href="approveTimesheet.php">
            <i class="bi bi-circle"></i> <span>Timesheet</span></a>

        </li>
      </ul>
    <?php
  }
  if ($_SESSION['role'] == 'Employee') {
    ?>
      <!-- End Forms Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="addProfile.php">
        <i class="bi bi-person-lines-fill"></i>
        <span>Profile info</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="myProject.php">
        <i class="bi bi-display"></i>
        <span>Projects</span></a>
    </li>


    <li class="nav-item">
      <a class="nav-link collapsed" href="getPayslip.php">
        <i class="bi bi-cash"></i>
        <span>Payslip</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="timeSheet.php">
        <i class="bi bi-clock-history"></i>
        <span>Timesheet</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#leave-nav" data-bs-toggle="collapse" href="#students-nav">
        <i class=" bi bi-calendar3"></i> <span>Leave details</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="leave-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="requestLeave.php">
            <i class="bi bi-circle"></i><span>Request leave</span>
          </a>
        </li>

        <li>
          <a href="manageLeave.php">
            <i class="bi bi-circle"></i><span>My Requests</span>
          </a>
        </li>
      </ul>
    </li>

    <!-- End Tables Nav -->
</ul>
<?php } ?>
</aside><!-- End Sidebar-->

  <main id="main" class="main">
    <br><br><br><br>

    <div class="pagetitle">
      <h1> Attendance Report</h1>

    </div><!-- End Page Title --><br><br>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card ">
            <div class="card-body mt-3"><br><br>

              <center>
                <form class="form-horizontal" method="post">

                  <div class="form-group">
                    <div class="row">
                      <label class="col-sm-4 control-label"><b>Employee Name</b></label>
                      <div class="col-sm-4">
                        <?php

                        require('config/conn.php');
                        date_default_timezone_set('Asia/Kolkata');
                        $sql = "SELECT DISTINCT(name) FROM employee_attendance   ";


                        $result = mysqli_query($connect, $sql);
                        $n = $result->num_rows;

                        if ($n != 0) {

                          echo '<select name="name" id="name" class="form-select"  required>';
                          echo '<option value="" selected disabled> -- Choose -- </option>
    <option value="all" > -- All Employees -- </option>';


                          $num_results = mysqli_num_rows($result);
                          for ($i = 0; $i < $num_results; $i++) {
                            $row = mysqli_fetch_array($result);
                            $name = $row['name'];
                            echo '<option value="' . $name . '">' . $name . '</option>';
                          }

                          echo '</select>';
                          echo '</label>';
                        }

                        mysqli_close($connect);
                        ?>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <label class="col-sm-4 control-label"><b>Month</b></label>
                      <div class="col-sm-4">
                        <select class="form-select" id="month" name="month" required>
                          <option value="" selected disabled>-- Choose --</option>
                          <option value="01">January</option>
                          <option value="02">February</option>
                          <option value="03">March</option>
                          <option value="04">April</option>
                          <option value="05">May</option>
                          <option value="06">June</option>
                          <option value="07">July</option>
                          <option value="08">August</option>
                          <option value="09">September</option>
                          <option value="10">October</option>
                          <option value="11">November</option>
                          <option value="12">December</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <label class="col-sm-4 control-label"><b>Year</b></label>
                      <div class="col-sm-4">
                        <select class="form-select" id="year" name="year" aria-label="Year" required>
                          <option value="" disabled selected>-- Choose --</option>
                          <?php
                          for ($year = 2010; $year <= 2100; $year++) {

                            echo "<option value='$year'>$year</option>";
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div><br><?php
                            ?>
                  <button type="submit" name="generate_pdf" class="btn btn-primary btn-flat m-b-30 m-t-30">Generate Report</button>
                </form>
              </center><br>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Jaam</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://dce.techology/">DCE TECHNOLOGY</a>
    </div>
  </footer><!-- End Footer -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="./assets/js/ajax.js"></script>

</body>

</html>