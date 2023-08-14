<?php
session_start();
?>
<?php
require 'config/conn.php';

if(isset($_POST['submit']))
{
    $fileName = $_FILES['fileName']['name'];
    $tempName = $_FILES['fileName']['tmp_name'];
    $date = $_POST['date'];
    $text = $_POST['text'];

    $name1="";
    $name1= $date;
    $info = pathinfo($_FILES['fileName']['name']);
    $ext1 = $info['extension']; // get the extension of the file
    //echo $ext1;
    if(strcmp($ext1,'psd')==0)
    {
      echo "<script>window.alert('File Format Error, Use only JPG or PNG formats')</script>";
    }
  
   else{

   
      
    
    if(isset($fileName))
    {
        if(!empty($fileName))
        {
            $location = "circulars/$name1 _ ";
            if(move_uploaded_file($tempName, $location.$fileName))
            {
              echo "<script>alert('File uploaded successfully');</script>";
            }
        }
    }


$path = "$name1 _ $fileName";
$insertQ = "INSERT INTO circulars (date1, image, text)
VALUES ('$date','$path', '$text')";
$insertR = mysqli_query($connect,$insertQ);

if ($insertR) {
  echo "<script>alert('Circular created!');</script>";
}

}
}

?>
  
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KRP - DASHBOARD</title>
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
    <div class="container-fluid  navbar-cg p-2" style="margin-bottom:-15px; background-color:#FF0000; color:white; height:100px; position:sticky;">
      <center>
        <h4 style="margin-top:5px;">KRP COLLEGE OF ARTS AND SCIENCE</h4>
        <h5 style="margin-top: -15px; margin-top:1px;">Kakkivadanpatti, Sivakasi.</h5>
      </center>
    </div>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed d-flex align-items-center" style="position: sticky;">

      <div class="d-flex align-items-center justify-content-between">
        <a href="./dashboard.php" class="logo d-flex align-items-center">
          <img src="./assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" alt="" width="60" height="60">
          <span class="d-none d-lg-block" style="color:grey;">KRP</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div><!-- End Logo -->

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <li class="nav-item dropdown pe-3">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <span class="d-none d-md-block dropdown-toggle ps-2"><?php
                                                                    echo $_SESSION['uname']
                                                                    ?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                <h6><?php
                    echo $_SESSION['uname']
                    ?></h6>
                <span><?php echo $_SESSION['role'] ?></span>
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
  <aside id="sidebar" class="sidebar" style="margin-top: 85px;">

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
        <!-- <li class="nav-item">
          <a class="nav-link collapsed" href="markAttendance.php">
            <i class="bi bi-file-earmark-text"></i>
            <span>Mark Attendance</span></a>
        </li>

         -->

        <li class="nav-item">
          <a class="nav-link " href="circular.php">
            <i class='bi bi-file-text'></i>
            <span>Circulars</span></a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#departments-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-folder-fill"></i><span>Departments</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="departments-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="#" data-toggle="modal" data-target="#modalForAddDepartment">
                <i class="bi bi-circle"></i><span>Add Department</span>
              </a>

              <a href="manageDepartment.php">
                <i class="bi bi-circle"></i><span>Manage Departments</span>
              </a>
            </li>
          </ul>
        </li> -->

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#subjects-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-book"></i><span>Subjects</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="subjects-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="#" data-toggle="modal" data-target="#modalForAddSubject">
                <i class="bi bi-circle"></i><span>Add Subject</span>
              </a>
            </li>
            <li>
              <a href="manageSubject.php">
                <i class="bi bi-circle"></i><span>Manage Subjects</span>
              </a>
            <li>
              <a href="projectAllocation.php">
                <i class="bi bi-circle"></i><span>Subject Allocation</span>
              </a>
            </li>
            <li>
              <a href="manageAllocation.php">
                <i class="bi bi-circle"></i><span>Manage Allocation</span>
              </a>
            </li>
          </ul>
        </li> 



        <li class="nav-item"> 
          <a class="nav-link collapsed" data-bs-target="#staff-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-person-fill"></i> <span>Staff</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="staff-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
             <li>
              <a href="#" data-toggle="modal" data-target="#modalForAddStaff">
                <i class="bi bi-circle"></i><span>Add Staff</span>
              </a>
            </li> 
                       <li>
              <a href="manageStaff.php">
                <i class="bi bi-circle"></i><span>Staff Profile</span>
              </a>
      </li>
          
        <li>
          <a  href="markAttendance.php">
          <i class="bi bi-circle"></i>
            <span>Mark Attendance</span></a>
        </li>
            <li>
              <a href="viewStaffAttendance.php">
                <i class="bi bi-circle"></i><span>View Attendance</span>
              </a>
      </li>
      <li class="nav-item">
          <a class="nav-link collapsed" href="leaveRequest.php">
            <i class="bi bi-list-task"></i>
            <span>Leave Requests</span></a>
        </li>
      <li>
              <a href="syllabusCompletion.php">
                <i class="bi bi-circle"></i><span>Completed Syllabus</span>
              </a>
            </li>
            <!-- <li>
              <a href="manageStaffTimetable.php">
                <i class="bi bi-circle"></i><span>Staff Timetable</span>
              </a>
            </li> -->
            <!-- <li>
              <a href="staffAllocation.php">
                <i class="bi bi-circle"></i><span>Staff Allocation</span>
              </a>
            </li>
            <li>
              <a href="manageStaffAllocation.php">
                <i class="bi bi-circle"></i><span>Manage Allocation</span>
              </a>
            </li> -->
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#students-nav" data-bs-toggle="collapse" href="#students-nav">
            <i class="bi bi-people"></i><span>Students</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="students-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
             <li>
              <a href="add_students.php">
                <i class="bi bi-circle"></i><span>Add Student</span>
              </a>
            </li> 
            <li>
              <a href="view_students.php">
                <i class="bi bi-circle"></i><span>Student Profile</span>
              </a>
            </li>
            <li>
              <a href="studentInternalMarks.php">
              <i class="bi bi-circle"></i><span>Internal Marks</span>
              </a>
            </li>
            <li>
              <a href="studentExternalMarks.php">
              <i class="bi bi-circle"></i><span>External Marks</span>
              </a>
            </li>
            <li>
              <a href="viewStudentAttendance.php">
              <i class="bi bi-circle"></i><span>Student Attendance</span>
              </a>
            </li>
          </ul>
        </li>





        <!-- End Components Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-currency-rupee"></i><span>Fees</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="college_fee.php">
                <i class="bi bi-circle"></i><span>College Fees</span>
              </a>
              <a href="transport_fee.php">
                <i class="bi bi-circle"></i><span>Transport Fees</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#reports-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-receipt"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="reports-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="collegeFeeReport.php">
                <i class="bi bi-circle"></i><span>College Fee Report</span>
              </a>
              <a href="transportFeeReport.php">
                <i class="bi bi-circle"></i><span>Transport Fee Report</span>
              </a>
          
              <a href="expensesReport.php">
                <i class="bi bi-circle"></i><span>Expenses Report</span>
              </a>
            
            </li>
          </ul></li>



        
        
