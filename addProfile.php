<?php
session_start();

require 'config/conn.php';



?>
  
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add Profile</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script src="./js/country-states.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"></head>

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
      <a class="nav-link " href="addProfile.php">
        <i class="bi bi-person-lines-fill"></i>
        <span>Profile info</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="myProject.php">
        <i class="bi bi-display"></i>
        <span>Projects</span></a>
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
      <a class="nav-link " href="addProfile.php">
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
      <!-- Begin Page Content -->


      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 mt-3" style="margin-left: 10px;"> Profile info</h1>
      </div>

      <div class="container-fluid">

        <div class="row justify-content-center">




          <div class="card" >

            <div class="card-body">
            <h5 class="card-title">Personal Details</h5>
              <!-- Floating Labels Form -->
              <form action="save_profile.php" method="POST" enctype="multipart/form-data" id="addStudentfrm">


              <script>
function getdeptid(val) {
$.ajax({
    type: "POST",
    url: "getDeptid.php",
    data:'id='+val,

   success: function(data){
    $("#dept_id").html(data);
  }
  });
  }

  function selectDepartment(val) {
  $("#search-box").val(val); 
  $("#suggesstion-box").hide();
  }
  </script>

                <div class="row g-3">
                  <div class="col-md-4 col-sm-12">
                    <label for="Image" class="form-label">Photo</label>
                    <input class="form-control" name="userFile" type="file" id="formFile" onchange="preview()" required>
                  </div>
                  <div class="col-md-4 col-sm-12">
                    <img id="frame" src="" class="img-fluid rounded" style="height:150px" />
                  </div>
                </div>
                <script>
                  function preview() {
                    frame.src = URL.createObjectURL(event.target.files[0]);
                  }

                  function clearImage() {
                    document.getElementById('formFile').value = null;
                    frame.src = "";
                  }
                </script>
                <div class="row g-3 mt-2">
                  <div class="col-md-4 col-sm-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="Name" name="fname"  pattern="[A-Za-z \s*]+$" placeholder="Your Name"  onblur="validate('name_result', this.value)"  required>
                      <label for="Name"> First Name*</label>
                      <center><div id='name_result' class  = "text-danger"></div><center>
                      
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingRollno" name="lname"  pattern="[A-Za-z \s*]+$" placeholder="Your ROllNo" required>
                      <label for="floatingRollNo">Last Name*</label>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                    <div class="form-floating">
                      <input type="date" class="form-control" id="floatingEmail" name="dob" placeholder="Email" max="<?php echo date('Y-m-d'); ?>"  required>
                      <label for="floatingEmail">Date of Birth*</label>
                    </div>
                  </div>
                  
                </div>
                <div class="row g-3 mb-2 mt-2">
                  <div class="col-md-4 col-sm-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="s_aadhar" name="pan" placeholder="Your ROllNo" pattern="^[A-Za-z]{5}\d{4}[A-Za-z]{1}$" onblur="validate('aadhar_result', this.value)" required>
                      <label for="floatingRollNo">PAN Number*</label>
                      <center><div id='aadhar_result' class  = "text-danger"></div><center>
                    </div>
                  
                  </div>
                  <div class="col-md-4 col-sm-12">
                    <div class="form-floating"> 
                      <input type="text" class="form-control" id="Momobno" name="mobile" minlength="10" maxlength="10" pattern="[0-9]*" placeholder="Your ROllNo" onblur="validate('momobno_result', this.value)" required>
                      <label for="floatingRollNo">Mobile Number*</label>
                      <center><div id='momobno_result' class  = "text-danger"></div><center>
                    </div>
                  </div>
                  
                  <div class="col-md-4 col-sm-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="mname" name="location" placeholder="Email" pattern="[A-Za-z \s*]+$" onblur="validate('mname_result', this.value)" required>
                      <label for="floatingEmail">Work Location*</label>
                      <center><div id='mname_result' class  = "text-danger"></div><center>
                    </div>
                  </div>
                </div>               
                <div class="row g-3 mb-2 mt-2">
                  <div class="col-md-4 col-sm-12">
                    <div class="form-floating">
                      <div class="form-floating">
                      <?php 
                  require('config/conn.php'); 
                  
                  $sql ="SELECT designation FROM employee_details WHERE email = '".$_SESSION['uname']."'";
                  $result = mysqli_query($connect, $sql);
                  $n = $result->num_rows;
                  if($n != 0){
                  while($row = mysqli_fetch_assoc($result) ){
                    $staff_id= $row['designation'];
                    echo "<input type='text'  id='floatingNation' name ='designation' class='form-control' value='".$row['designation']."' readonly>";
                  }
                  }
                  ?> 
                       
                        <label for="floatingNation">Designation</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                    <div class="form-floating">
                    <?php 
                  require('config/conn.php'); 
                  
                  $sql ="SELECT supervisor FROM employee_details WHERE email = '".$_SESSION['uname']."'";
                  $result = mysqli_query($connect, $sql);
                  $n = $result->num_rows;
                  if($n != 0){
                  while($row = mysqli_fetch_assoc($result) ){
                    $staff_id= $row['supervisor'];
                    echo "<input type='text'  id='floatingNation' name ='supervisor' class='form-control' value='".$row['supervisor']."' readonly>";
                  }
                  }
                  ?> 
                      <label for="floatingRollNo">Supervisor</label>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                    <div class="form-floating">
                    <?php 
                  require('config/conn.php'); 
                  
                  $sql ="SELECT salary FROM employee_details WHERE email = '".$_SESSION['uname']."'";
                  $result = mysqli_query($connect, $sql);
                  $n = $result->num_rows;
                  if($n != 0){
                  while($row = mysqli_fetch_assoc($result) ){
                    $staff_id= $row['salary'];
                    echo "<input type='text'  id='floatingNation' name ='salary' class='form-control' value='".$row['salary']."' readonly>";
                  }
                  }
                  ?> 
                      <label for="floatingRollNo">Salary</label>
                    </div>
                  </div>
                </div>
                <div class="row g-3 mb-2 mt-2">
                <div class="col-md-4 col-sm-12">
                    <div class="form-floating">
                      <input type=""  class="form-control" id="Famobno" name="addr1" placeholder="Your Name" onblur="validate('famobno_result', this.value)"  required>
                      <label for="Name">Address Line 1*</label>
                      <center><div id='famobno_result' class  = "text-danger"></div><center>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                    <div class="form-floating">
                      <input type=""  class="form-control" id="Famobno" name="addr2" placeholder="Your Name" onblur="validate('famobno_result', this.value)"  required>
                      <label for="Name">Address Line 2</label>
                      <center><div id='famobno_result' class  = "text-danger"></div><center>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                    <div class="form-floating">
                      <input type="" class="form-control" id="feesamount" name="city" placeholder="Your ROllNo"  onblur="validate('fees_result', this.value)" required>
                      <label for="floatingRollNo">City*</label>
                      <center><div id='fees_result' class  = "text-danger"></div><center>
                    </div>
                  </div>
                </div>
                <div class="row g-3 mb-2 mt-2">
                  
                <div class="col-md-4 col-sm-12">
                    <div class="form-floating">
                      <select class="form-select" id="country" name="country" aria-label="Gender" required>
                       
                      </select>
                      <label for="floatingSelect">Country*</label>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                    <div class="form-floating">
                      <select class="form-select" id="state" name="state" aria-label="Gender" required>
                     
                      </select>
                      <label for="floatingSelect">State*</label>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                    <div class="form-floating"> 
                      <input type="text" class="form-control" id="Momobno" name="zipcode"  maxlength="6" pattern="[0-9]*" placeholder="Your ROllNo" onblur="validate('momobno_result', this.value)" required>
                      <label for="floatingRollNo">Zip Code*</label>
                      <center><div id='momobno_result' class  = "text-danger"></div><center>
                    </div>
                  </div>
                </div>
                <?php 
                  require('config/conn.php'); 
                  
                  $sql ="SELECT e_id FROM employee_details WHERE email = '".$_SESSION['uname']."'";
                  $result = mysqli_query($connect, $sql);
                  $n = $result->num_rows;
                  if($n != 0){
                  while($row = mysqli_fetch_assoc($result) ){
                    $staff_id= $row['e_id'];
                    echo "<input type='hidden'  id='floatingNation' name ='e_id' class='form-control' value=".$row['e_id']." readonly>";
                  }
                  }
                  ?> 
                  <?php 
                  require('config/conn.php'); 
                  
                  $sql ="SELECT user_id FROM users WHERE username = '".$_SESSION['uname']."'";
                  $result = mysqli_query($connect, $sql);
                  if ($result !== false) {  
                  $row = $result->fetch_array();
                 
                 
                    echo "<input type='hidden'  id='floatingNation' name ='user_id' class='form-control' value=".$row['user_id']." readonly>";
                  }
                  ?> 
                <script>
