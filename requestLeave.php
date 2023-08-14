<?php
session_start();
?>

  
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add user</title>
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
    
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
<script src ="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>  
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href=
"//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
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

    input[type=file]::file-selector-button {
      margin-right: 20px;
      border: none;
      background: #999;
      padding: 8px 16px;
      border-radius: 10px;
      color: #fff;
      cursor: pointer;
      transition: background .2s ease-in-out;
    }

    input[type=file]::file-selector-button:hover {
      background: #d9534f;
    }

    .drop-container {
      position: relative;
      display: flex;
      gap: 10px;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 60px;
      padding: 2px;
      border-radius: 10px;
      border: 2px solid #d6d6d6;
      color: #444;
      cursor: pointer;
      transition: background .2s ease-in-out, border .2s ease-in-out;
    }
  </style>
</head>
<script>    
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", '<?php echo $_SERVER['PHP_SELF'];?>');
    }
</script> 
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
    <a class="nav-link " href="./dashboard.php">
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
      <a class="nav-link collapsed" data-bs-target="#reports-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-receipt"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="reports-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="projectReport.php" class="active">
            <i class="bi bi-circle"></i><span>Project Report</span>
          </a>
          <a href="attendanceReport.php">
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
  
  <div class="">

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                      <h1 class="h4 mb-0 text-gray-800 mt-3" style="margin-left: 10px;">Subject Allocation</h1>                        
                  </div><br>
                  <div class="container-fluid">
                  <div class="row justify-content-center">
<div class="card">
<div class="container p-4" style="overflow:auto">
              
                 
                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4" style ="#333d97; font-family:'Times New Roman', Times, serif;"><b>Request Leave</b></h5>
                </div>  
                <br><br>
                 


                  <div id="container">

        <form  method="post" id="leaveForm" onsubmit="sendEmail(event)" >
              <div class="row" >
                  <div class="col-md-6 col-sm-12">
                    <div class="form-floating">
                    <select class="form-select" id="ltype" name="ltype" aria-label="Gender" required>
                        <option value="" disabled selected>----</option>
                        <option value="SL">Sick Leave</option>
                        <option value="AL">Annual Leave</option>                        
                      </select>
                      <label for="floatingRollNo">Leave Type</label>
                    
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <div class="form-floating"> 
                      <input type="date" class="form-control" id="frdate" name="frdate"  required>
                      <label for="floatingRollNo">Leave From</label>
                    
                    </div>
                  </div>
              </div>
              <div class="row g-3 mb-2 mt-2" >
                <div class="col-md-6 col-sm-12">
                    <div class="form-floating">
                    <input type="date" class="form-control" id="todate" name="todate"  required>
                      <label for="floatingRollNo">Leave To</label>
                    </div>
                  </div>
    
                
                  <div class="col-md-6 col-sm-12">
                    <div class="form-floating">
                      <div class="form-floating">
                        <textarea  class="form-control" id="reason"  name="reason" required></textarea>
                        <label for="floatingNation">Reason</label>
                      </div>
                    </div>
                  </div>
                  
                  <?php 
           require('config/conn.php');
          
           $sql1 ="SELECT * FROM employee_details WHERE email='".$_SESSION['uname']."'";
           $result1 = mysqli_query($connect, $sql1);
          
           if($result1 !== false){
            $row1 = mysqli_fetch_assoc($result1);
            $name = $row1['name'];
            $head = $row1['supervisor'];
           }

           $sql2 ="SELECT * FROM users WHERE name='$head'";
           $result2 = mysqli_query($connect, $sql2);
          
           if($result2 !== false){
            $row2 = mysqli_fetch_assoc($result2);
            $user = $row2['username'];
            echo '<input type="hidden" name="head" id="head" class="form-control" value="'.$row2['username'].'" " readonly>';
           }
           ?>
                    <?php 
                  require('config/conn.php'); 
                  
                  $sql ="SELECT  * FROM employee_details WHERE status=1 and email ='".$_SESSION['uname']."' ";
    $result = mysqli_query($connect,$sql);
   
    $n = $result->num_rows; 
     
    if($n != 0){
    $row = mysqli_fetch_assoc($result);
   


echo'
<div class="col-md-12 col-lg-4 col-sm-12 col-xl-4">
<input type="hidden" name="employee_name" id="name" class="form-control" value="'.$row['name'].'" " readonly></div>';
    }
                  ?> 
                <br><br><br><br> <br><br>
                <center><input type="submit" style="background-color: #333d97;" #333d97; class="btn btn-primary" id="success" name="submit"   value="Submit"></button>
                 
                  <button type="reset" class="btn btn-secondary" style="margin-left:10px;">Clear Entry</button>
                </center>
               <br><br>
              </form> 
   
 
        <br><br>
        

        <script src="https://smtpjs.com/v3/smtp.js">
</script>
<script>
   
    function sendEmail(e){
        e.preventDefault();
        Email.send({
            
            Host : "smtp.elasticemail.com",
            Username : "bhavanivelan875@gmail.com",
            Password : "8F26DAB794F9F1445D6D2238F362C3444E63",
            To : document.getElementById('head').value,
            From : "bhavanivelan875@gmail.com",
            Subject :  'Leave request' ,
            Body :  document.getElementById('name').value + ' requested a ' + document.getElementById('ltype').value + ' from ' + document.getElementById('frdate').value + ' to  ' + document.getElementById('todate').value + ' for the reason:  ' + document.getElementById('reason').value
            
        }).then(
          message => alert(message)
        );   

      return true;
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script> 
jQuery(document).ready(function ($) {

$("#leaveForm").submit(function (event) {
            event.preventDefault();
            //validation for login form
    $("#progress").html('Inserting <i class="fa fa-spinner fa-spin" aria-hidden="true"></i></span>');

        var formData = new FormData($(this)[0]);
        $.ajax({
            url: 'addLeaveRequest.php',
            type: 'POST',
            data: formData,
            async: true,
            cache: false,
            contentType: false,
            processData: false,
            
            success: function (returndata) 
            {
                //show return answer
                alert(returndata);
            },
            error: function(){
            alert("error in ajax form submission");
                                }
    });
    return false;
});
});
                                </script>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
    <!-- Footer -->
    <footer class="sticky-footer bg-white">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright &copy; KRP College </span><br>
          <span>Designed By <a href="dcetechnology.in" target="_blank">DCETechnology</a></span>
        </div>
      </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    


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

<!-- Bootstrap core JavaScript-->
<script src="./assets/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="./assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="./assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="./assets/js/demo/chart-area-demo.js"></script>
    <script src="./assets/js/demo/chart-pie-demo.js"></script>
    <!-- Page level plugins -->
    <script src="./assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="./assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="./assets/js/demo/datatables-demo.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./assets/js/ajax.js"></script>
</body>

</html>