<!-- 
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#transport-nav" data-bs-toggle="collapse" href="#students-nav">
            <i class="bi bi-bus-front"></i> <span>Transport</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="transport-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="#" data-toggle="modal" data-target="#modalForAddBus">
                <i class="bi bi-circle"></i><span>Add Bus details</span>
              </a>
            </li>
            <li>
              <a href="manageBus.php">
                <i class="bi bi-circle"></i><span>Manage details</span>
              </a>
            </li> 
          </ul>
        </li> -->

      <?php
      } else if ($_SESSION['role'] == 'Staff') {
      ?>




        <li class="nav-item">
          <a class="nav-link collapsed" href="viewTimetable.php">
            <i class="bi bi-table"></i>
            <span>Timetable</span></a>
        </li>


        <li class="nav-item">
          <a class="nav-link collapsed" href="internalMarks.php">
            <i class="bi bi-award-fill"></i>
            <span>Internal Marks</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="externalMarks.php">
            <i class="bi bi-award-fill"></i>
            <span>External Marks</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#leave-nav" data-bs-toggle="collapse" href="#students-nav">
            <i class="bi-calendar3"></i> <span>Leave details</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="leave-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="#" data-toggle="modal" data-target="#modalForRequestLeave">
                <i class="bi bi-circle"></i><span>Request leave</span>
              </a>
            </li>
            <li>
              <a href="manageLeave.php">
                <i class="bi bi-circle"></i><span>Manage details</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#syllabus-nav" data-bs-toggle="collapse" href="#students-nav">
            <i class="bi bi-book"></i> <span>Syllabus Completion</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="syllabus-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="#" data-toggle="modal" data-target="#modalForCompletedSyllabus">
                <i class="bi bi-circle"></i><span>Note Syllabus</span>
              </a>
            </li>
            <li>
              <a href="syllabusCompletion.php">
                <i class="bi bi-circle"></i><span>Completed Syllabus</span>
              </a>
            </li>
          </ul>
        </li>

      <?php
      }
      if ($_SESSION['role'] == 'Admin' || $_SESSION['role'] == 'Accountant') {
      ?>
        <!-- End Forms Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-layout-text-window-reverse"></i><span>Accounts</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="expenses.php">
                <i class="bi bi-circle"></i><span>Expenses</span>
              </a>
            </li>
          </ul>
        </li><!-- End Tables Nav -->
    </ul>
  <?php } ?>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    <br><br><br><br>

    <div class="pagetitle">
      <!-- Begin Page Content -->


      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 mt-3" style="margin-left: 10px;">Circulars</h1>
      </div>

      <div class="container-fluid">

        <div class="row justify-content-center">




          <div class="card" style="width:1200px; height:450px;">

            <div class="card-body">
              <br><br>
              <form action="circular.php" method="post" enctype="multipart/form-data" id="delayedForm">
                <div class='col-md-12'>
                  <div class="row">
                    <div class="col-md-12 col-lg-4 col-sm-12 col-xl-6">
                      <div class="form-group">
                        <label for="formGroupExampleInput" style="color:black;">Choose date</label>
                        <input type="date" class="form-control" id="date" name="date">
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-sm-12 col-xl-6">
                      <div class="form-group">
                        <label for="exampleFormControlFile1" style="color:black;">Choose image</label><br>
                        <label for="images" class=""></label>
                        <input type="file" name="fileName" id="images">
                      </div>
                    </div>
                  </div>
                 
                  <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1" style="color:black;">Enter the circular news</label>
                        <textarea class="form-control" id="text" name="text" rows="3"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <br><br>
                <center><input type="submit" class="btn btn-danger" id="success" name="submit"  onclick="showSuccessAlert()" value="Upload"></button>
                  <div class="btn">
                  </div>
                  <button type="reset" class="btn btn-secondary" style="margin-left:10px;">Clear Entry</button>
                </center>
                <script>
                  function showSuccessAlert() {
                    Swal.fire(
                      'Success',
                      'Circular Created!',
                      'success'
                    )
                  }
                </script>
              </form> 

         
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
    
<?php include('includes/modalSubject.php'); ?>
<?php include('includes/modalStaff.php'); ?>
<?php include('includes/modalBus.php'); ?>
<?php include('includes/modalLeave.php'); ?>
<?php include('includes/modalSyllabus.php'); ?>
<?php include('includes/modalLeave.php'); ?>
<?php include('includes/modalEditDepartment.php'); ?>
<?php include('includes/modalDepartment.php'); ?>

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