// user country code for selected option
var user_country_code = "IN";

(() => {
    // script https://www.html-code-generator.com/html/drop-down/state-name

    // Get the country name and state name from the imported script.
    const country_array = country_and_states.country;
    const states_array = country_and_states.states;

    const id_state_option = document.getElementById("state");
    const id_country_option = document.getElementById("country");

    const createCountryNamesDropdown = () => {
        let option =  '';
        option += '<option value="">Country</option>';

        for(let country_code in country_array){
            // set selected option user country
            let selected = (country_code == user_country_code) ? ' selected' : '';
            option += '<option value="'+country_code+'"'+selected+'>'+country_array[country_code]+'</option>';
        }
        id_country_option.innerHTML = option;
    };

    const createStatesNamesDropdown = () => {
        let selected_country_code = id_country_option.value;
        // get state names
        let state_names = states_array[selected_country_code];

        // if invalid country code
        if(!state_names){
            id_state_option.innerHTML = '<option>----</option>';
            return;
        }
        let option = '';
        option += '<select id="state">';
        option += '<option>----</option>';
        for (let i = 0; i < state_names.length; i++) {
            option += '<option value="'+state_names[i].code+'">'+state_names[i].name+'</option>';
        }
        option += '</select>';
        id_state_option.innerHTML = option;
    };

    // country select change event
    id_country_option.addEventListener('change', createStatesNamesDropdown);

    createCountryNamesDropdown();
    createStatesNamesDropdown();
})();

</script>

      
      <br>
         
                
                <center><input type="submit" style="background-color: #333d97;" #333d97; class="btn btn-primary" id="success" name="submit"   value="Update"></button>
                 
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
                </script><br><br>
              </form> 

         
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
    <!-- Footer -->
    <footer id="footer" class="footer">
  <div class="copyright">
    &copy; Copyright <strong><span>Jaam</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    Designed by <a href="https://dcc.technology/">DCE TECHNOLOGY</a>
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