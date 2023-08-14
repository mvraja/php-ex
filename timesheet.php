<?php include('config/conn.php'); ?>
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Timesheet</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" rel="icon">
  <link href="assets/img/jaamlogo.8c81e89f.064ce15e9051e517f9f9c40f81ec697b.svg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>



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
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script> -->

  <!-- Template Main CSS File -->
  <link href="./assets/css/style.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="./assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="./assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="../img/logo.png" rel="icon">
  <!-- Custom fonts for this template-->
  <link href="./assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">



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

<body>
  <script>
    if (typeof window.history.pushState == 'function') {
      window.history.pushState({}, "Hide", '<?php echo $_SERVER['PHP_SELF']; ?>');
    }
  </script>

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
        <a class="nav-link  " href="./dashboard.php">
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
          <a class="nav-link" href="timeSheet.php">
            <i class="bi bi-clock-history"></i>
            <span>Timesheet</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " data-bs-target="#leave-nav" data-bs-toggle="collapse" href="#students-nav">
            <i class=" bi bi-calendar3"></i> <span>Leave details</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="leave-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="requestLeave.php" class="active">
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
          <a class="nav-link " href="timeSheet.php">
            <i class="bi bi-clock-history"></i>
            <span>Timesheet</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " data-bs-target="#leave-nav" data-bs-toggle="collapse" href="#students-nav">
            <i class=" bi bi-calendar3"></i> <span>Leave details</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="leave-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="requestLeave.php" class="active">
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
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 mt-3">Timesheet</h1>
      </div><br>


      <!-- <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script> -->
      </head>

      <body>
        <!-- <input type = "text" id = "datepicker-5" class="form-control" name="datey"> -->


        <!-- Form code begins -->

        <form action="timesheet.php" method="GET">
          <script>
            $(function() {
              $("#datepicker").datepicker({
                beforeShowDay: function(date) {
                  var dayOfWeek = date.getDay();
                  // 0 : Sunday, 1 : Monday, ...
                  if (dayOfWeek != 0) return [false];
                  else return [true];
                }
              });
            });
          </script>

          <!-- Date input -->
          <div class="form-row">
            <div class="col-md-12 col-lg-6 col-sm-12 col-xl-6">

              <div class="form-group">
                <input type="text" id="datepicker" class="form-control" name="datey" placeholder="-- Choose date --">

              </div>
            </div>

            <div class="col-md-12 col-lg-6 col-sm-12 col-xl-6">
              <div class="form-group"><!-- Submit button -->
                <button class="btn btn-primary " name="submit" type="submit">Get Timesheet</button>
              </div>
            </div>
          </div>
        </form>
        <!-- Form code ends -->


    </div>

    <div class="card"><br><br>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start m-3">
        <b>Status:</b>
        <div id="show" style="display:none"><button class="btn btn-danger btm-sm" type="button">Cancelled</button></div>
        <div id="view"><?php
                        include('config/conn.php');
                        $sql7 = "SELECT * FROM employee_details WHERE email='" . $_SESSION['uname'] . "'";
                        $result7 = mysqli_query($connect, $sql7);

                        if ($result7) {
                          while ($row7 = mysqli_fetch_array($result7)) {
                            $name = $row7['name'];
                          }
                        }
                        $sql = "SELECT * FROM `timesheet` WHERE WEEK(day1) = WEEK(NOW()) -1 AND name= '$name' ORDER BY t_id DESC LIMIT 1 ";
                        $result = mysqli_query($connect, $sql);
                        $n = $result->num_rows;
                        if ($n !== 0) {

                          $row = mysqli_fetch_assoc($result);
                          if ($row['status'] == 1) {
                            echo '<span class="badge badge-primary">Saved</span>';
                          } else if ($row['status'] == 2) {
                            echo '<span class="badge badge-success">Submitted</span>';
                          } else {
                            echo '<span class="badge badge-danger">Canceled</span>';
                          }
                        } else {
                          echo '';
                        }

                        ?></div>
      </div>
      <script src="https://smtpjs.com/v3/smtp.js">
      </script>
      <script>
        function sendEmail(e) {
          e.preventDefault();


          Email.send({

            Host: "smtp.elasticemail.com",
            Username: "bhavanivelan875@gmail.com",
            Password: "8F26DAB794F9F1445D6D2238F362C3444E63",
            To: document.getElementById('head').value,
            From: "bhavanivelan875@gmail.com",
            Subject: "Timesheet Submission",
            Body: document.getElementById('name').value + ' submitted a timesheet for the duration of ' + document.getElementById('dae1').value + ' to ' + document.getElementById('ate1').value
          }).then(
            message => alert(message)
          );

          return true;
        }
      </script>

      <div class="container p-4" style="overflow:auto">



        <br>
        <form name="SumForm" id="timesheet" onsubmit="sendEmail(event)">


          <div id="container">
            <section id="mainsection">
              <div class='col-md-12'>
                <div class="row">
                  <div class="col-lg-12 col-12">
                    <table class="table table-bordered table-hover" id="emptbl">
                      <thead>
                        <tr>


                          <th class="text-center" style="width:100px;">
                            Project<span class="str">
                              <font color="red">*</font>
                            </span>
                          </th><?php
                                if (isset($_GET['datey'])) {


                                  $date = $_GET['datey'];
                                } else {
                                  $date = '----';
                                }


                                $datex = strtotime($date);
                                $datea = strtotime("-6 day", $datex);
                                $date1 = date('M d ', $datea);
                                $z = strtotime($date1);
                                $e =  date("Y-m-d ", $z);
                                $dateb = strtotime("-5 day", $datex);
                                $date2 = date('M d', $dateb);
                                $x = strtotime($date2);
                                $f =  date("Y-m-d ", $x);
                                $datec = strtotime("-4 day", $datex);
                                $date3 = date('M d', $datec);
                                $y = strtotime($date3);
                                $g =  date("Y-m-d ", $y);
                                $dated = strtotime("-3 day", $datex);
                                $date4 = date('M d', $dated);
                                $v = strtotime($date4);
                                $h =  date("Y-m-d ", $v);
                                $datee = strtotime("-2 day", $datex);
                                $date5 = date('M d', $datee);
                                $w = strtotime($date5);
                                $i =  date("Y-m-d ", $w);
                                $datef = strtotime("-1 day", $datex);
                                $date6 = date('M d', $datef);
                                $u = strtotime($date6);
                                $j =  date("Y-m-d ", $u);

                                $sql = "SELECT * FROM employee_details";
                                $result1 = mysqli_query($connect, $sql);
                                if ($result1) {
                                  $row = mysqli_fetch_assoc($result1);

                                  echo '
                  <input class="form-control" id="dae1" name="date1" placeholder="Choose Date[ DD/MM/YYYY ]" value="' . $e . '" type="hidden"/>
                  <input class="form-control" id="de1" name="date2" placeholder="Choose Date[ DD/MM/YYYY ]"  value="' . $f . '" type="hidden"/>
                  <input class="form-control" id="dat1" name="date3" placeholder="Choose Date[ DD/MM/YYYY ]"   value="' . $g . '"type="hidden"/>
                  <input class="form-control" id="dte1" name="date4" placeholder="Choose Date[ DD/MM/YYYY ]"  value="' . $h . '" type="hidden"/>
                  <input class="form-control" id="da1" name="date5" placeholder="Choose Date[ DD/MM/YYYY ]"  value="' . $i . '" type="hidden"/>
                  <input class="form-control" id="ate1" name="date6" placeholder="Choose Date[ DD/MM/YYYY ]"  value="' . $j . '" type="hidden"/>
                  <th class="text-center">
                  Mon(' . $date1 . ')<span class="str"><font color="red">*</font></span>
                  </th>
                  <th class="text-center">
                  Tue(' . $date2 . ')<span class="str"><font color="red">*</font></span>
                  </th>
                  <th class="text-center">
                  Wed(' . $date3 . ')<span class="str"><font color="red">*</font></span>
                  </th>
                  <th class="text-center">
                  Thur(' . $date4 . ')<span class="str"><font color="red">*</font></span>
                  </th>
                  <th class="text-center">
                  Fri(' . $date5 . ')<span class="str"><font color="red">*</font></span>
                  </th>';
                                }
                                ?>

                        </tr>
                      </thead>

                      <tbody>
                        <?php
                        $sql7 = "SELECT * FROM employee_details WHERE email='" . $_SESSION['uname'] . "'";
                        $result7 = mysqli_query($connect, $sql7);

                        if ($result7) {
                          while ($row7 = mysqli_fetch_array($result7)) {
                            $name = $row7['name'];
                            $head = $row7['supervisor'];
                            echo '

             
   
  
   
   
  <input class="form-control"style="width:200px" id="name" name="name" placeholder="Choose Date[ DD/MM/YYYY ]"  value="' . $row7['name'] . '" type="hidden"/>
  <input class="form-control" style="width:200px" id="spr" name="supervisor" placeholder="Choose Date[ DD/MM/YYYY ]"  value="' . $row7['supervisor'] . '" type="hidden"/>

';
                          }
                          $sql = "SELECT * FROM users where name='$head'";

                          $result = mysqli_query($connect, $sql);
                          if ($result !== false) {
                            $row = mysqli_fetch_assoc($result);
                            echo '
  <input class="form-control" style="width:200px" id="head" name="head" placeholder="Choose Date[ DD/MM/YYYY ]"  value="' . $row['username'] . '" type="hidden"/>';
                          }

                          $sql2 = "SELECT * FROM project_allocation where name='$name'";

                          $result2 = mysqli_query($connect, $sql2);
                          $n = $result2->num_rows;


                          if ($n == 3) {
                            echo ' <tr id="addrQual0">
                  
                                <td id="col0" ><div class="col-md-12 col-lg-3 col-sm-12 col-xl-3">
                              <div class="form-group">
                              <label for="formGroupExampleInput" style="color:black; width:100px;">Project</label><br>';

                            echo '<select name="prj1" id="prj1" class="form-select" style="width:100px" required>';
                            echo '<option value=""> ---- </option>';


                            $num_results = mysqli_num_rows($result2);
                            for ($i = 0; $i < $num_results; $i++) {
                              $row1 = mysqli_fetch_array($result2);
                              $prj = $row1['prj_name'];
                              echo '<option value="' . $prj . '">' . $prj . '</option>';
                            }

                            echo '</select>';
                            echo '</label>';



                            echo '      </div>
                                        </div>
                                                </td>
                                                <td id="col1"><div class="col-md-12 col-lg-2 col-sm-12 col-xl-2">
                                <div class="form-group">
                                <label for="exampleFormControlFile1" style="color:black; width:100px">Hours</label><br>
                                <div class="col-md-3">
                                          
                                <input type="text" class="form-control" id="a1" name="a1" oninput="calc();" style="width:100px;" required>
                                        </div>
                                      </div>
                                  
                                    </td>
                                    <td id="col2"> 
                                    <div class="col-md-12 col-lg-2 col-sm-12 col-xl-2">
                                    <div class="form-group">
                                <label for="exampleFormControlFile1" style="color:black; width:100px">Hours</label><br>
                                <div class="col-md-3">
                                          
                                <input type="number" class="form-control" id="b1" name="b1" onFocus="startCalc();" onBlur="stpCalc();" style="width:100px;" required>
                                        </div>
                                      </div>
                                          </td>
                                              <td id="col3"> 
                                              <div class="col-md-12 col-lg-3 col-sm-12 col-xl-3">
                                <div class="form-group">
                                  <label for="exampleFormControlTextarea1" style="color:black; width:100px">Hours</label><br>    
                                  <div class="col-md-3">
                                          
                                          <input type="number" class="form-control" id="c1" name="c1" onFocus="startCalc();" onBlur="stpCalc();" style="width:100px;" required>
                              
                                  
                                </div></div>
                                          </td>
                                                
                                                
                                              <td id="col4"> 
                                              <div class="col-md-12 col-lg-3 col-sm-12 col-xl-3">
                                <div class="form-group">
                                  <label for="exampleFormControlTextarea1" style="color:black; width:100px">Hours</label><br>    
                                  <div class="col-md-3">
                                          
                                <input type="number" class="form-control" id="d1" name="d1" onFocus="startCalc();" onBlur="stpCalc();" style="width:100px;" required>
                                </div></div>
                                          </td>
                                              <td id="col5"> 
                                              <div class="col-md-12 col-lg-3 col-sm-12 col-xl-3">
                                <div class="form-group">
                                  <label for="exampleFormControlTextarea1" style="color:black; width:100px">Hours</label><br>    
                                  <div class="col-md-3">
                                          
                                          <input type="number" class="form-control" id="e1" name="e1" onFocus="startCalc();" onBlur="stpCalc();" style="width:100px;" required>
                                  
                                </div></div>
                                          </td><tr id="addrQual0">
                  
                                          <td id="col0" ><div class="col-md-12 col-lg-3 col-sm-12 col-xl-3">
                                        <div class="form-group">
                                        <label for="formGroupExampleInput" style="color:black; width:100px;">Project</label><br>';
                            $sql2 = "SELECT * FROM project_allocation where name='$name'";

                            $result2 = mysqli_query($connect, $sql2);
                            $n = $result2->num_rows;
                            echo '<select name="prj2" id="prj2" class="form-select" style="width:100px" required >';
                            echo '<option value=""> ---- </option>';


                            $num_results = mysqli_num_rows($result2);
                            for ($i = 0; $i < $num_results; $i++) {
                              $row1 = mysqli_fetch_array($result2);
                              $prj = $row1['prj_name'];
                              echo '<option value="' . $prj . '">' . $prj . '</option>';
                            }

                            echo '</select>';
                            echo '</label>';
                            echo '      </div>
                                                    </div>
                                                            </td>
                                                            <td id="col1"><div class="col-md-12 col-lg-2 col-sm-12 col-xl-2">
                                            <div class="form-group">
                                            <label for="exampleFormControlFile1" style="color:black; width:100px">Hours</label><br>
                                            <div class="col-md-3">
                                                      
                                            <input type="number" class="form-control" id="a2" name="a2" oninput="calc();" style="width:100px;" required>
                                                    </div>
                                                  </div>
                                              
                                                </td>
                                                <td id="col2"> 
                                                <div class="col-md-12 col-lg-2 col-sm-12 col-xl-2">
                                                <div class="form-group">
                                            <label for="exampleFormControlFile1" style="color:black; width:100px">Hours</label><br>
                                            <div class="col-md-3">
                                                      
                                            <input type="number" class="form-control" id="b2" name="b2" onFocus="startCalc();" onBlur="stpCalc();" style="width:100px;" required>
                                                    </div>
                                                  </div>
                                                      </td>
                                                          <td id="col3"> 
                                                          <div class="col-md-12 col-lg-3 col-sm-12 col-xl-3">
                                            <div class="form-group">
                                              <label for="exampleFormControlTextarea1" style="color:black; width:100px">Hours</label><br>    
                                              <div class="col-md-3">
                                                      
                                                      <input type="number" class="form-control" id="c2" name="c2"  onFocus="startCalc();" onBlur="stpCalc();" style="width:100px;" required>
                                          
                                              
                                            </div></div>
                                                      </td>
                                                            
                                                            
                                                          <td id="col4"> 
                                                          <div class="col-md-12 col-lg-3 col-sm-12 col-xl-3">
                                            <div class="form-group">
                                              <label for="exampleFormControlTextarea1" style="color:black; width:100px">Hours</label><br>    
                                              <div class="col-md-3">
                                                      
                                            <input type="number" class="form-control" id="d2" name="d2"  onFocus="startCalc();" onBlur="stpCalc();" style="width:100px;" required>
                                            </div></div>
                                                      </td>
                                                          <td id="col5"> 
                                                          <div class="col-md-12 col-lg-3 col-sm-12 col-xl-3">
                                            <div class="form-group">
                                              <label for="exampleFormControlTextarea1" style="color:black; width:100px">Hours</label><br>    
                                              <div class="col-md-3">
                                                      
                                                      <input type="number" class="form-control" id="e2" name="e2" onFocus="startCalc();" onBlur="stpCalc();" style="width:100px;">
                                              
                                            </div></div>
                                                      </td>
                                                         
                                                
                                                           
                                                         
                                                         </tr><tr id="addrQual0">
                  
                                                         <td id="col0" ><div class="col-md-12 col-lg-3 col-sm-12 col-xl-3">
                                                       <div class="form-group">
                                                       <label for="formGroupExampleInput" style="color:black; width:100px;">Project</label><br>';

                            $sql2 = "SELECT * FROM project_allocation where name='$name'";

                            $result2 = mysqli_query($connect, $sql2);
                            $n = $result2->num_rows;
                            echo '<select name="prj3" id="prj3" class="form-select" style="width:100px" required>';
                            echo '<option value=""> ---- </option>';


                            $num_results = mysqli_num_rows($result2);
                            for ($i = 0; $i < $num_results; $i++) {
                              $row1 = mysqli_fetch_array($result2);
                              $prj = $row1['prj_name'];
                              echo '<option value="' . $prj . '">' . $prj . '</option>';
                            }

                            echo '</select>';
                            echo '</label>';



                            echo '  </div>
          </div>
                  </td>
                  <td id="col1"><div class="col-md-12 col-lg-2 col-sm-12 col-xl-2">
  <div class="form-group">
  <label for="exampleFormControlFile1" style="color:black; width:100px">Hours</label><br>
  <div class="col-md-3">
            
  <input type="number" class="form-control" id="a3" name="a3"  oninput="calc();"  style="width:100px;" required>
          </div>
        </div>
    
      </td>
      <td id="col2"> 
			<div class="col-md-12 col-lg-2 col-sm-12 col-xl-2">
      <div class="form-group">
  <label for="exampleFormControlFile1" style="color:black; width:100px">Hours</label><br>
  <div class="col-md-3">
            
  <input type="number" class="form-control" id="b3" name="b3"  onFocus="startCalc();" onBlur="stpCalc();" style="width:100px;" required>
          </div>
        </div>
		        </td>
                <td id="col3"> 
                <div class="col-md-12 col-lg-3 col-sm-12 col-xl-3">
  <div class="form-group">
    <label for="exampleFormControlTextarea1" style="color:black; width:100px">Hours</label><br>    
    <div class="col-md-3">
            
            <input type="number" class="form-control" id="c3" name="c3"  onFocus="startCalc();" onBlur="stpCalc();" style="width:100px;" required >

    
  </div></div>
		        </td>
                  
                  
            <td id="col4"> 
                <div class="col-md-12 col-lg-3 col-sm-12 col-xl-3">
  <div class="form-group">
    <label for="exampleFormControlTextarea1" style="color:black; width:100px">Hours</label><br>    
    <div class="col-md-3">
            
            <input type="number" class="form-control" id="d3" name="d3"  onFocus="startCalc();" onBlur="stpCalc();" style="width:100px;" required>

    
  </div></div>
		        </td>
                <td id="col5"> 
                <div class="col-md-12 col-lg-3 col-sm-12 col-xl-3">
  <div class="form-group">
    <label for="exampleFormControlTextarea1" style="color:black; width:100px">Hours</label><br>    
    <div class="col-md-3">
            
            <input type="number" class="form-control" id="e3" name="e3"  onFocus="startCalc();" onBlur="stpCalc();" style="width:100px;" required>
    
  </div></div>
		        </td>
                
      
                 
               
               </tr>
           
      <tr><td><div class="col-md-12 col-lg-2 col-sm-12 col-xl-2">
        <div class="form-group">
        <label for="exampleFormControlTextarea1" style="color:black; width:100px">&nbsp;</label><br>  
  <div class="col-md-3">              
      <input type="text"  class="form-control" style="color:black; width:115px; font-weight:bold;" value="Hours / Day" >
</div></div></div></td><td>

        
        <div class="col-md-12 col-lg-2 col-sm-12 col-xl-2">
        <div class="form-group">
        <label for="exampleFormControlTextarea1" style="color:black; width:100px">&nbsp;</label><br>  
  <div class="col-md-3">              
      <input type="number" name="a4" class="form-control"   max="10" style="color:black; width:100px" readonly required >
</div></div></div></td><td>
<div class="col-md-12 col-lg-2 col-sm-12 col-xl-2">
        <div class="form-group">
        <label for="exampleFormControlTextarea1" style="color:black; width:100px" >&nbsp;</label><br>  
  <div class="col-md-3">              
      <input type="number" name="b4" class="form-control"   max="10" style="color:black; width:100px" readonly required>
</div></div></div></td><td>
<div class="col-md-12 col-lg-2 col-sm-12 col-xl-2">
        <div class="form-group">
        <label for="exampleFormControlTextarea1" style="color:black; width:100px">&nbsp;</label><br>  
  <div class="col-md-3">              
      <input type="number" name="c4" class="form-control"   max="10" style="color:black; width:100px" readonly  required>
</div></div></div></td><td>
<div class="col-md-12 col-lg-2 col-sm-12 col-xl-2">
        <div class="form-group">
        <label for="exampleFormControlTextarea1" style="color:black; width:100px">&nbsp;</label><br>  
  <div class="col-md-3">              
      <input type="number" name="d4" class="form-control"   max="10" style="color:black; width:100px" readonly required>
</div></div></div></td><td>
<div class="col-md-12 col-lg-2 col-sm-12 col-xl-2">
        <div class="form-group">
        <label for="exampleFormControlTextarea1" style="color:black; width:100px">&nbsp;</label><br>  
  <div class="col-md-3">              
      <input type="number" name="e4" class="form-control"  max="10" style="color:black; width:100px" readonly required>
</div></div></div></td></tr>
<tr><td></td><td></td><td></td><td></td><td><div class="col-md-12 col-lg-2 col-sm-12 col-xl-2">
        <div class="form-group">
        <label for="exampleFormControlTextarea1" style="color:black; width:100px">&nbsp;</label><br>  
  <div class="col-md-3">              
      <input type="text"  class="form-control" style="color:black; width:115px; font-weight:bold;" value="Total Hours" >
</div></div></div></td><td><div class="col-md-12 col-lg-2 col-sm-12 col-xl-2">
        <div class="form-group">
        <label for="exampleFormControlTextarea1" style="color:black; width:100px">&nbsp;</label><br>  
  <div class="col-md-3">              
      <input type="number" name="g4" class="form-control"  max="60" style="color:black; width:100px" readonly required>
</div></div></div></td></tr>
</tbody>
            
         
            </table>  </div></div></div></div><br><br><br>

                
            <center><button type="submit" id="save" class="btn btn-primary" style ="background-color: #333d97;">Save<input type="hidden" class="btn btn-primary" value="1" style ="background-color: #333d97;"  id="savein" name="save"></button>
                                                             
            <button type="reset" class="btn btn-secondary" style="margin-left:10px;"  >Clear Entry</button>
            <button type="submit" id="cancel" onclick="disableSubmit()" class="btn btn-secondary" style =";margin-left:10px;">Cancel<input type="hidden" class="btn btn-primary" value="2" style ="background-color: #333d97;"  id="cancelin" name="cancel" enabled></button>
            <button type="submit" id="submit" onclick="disableCancel()"  class="btn btn-primary" style ="background-color: #333d97;margin-left:10px;">Submit<input type="hidden" class="btn btn-primary" value="2" style ="background-color: #333d97;"  id="submitin" name="submit" enabled></button>
            </center>
          </form>';
                          }
                          if ($n == 1) {

                            echo ' <tr id="addrQual0">
                                                 
                                 <td id="col0" ><div class="col-md-12 col-lg-3 col-sm-12 col-xl-3">
                                <div class="form-group">
                                <label for="formGroupExampleInput" style="color:black; width:100px;">Project</label><br>';

                            echo '<select name="prj1" id="prj1"  class="form-select" style="width:100px" required>';
                            echo '<option value=""> ---- </option>';


                            $num_results = mysqli_num_rows($result2);
                            for ($i = 0; $i < $num_results; $i++) {
                              $row1 = mysqli_fetch_array($result2);
                              $prj = $row1['prj_name'];
                              echo '<option value="' . $prj . '">' . $prj . '</option>';
                            }

                            echo '</select>';
                            echo '</label>';



                            echo '      </div>
                                         </div>
                                                 </td>
                                                 <td id="col1"><div class="col-md-12 col-lg-2 col-sm-12 col-xl-2">
                                 <div class="form-group">
                                 <label for="exampleFormControlFile1" style="color:black; width:100px">Hours</label><br>
                                 <div class="col-md-3">
                                           
                                 <input type="text" class="form-control" id="l1" name="a1" oninput="calc();" style="width:100px;" required>
                                         </div>
                                       </div>
                                   
                                     </td>
                                     <td id="col2"> 
                                        <div class="col-md-12 col-lg-2 col-sm-12 col-xl-2">
                                     <div class="form-group">
                                 <label for="exampleFormControlFile1" style="color:black; width:100px">Hours</label><br>
                                 <div class="col-md-3">
                                           
                                 <input type="number" class="form-control" id="m1" name="b1" oninput="calc();"  style="width:100px;" required>
                                         </div>
                                       </div>
                                             </td>
                                               <td id="col3"> 
                                               <div class="col-md-12 col-lg-3 col-sm-12 col-xl-3">
                                 <div class="form-group">
                                   <label for="exampleFormControlTextarea1" style="color:black; width:100px">Hours</label><br>    
                                   <div class="col-md-3">
                                           
                                           <input type="number" class="form-control" id="n1" name="c1" oninput="calc();"  style="width:100px;" required>
                                
                                   
                                 </div></div>
                                             </td>
                                                 
                                                 
                                               <td id="col4"> 
                                               <div class="col-md-12 col-lg-3 col-sm-12 col-xl-3">
                                 <div class="form-group">
                                   <label for="exampleFormControlTextarea1" style="color:black; width:100px">Hours</label><br>    
                                   <div class="col-md-3">
                                           
                                 <input type="number" class="form-control" id="o1" name="d1" oninput="calc();"  style="width:100px;" required>
                                 </div></div>
                                             </td>
                                               <td id="col5"> 
                                               <div class="col-md-12 col-lg-3 col-sm-12 col-xl-3">
                                 <div class="form-group">
                                   <label for="exampleFormControlTextarea1" style="color:black; width:100px">Hours</label><br>    
                                   <div class="col-md-3">
                                           
                                           <input type="number" class="form-control" id="p1" name="e1" oninput="calc();"  style="width:100px;" required>
                                   
                                 </div></div>
                                             </td>
                                              
                                     
                                                
                                              
                                              </tr> <tr><td><div class="col-md-12 col-lg-2 col-sm-12 col-xl-2"  >
                                              <div class="form-group">
                                              <label for="exampleFormControlTextarea1" style="color:black; width:100px">&nbsp;</label><br>  
                                        <div class="col-md-3">              
                                            <input type="text"  class="form-control" style="color:black; width:115px; font-weight:bold;" value="Hours / Day" >
                                      </div></div></div></td><td>
                                      
                                              
                                              <div class="col-md-12 col-lg-2 col-sm-12 col-xl-2"  >
                                              <div class="form-group">
                                              <label for="exampleFormControlTextarea1" style="color:black; width:100px">&nbsp;</label><br>  
                                        <div class="col-md-3">              
                                            <input type="number" name="a4" class="form-control" id="l2"  oninput="calc();"  max="8" style="color:black; width:100px" readonly required >
                                      </div></div></div></td><td>
                                      <div class="col-md-12 col-lg-2 col-sm-12 col-xl-2"  >
                                              <div class="form-group">
                                              <label for="exampleFormControlTextarea1" style="color:black; width:100px" >&nbsp;</label><br>  
                                        <div class="col-md-3">              
                                            <input type="number" name="b4" class="form-control" id="m2"  oninput="calc();"  max="8" style="color:black; width:100px" readonly required>
                                      </div></div></div></td><td>
                                      <div class="col-md-12 col-lg-2 col-sm-12 col-xl-2"  >
                                              <div class="form-group">
                                              <label for="exampleFormControlTextarea1" style="color:black; width:100px">&nbsp;</label><br>  
                                        <div class="col-md-3">              
                                            <input type="number" name="c4" class="form-control" id="n2" max="8" oninput="calc();"  style="color:black; width:100px" readonly required>
                                      </div></div></div></td><td>
                                      <div class="col-md-12 col-lg-2 col-sm-12 col-xl-2"  >
                                              <div class="form-group">
                                              <label for="exampleFormControlTextarea1" style="color:black; width:100px">&nbsp;</label><br>  
                                        <div class="col-md-3">              
                                            <input type="number" name="d4" class="form-control" id="o2" max="8"oninput="calc();"  style="color:black; width:100px" readonly required>
                                      </div></div></div></td><td>
                                      <div class="col-md-12 col-lg-2 col-sm-12 col-xl-2"  >
                                              <div class="form-group">
                                              <label for="exampleFormControlTextarea1" style="color:black; width:100px">&nbsp;</label><br>  
                                        <div class="col-md-3">              
                                            <input type="number" name="e4" class="form-control"  id="p2" max="8"  oninput="calc();" style="color:black; width:100px"  readonly required>
                                      </div></div></div></td></tr>
                                      <tr><td></td><td></td><td></td><td></td><td><div class="col-md-12 col-lg-2 col-sm-12 col-xl-2"  >
                                              <div class="form-group">
                                              <label for="exampleFormControlTextarea1" style="color:black; width:100px">&nbsp;</label><br>  
                                        <div class="col-md-3">              
                                            <input type="text"  class="form-control" style="color:black; width:115px; font-weight:bold;" value="Total Hours" >
                                      </div></div></div></td><td><div class="col-md-12 col-lg-2 col-sm-12 col-xl-2"  >
                                              <div class="form-group">
                                              <label for="exampleFormControlTextarea1" style="color:black; width:100px">&nbsp;</label><br>  
                                        <div class="col-md-3">              
                                            <input type="number" name="g4" class="form-control" id="q2" max="40" style="color:black; width:100px" readonly required>
                                      </div></div></div></td></tr>
                                      </tbody>
                                                  
                                               
                                                  </table>  </div></div></div></div><br><br><br>
                                
                                               
                                                  <center><button type="submit" id="save" class="btn btn-primary" style ="background-color: #333d97;">Save<input type="hidden" class="btn btn-primary" value="1" style ="background-color: #333d97;"  id="savein" name="save"></button>
                                                             
                                                  <button type="reset" class="btn btn-secondary" style="margin-left:10px;"  >Clear Entry</button>
                                                  <button type="submit" id="cancel" onclick="disableSubmit()" class="btn btn-secondary" style =";margin-left:10px;">Cancel<input type="hidden" class="btn btn-primary" value="2" style ="background-color: #333d97;"  id="cancelin" name="cancel" enabled></button>
                                                  <button type="submit" id="submit" onclick="disableCancel()"  class="btn btn-primary" style ="background-color: #333d97;margin-left:10px;">Submit<input type="hidden" class="btn btn-primary" value="2" style ="background-color: #333d97;"  id="submitin" name="submit" enabled></button>
                                                  </center>
                                                
                                                </form>';
                          } else if ($n == 2) {
                            echo ' <tr id="addrQual0">
                                                
                                <td id="col0" ><div class="col-md-12 col-lg-3 col-sm-12 col-xl-3">
                               <div class="form-group">
                               <label for="formGroupExampleInput" style="color:black; width:100px;">Project</label><br>';

                            echo '<select name="prj1" id="prj1" class="form-select" style="width:100px" required>';
                            echo '<option value=""> ---- </option>';

                            $num_results = mysqli_num_rows($result2);
                            for ($i = 0; $i < $num_results; $i++) {
                              $row1 = mysqli_fetch_array($result2);
                              $prj = $row1['prj_name'];
                              echo '<option value="' . $prj . '">' . $prj . '</option>';
                            }

                            echo '</select>';
                            echo '</label>';



                            echo '      </div>
                                        </div>
                                                </td>
                                                <td id="col1"><div class="col-md-12 col-lg-2 col-sm-12 col-xl-2">
                                <div class="form-group">
                                <label for="exampleFormControlFile1" style="color:black; width:100px">Hours</label><br>
                                <div class="col-md-3">
                                          
                                <input type="text" class="form-control" id="u1" name="a1" oninput="calci();"  style="width:100px;" required>
                                        </div>
                                      </div>
                                  
                                    </td>
                                    <td id="col2"> 
                                       <div class="col-md-12 col-lg-2 col-sm-12 col-xl-2">
                                    <div class="form-group">
                                <label for="exampleFormControlFile1" style="color:black; width:100px">Hours</label><br>
                                <div class="col-md-3">
                                          
                                <input type="number" class="form-control" id="v1" name="b1" oninput="calci();" style="width:100px;" required>
                                        </div>
                                      </div>
                                            </td>
                                              <td id="col3"> 
                                              <div class="col-md-12 col-lg-3 col-sm-12 col-xl-3">
                                <div class="form-group">
                                  <label for="exampleFormControlTextarea1" style="color:black; width:100px">Hours</label><br>    
                                  <div class="col-md-3">
                                          
                                          <input type="number" class="form-control" id="w1" name="c1" oninput="calci();" style="width:100px;" required>
                               
                                  
                                </div></div>
                                            </td>
                                                
                                                
                                              <td id="col4"> 
                                              <div class="col-md-12 col-lg-3 col-sm-12 col-xl-3">
                                <div class="form-group">
                                  <label for="exampleFormControlTextarea1" style="color:black; width:100px">Hours</label><br>    
                                  <div class="col-md-3">
                                          
                                <input type="number" class="form-control" id="x1" name="d1" oninput="calci();" style="width:100px;" required>
                                </div></div>
                                            </td>
                                              <td id="col5"> 
                                              <div class="col-md-12 col-lg-3 col-sm-12 col-xl-3">
                                <div class="form-group">
                                  <label for="exampleFormControlTextarea1" style="color:black; width:100px">Hours</label><br>    
                                  <div class="col-md-3">
                                          
                                          <input type="number" class="form-control" id="y1" name="e1" oninput="calci();" style="width:100px;" required>
                                  
                                </div></div>
                                            </td><tr id="addrQual0">
                                                
                                          <td id="col0" ><div class="col-md-12 col-lg-3 col-sm-12 col-xl-3">
                                        <div class="form-group">
                                        <label for="formGroupExampleInput" style="color:black; width:100px;">Project</label><br>';
                            echo '<select name="prj2" id="prj2"  class="form-select" style="width:100px" required>';
                            echo '<option value=""> ---- </option>';

                            $sql2 = "SELECT * FROM project_allocation where name='$name'";

                            $result2 = mysqli_query($connect, $sql2);
                            $n = $result2->num_rows;

                            $num_results = mysqli_num_rows($result2);
                            for ($i = 0; $i < $num_results; $i++) {
                              $row1 = mysqli_fetch_array($result2);
                              $prj = $row1['prj_name'];
                              echo '<option value="' . $prj . '">' . $prj . '</option>';
                            }

                            echo '</select>';
                            echo '</label>';
                            echo '      </div>
                                                    </div>
                                                            </td>
                                                            <td id="col1"><div class="col-md-12 col-lg-2 col-sm-12 col-xl-2">
                                            <div class="form-group">
                                            <label for="exampleFormControlFile1" style="color:black; width:100px">Hours</label><br>
                                            <div class="col-md-3">
                                                      
                                            <input type="number" class="form-control" id="u2" name="a2" oninput="calci();" style="width:100px;" required>
                                                    </div>
                                                  </div>
                                              
                                                </td>
                                                <td id="col2"> 
                                                <div class="col-md-12 col-lg-2 col-sm-12 col-xl-2">
                                                <div class="form-group">
                                            <label for="exampleFormControlFile1" style="color:black; width:100px">Hours</label><br>
                                            <div class="col-md-3">
                                                      
                                            <input type="number" class="form-control" id="v2" name="b2" oninput="calci();" style="width:100px;" required>
                                                    </div>
                                                  </div>
                                                      </td>
                                                          <td id="col3"> 
                                                          <div class="col-md-12 col-lg-3 col-sm-12 col-xl-3">
                                            <div class="form-group">
                                              <label for="exampleFormControlTextarea1" style="color:black; width:100px">Hours</label><br>    
                                              <div class="col-md-3">
                                                      
                                                      <input type="number" class="form-control" id="w2" name="c2"  oninput="calci();" style="width:100px;" required>
                                          
                                              
                                            </div></div>
                                                      </td>
                                                            
                                                            
                                                          <td id="col4"> 
                                                          <div class="col-md-12 col-lg-3 col-sm-12 col-xl-3">
                                            <div class="form-group">
                                              <label for="exampleFormControlTextarea1" style="color:black; width:100px">Hours</label><br>    
                                              <div class="col-md-3">
                                                      
                                            <input type="number" class="form-control" id="x2" name="d2"  oninput="calci();" style="width:100px;" required>
                                            </div></div>
                                                      </td>
                                                          <td id="col5"> 
                                                          <div class="col-md-12 col-lg-3 col-sm-12 col-xl-3">
                                            <div class="form-group">
                                              <label for="exampleFormControlTextarea1" style="color:black; width:100px">Hours</label><br>    
                                              <div class="col-md-3">
                                                      
                                                      <input type="number" class="form-control" id="y2" name="e2" oninput="calci();" style="width:100px;" required>
                                              
                                            </div></div>
                                                      </td>
                                                         
                                                
                                                           
                                                         
                                                         </tr>';
                            echo '<tr><td><div class="col-md-12 col-lg-2 col-sm-12 col-xl-2"  >
                                                         <div class="form-group">
                                                         <label for="exampleFormControlTextarea1" style="color:black; width:100px">&nbsp;</label><br>  
                                                   <div class="col-md-3">              
                                                       <input type="text"  class="form-control" style="color:black; width:115px; font-weight:bold;" value="Hours / Day" >
                                                 </div></div></div></td><td>
                                                 
                                                         
                                                         <div class="col-md-12 col-lg-2 col-sm-12 col-xl-2"  >
                                                         <div class="form-group">
                                                         <label for="exampleFormControlTextarea1" style="color:black; width:100px">&nbsp;</label><br>  
                                                   <div class="col-md-3">              
                                                       <input type="number" name="a4" class="form-control" id="u3" oninput="calci();" max="10" style="color:black; width:100px" readonly required >
                                                 </div></div></div></td><td>
                                                 <div class="col-md-12 col-lg-2 col-sm-12 col-xl-2"  >
                                                         <div class="form-group">
                                                         <label for="exampleFormControlTextarea1" style="color:black; width:100px" >&nbsp;</label><br>  
                                                   <div class="col-md-3">              
                                                       <input type="number" name="b4" class="form-control" id="v3" max="10" oninput="calci();" style="color:black; width:100px" readonly required>
                                                 </div></div></div></td><td>
                                                 <div class="col-md-12 col-lg-2 col-sm-12 col-xl-2"  >
                                                         <div class="form-group">
                                                         <label for="exampleFormControlTextarea1" style="color:black; width:100px">&nbsp;</label><br>  
                                                   <div class="col-md-3">              
                                                       <input type="number" name="c4" class="form-control" id="w3" max="10" oninput="calci();" style="color:black; width:100px" readonly required>
                                                 </div></div></div></td><td>
                                                 <div class="col-md-12 col-lg-2 col-sm-12 col-xl-2"  >
                                                         <div class="form-group">
                                                         <label for="exampleFormControlTextarea1" style="color:black; width:100px">&nbsp;</label><br>  
                                                   <div class="col-md-3">              
                                                       <input type="number" name="d4" class="form-control" id="x3" max="10" oninput="calci();" style="color:black; width:100px" readonly required>
                                                 </div></div></div></td><td>
                                                 <div class="col-md-12 col-lg-2 col-sm-12 col-xl-2"  >
                                                         <div class="form-group">
                                                         <label for="exampleFormControlTextarea1" style="color:black; width:100px">&nbsp;</label><br>  
                                                   <div class="col-md-3">              
                                                       <input type="number" name="e4" class="form-control" id="y3"  max="10" oninput="calci();" style="color:black; width:100px" readonly required>
                                                 </div></div></div></td></tr>
                                                 <tr><td></td><td></td><td></td><td></td><td><div class="col-md-12 col-lg-2 col-sm-12 col-xl-2"  >
                                                         <div class="form-group">
                                                         <label for="exampleFormControlTextarea1" style="color:black; width:100px">&nbsp;</label><br>  
                                                   <div class="col-md-3">              
                                                       <input type="text"  class="form-control" style="color:black; width:115px; font-weight:bold;" value="Total Hours" >
                                                 </div></div></div></td><td><div class="col-md-12 col-lg-2 col-sm-12 col-xl-2"  >
                                                         <div class="form-group">
                                                         <label for="exampleFormControlTextarea1" style="color:black; width:100px">&nbsp;</label><br>  
                                                   <div class="col-md-3">              
                                                       <input type="number" name="g4" class="form-control" id="z3"  max="60" style="color:black; width:100px" readonly required>
                                                 </div></div></div></td></tr>
                                                 </tbody>
                                                             
                                                          
                                                             </table>  </div></div></div></div><br><br><br>
                               
                                              
                                                             <center><button type="submit" id="save" class="btn btn-primary" style ="background-color: #333d97;">Save<input type="hidden" class="btn btn-primary" value="1" style ="background-color: #333d97;"  id="savein" name="save"></button>
                                                             
                                                             <button type="reset" class="btn btn-secondary" style="margin-left:10px;"  >Clear Entry</button>
                                                             <button type="submit" id="cancel" onclick="disableSubmit()" class="btn btn-secondary" style =";margin-left:10px;">Cancel<input type="hidden" class="btn btn-primary" value="2" style ="background-color: #333d97;"  id="cancelin" name="cancel" enabled></button>
                                                             <button type="submit" id="submit" onclick="disableCancel()"  class="btn btn-primary" style ="background-color: #333d97;margin-left:10px;">Submit<input type="hidden" class="btn btn-primary" value="2" style ="background-color: #333d97;"  id="submitin" name="submit" enabled></button>
                                                             </center>
                                                           
                                                           
                                                           </form>';
                          } 
                        }
                        ?>
                        <script>
                          function disableCancel() {
                            document.getElementById("cancel").enabled = false;
                          }
                        </script>
                        <script>
                          function disableSubmit() {
                            document.getElementById("submit").enabled = false;
                          }
                        </script>
                        <script>
                          function myFunction() {
                            var x = document.getElementById("view");
                            var y = document.getElementById("show");
                            if (x.style.display === "none") {
                              x.style.display = "block";
                            } else {
                              x.style.display = "none";
                            }
                            if (y.style.display === "none") {
                              y.style.display = "block";
                            } else {
                              y.style.display = "none";
                            }
                          }
                        </script>
                        <script>
                          $(document).ready(function() {
                            $('#save').click(function() {
                              var readonly = $("#prj1").prop('readonly');
                              var readonly = $("#prj2").prop('readonly');
                              var readonly = $("#prj3").prop('readonly');
                              var readonly = $("#a1").prop('readonly');
                              var readonly = $("#b1").prop('readonly');
                              var readonly = $("#c1").prop('readonly');
                              var readonly = $("#d1").prop('readonly');
                              var readonly = $("#e1").prop('readonly');
                              var readonly = $("#a2").prop('readonly');
                              var readonly = $("#b2").prop('readonly');
                              var readonly = $("#c2").prop('readonly');
                              var readonly = $("#d2").prop('readonly');
                              var readonly = $("#e2").prop('readonly');
                              var readonly = $("#a3").prop('readonly');
                              var readonly = $("#b3").prop('readonly');
                              var readonly = $("#c3").prop('readonly');
                              var readonly = $("#d3").prop('readonly');
                              var readonly = $("#e3").prop('readonly');
                              var readonly = $("#l1").prop('readonly');
                              var readonly = $("#m1").prop('readonly');
                              var readonly = $("#n1").prop('readonly');
                              var readonly = $("#o1").prop('readonly');
                              var readonly = $("#p1").prop('readonly');
                              var readonly = $("#u1").prop('readonly');
                              var readonly = $("#v1").prop('readonly');
                              var readonly = $("#w1").prop('readonly');
                              var readonly = $("#x1").prop('readonly');
                              var readonly = $("#y1").prop('readonly');
                              var readonly = $("#u2").prop('readonly');
                              var readonly = $("#v2").prop('readonly');
                              var readonly = $("#w2").prop('readonly');
                              var readonly = $("#x2").prop('readonly');
                              var readonly = $("#y2").prop('readonly');

                              if (readonly) {
                                $("#a1").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#a1").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#b1").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#b1").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#c1").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#c1").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#d1").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#d1").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#e1").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#e1").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#a2").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#a2").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#b2").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#b2").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#c2").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#c2").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#d2").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#d2").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#e2").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#e2").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#a3").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#a3").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#b3").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#b3").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#c3").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#c3").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#d3").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#d3").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#e3").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#e3").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#prj1").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#prj1").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#prj2").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#prj2").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#prj3").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#prj3").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#g4").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#g4").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#savein").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#savein").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#l1").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#l1").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#m1").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#m1").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#n1").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#n1").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#o1").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#o1").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#p1").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#p1").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#u1").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#u1").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#v1").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#v1").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#w1").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#w1").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#x1").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#x1").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#y1").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#y1").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#u2").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#u2").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#v2").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#v2").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#w2").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#w2").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#x2").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#x2").prop('readonly', true); // if enabled, disable
                              }
                              if (readonly) {
                                $("#y2").prop('readonly', false); // if disabled, enable
                              } else {
                                $("#y2").prop('readonly', true); // if enabled, disable
                              }

                            })
                          });
                        </script>


                        <script>
                          $(document).ready(function() {
                            $('#cancel').click(function() {
                              var disabled = $("#savein").prop('disabled');
                              var enabled = $("#submitin").prop('enabled');
                              var disabled = $("#prj1").prop('disabled');
                              var disabled = $("#prj2").prop('disabled');
                              var disabled = $("#prj3").prop('disabled');
                              var disabled = $("#a1").prop('disabled');
                              var disabled = $("#b1").prop('disabled');
                              var disabled = $("#c1").prop('disabled');
                              var disabled = $("#d1").prop('disabled');
                              var disabled = $("#e1").prop('disabled');
                              var disabled = $("#a2").prop('disabled');
                              var disabled = $("#b2").prop('disabled');
                              var disabled = $("#c2").prop('disabled');
                              var disabled = $("#d2").prop('disabled');
                              var disabled = $("#e2").prop('disabled');
                              var disabled = $("#a3").prop('disabled');
                              var disabled = $("#b3").prop('disabled');
                              var disabled = $("#c3").prop('disabled');
                              var disabled = $("#d3").prop('disabled');
                              var disabled = $("#e3").prop('disabled');
                              var disabled = $("#a4").prop('disabled');
                              var disabled = $("#b4").prop('disabled');
                              var disabled = $("#c4").prop('disabled');
                              var disabled = $("#e4").prop('disabled');
                              var disabled = $("#d4").prop('disabled');
                              var disabled = $("#g4").prop('disabled');
                              var disabled = $("#l1").prop('disabled');
                              var disabled = $("#m1").prop('disabled');
                              var disabled = $("#n1").prop('disabled');
                              var disabled = $("#o1").prop('disabled');
                              var disabled = $("#p1").prop('disabled');
                              var disabled = $("#u1").prop('disabled');
                              var disabled = $("#v1").prop('disabled');
                              var disabled = $("#w1").prop('disabled');
                              var disabled = $("#x1").prop('disabled');
                              var disabled = $("#y1").prop('disabled');
                              var disabled = $("#u2").prop('disabled');
                              var disabled = $("#v2").prop('disabled');
                              var disabled = $("#w2").prop('disabled');
                              var disabled = $("#x2").prop('disabled');
                              var disabled = $("#y2").prop('disabled');
                      
                              if (disabled) {
                                $("#a1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#a1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#b1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#b1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#c1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#c1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#d1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#d1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#e1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#e1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#a2").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#a2").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#b2").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#b2").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#c2").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#c2").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#d2").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#d2").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#e2").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#e2").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#a3").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#a3").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#b3").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#b3").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#c3").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#c3").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#d3").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#d3").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#e3").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#e3").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#a4").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#a4").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#b4").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#b4").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#c4").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#c4").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#d4").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#d4").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#e4").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#e4").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#prj1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#prj1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#prj2").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#prj2").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#prj3").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#prj3").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#g4").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#g4").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#savein").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#savein").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#l1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#l1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#m1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#m1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#n1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#n1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#o1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#o1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#p1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#p1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#u1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#u1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#v1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#v1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#w1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#w1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#x1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#x1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#y1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#y1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#u2").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#u2").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#v2").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#v2").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#w2").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#w2").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#x2").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#x2").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#y2").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#y2").prop('disabled', true); // if enabled, disable
                              }

                            })
                          });
                        </script>
                        <script>
                          $(document).ready(function() {
                            $('#submit').click(function() {
                              var disabled = $("#savein").prop('disabled');
                              var disabled = $("#cancelin").prop('disabled');
                              var enabled = $("#submitin").prop('enabled');
                              var disabled = $("#prj1").prop('disabled');
                              var disabled = $("#prj2").prop('disabled');
                              var disabled = $("#prj3").prop('disabled');
                              var disabled = $("#a1").prop('disabled');
                              var disabled = $("#b1").prop('disabled');
                              var disabled = $("#c1").prop('disabled');
                              var disabled = $("#d1").prop('disabled');
                              var disabled = $("#e1").prop('disabled');
                              var disabled = $("#a2").prop('disabled');
                              var disabled = $("#b2").prop('disabled');
                              var disabled = $("#c2").prop('disabled');
                              var disabled = $("#d2").prop('disabled');
                              var disabled = $("#e2").prop('disabled');
                              var disabled = $("#a3").prop('disabled');
                              var disabled = $("#b3").prop('disabled');
                              var disabled = $("#c3").prop('disabled');
                              var disabled = $("#d3").prop('disabled');
                              var disabled = $("#e3").prop('disabled');
                              var disabled = $("#a4").prop('disabled');
                              var disabled = $("#b4").prop('disabled');
                              var disabled = $("#c4").prop('disabled');
                              var disabled = $("#e4").prop('disabled');
                              var disabled = $("#d4").prop('disabled');
                              var disabled = $("#g4").prop('disabled');
                              var disabled = $("#l1").prop('disabled');
                              var disabled = $("#m1").prop('disabled');
                              var disabled = $("#n1").prop('disabled');
                              var disabled = $("#o1").prop('disabled');
                              var disabled = $("#p1").prop('disabled');
                              var disabled = $("#u1").prop('disabled');
                              var disabled = $("#v1").prop('disabled');
                              var disabled = $("#w1").prop('disabled');
                              var disabled = $("#x1").prop('disabled');
                              var disabled = $("#y1").prop('disabled');
                              var disabled = $("#u2").prop('disabled');
                              var disabled = $("#v2").prop('disabled');
                              var disabled = $("#w2").prop('disabled');
                              var disabled = $("#x2").prop('disabled');
                              var disabled = $("#y2").prop('disabled');
                              if (disabled) {
                                $("#a1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#a1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#b1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#b1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#c1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#c1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#d1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#d1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#e1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#e1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#a2").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#a2").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#b2").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#b2").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#c2").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#c2").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#d2").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#d2").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#e2").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#e2").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#a3").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#a3").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#b3").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#b3").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#c3").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#c3").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#d3").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#d3").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#e3").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#e3").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#a4").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#a4").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#b4").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#b4").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#c4").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#c4").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#d4").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#d4").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#e4").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#e4").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#prj1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#prj1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#prj2").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#prj2").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#prj3").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#prj3").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#g4").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#g4").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#savein").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#savein").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#cancelin").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#cancelin").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#l1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#l1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#m1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#m1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#n1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#n1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#o1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#o1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#p1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#p1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#u1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#u1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#v1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#v1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#w1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#w1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#x1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#x1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#y1").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#y1").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#u2").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#u2").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#v2").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#v2").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#w2").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#w2").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#x2").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#x2").prop('disabled', true); // if enabled, disable
                              }
                              if (disabled) {
                                $("#y2").prop('disabled', false); // if disabled, enable
                              } else {
                                $("#y2").prop('disabled', true); // if enabled, disable
                              }

                            })
                          });
                        </script>








                        <script>
                          //AddExpense
                          $("#timesheet").submit(function(e) {
                            e.preventDefault(); // avoid to execute the actual submit of the form.
                            // alert("1");
                            let myform = document.getElementById("timesheet");
                            let fd = new FormData(myform);
                            $.ajax({
                              method: "POST",
                              dataType: "json",
                              url: "uploadTimesheet.php",
                              data: fd, // serializes the form's elements.
                              processData: false,
                              contentType: false,
                              success: function(data) {
                                if (data == 1) {
                                  Swal.fire({
                                    icon: "success",
                                    text: "Timesheet added...",
                                    type: "success",
                                    timer: 2000,
                                    showConfirmButton: false
                                  })
                                  setTimeout(function() {
                                    location.reload();
                                  }, 1000);
                                } else if (data == 2) {
                                  Swal.fire({
                                    type: "Error!",
                                    text: 'Redundant...',
                                    icon: 'error'
                                  })
                                } else {
                                  Swal.fire({
                                    type: "Error!",
                                    text: 'Try again later...',
                                    icon: 'error'
                                  })
                                }
                              }
                            });
                          });
                        </script>



                       

                        <!-- <script> 
jQuery(document).ready(function ($) {

$("#timesheet").submit(function (event) {
            event.preventDefault();
            //validation for login form
    $("#progress").html('Inserting <i class="fa fa-spinner fa-spin" aria-hidden="true"></i></span>');

        var formData = new FormData($(this)[0]);
        $.ajax({
            url: 'timesheet.php',
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
                                </script> -->
                  </div>
                </div>
              </div>

          </div>
          <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
    </div>
    </div>
    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Jaam</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://dcc.technology/">DCE TECHNOLOGY</a>
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

  <script src="./assets/js/ajax.js"></script>
  <script>
    $(document).ready(function() {
      var date_input = $('input[name="date"]'); //our date input has the name "date"
      var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
      var options = {
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
  </script>

  <script>
    $(document).ready(function() {
      var date_input = $('input[name="date"]'); //our date input has the name "date"
      var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
      date_input.datepicker({
        format: 'dd/mm/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      })
    })
  </script>
  <script>
    function startCalc() {
      interval = setInterval("calc()", 1);
    }

    function calc() {
      one = document.SumForm.a1.value;
      two = document.SumForm.a2.value;
      three = document.SumForm.a3.value;

      document.SumForm.a4.value = (one * 1) + (two * 1) + (three * 1);
      four = document.SumForm.b1.value;
      five = document.SumForm.b2.value;
      six = document.SumForm.b3.value;

      document.SumForm.b4.value = (four * 1) + (five * 1) + (six * 1);
      seven = document.SumForm.c1.value;
      eight = document.SumForm.c2.value;
      nine = document.SumForm.c3.value;

      document.SumForm.c4.value = (seven * 1) + (eight * 1) + (nine * 1);
      ten = document.SumForm.d1.value;
      eleven = document.SumForm.d2.value;
      twelve = document.SumForm.d3.value;

      document.SumForm.d4.value = (ten * 1) + (eleven * 1) + (twelve * 1);
      thirteen = document.SumForm.e1.value;
      fourteen = document.SumForm.e2.value;
      fifteen = document.SumForm.e3.value;

      document.SumForm.e4.value = (thirteen * 1) + (fourteen * 1) + (fifteen * 1);

      i = document.SumForm.a4.value;
      j = document.SumForm.b4.value;
      k = document.SumForm.c4.value;
      l = document.SumForm.d4.value;
      m = document.SumForm.e4.value;

      document.SumForm.g4.value = (i * 1) + (j * 1) + (k * 1) + (l * 1) + (m * 1);



    }

    function stpCalc() {
      clearInterval(interval);
    }
  </script>

<script>function calc() {
  var l1 = document.getElementById("l1").value;
  var l1 = parseInt(l1, 10);
  var m1 = document.getElementById("m1").value;
  var m1 = parseInt(m1, 10);
  var n1 = document.getElementById("n1").value;
  var n1 = parseInt(n1, 10);
  var o1 = document.getElementById("o1").value;
  var o1 = parseInt(o1, 10); 
  var p1 = document.getElementById("p1").value;
  var p1 = parseInt(p1, 10);
  var l2 = l1;
  var m2 = m1;
  var n2 = n1;
  var o2 = o1;
  var p2 = p1;
  document.getElementById("l2").value = l2;
  document.getElementById("m2").value = m2;
  document.getElementById("n2").value = n2;
  document.getElementById("o2").value = o2;
  document.getElementById("p2").value = p2;
  var l2 = document.getElementById("l2").value;
  var l2 = parseInt(l2, 10);
  var m2 = document.getElementById("m2").value;
  var m2 = parseInt(m2, 10);
  var n2 = document.getElementById("n2").value;
  var n2 = parseInt(n2, 10);
  var o2 = document.getElementById("o2").value;
  var o2 = parseInt(o2, 10); 
  var p2 = document.getElementById("p2").value;
  var p2 = parseInt(p2, 10);
  var q2 = l2+m2+n2+o2+p2;
  document.getElementById("q2").value = q2;
}</script>

<script>function calci() {
  var u1 = document.getElementById("u1").value;
  var u1 = parseInt(u1, 10);
  var v1 = document.getElementById("v1").value;
  var v1 = parseInt(v1, 10);
  var w1 = document.getElementById("w1").value;
  var w1 = parseInt(w1, 10);
  var x1 = document.getElementById("x1").value;
  var x1 = parseInt(x1, 10); 
  var y1 = document.getElementById("y1").value;
  var y1 = parseInt(y1, 10);
  var u2 = document.getElementById("u2").value;
  var u2 = parseInt(u2, 10);
  var v2 = document.getElementById("v2").value;
  var v2 = parseInt(v2, 10);
  var w2 = document.getElementById("w2").value;
  var w2 = parseInt(w2, 10);
  var x2 = document.getElementById("x2").value;
  var x2 = parseInt(x2, 10); 
  var y2 = document.getElementById("y2").value;
  var y2 = parseInt(y2, 10);
  var u3 = u1+u2;
  var v3 = v1+v2;
  var w3 = w1+w2;
  var x3 = x1+x2;
  var y3 = y1+y2;
  document.getElementById("u3").value = u3;
  document.getElementById("v3").value = v3;
  document.getElementById("w3").value = w3;
  document.getElementById("x3").value = x3;
  document.getElementById("y3").value = y3;
  var u3 = document.getElementById("u3").value;
  var u3 = parseInt(u3, 10);
  var v3 = document.getElementById("v3").value;
  var v3 = parseInt(v3, 10);
  var w3 = document.getElementById("w3").value;
  var w3 = parseInt(w3, 10);
  var x3 = document.getElementById("x3").value;
  var x3 = parseInt(x3, 10); 
  var y3 = document.getElementById("y3").value;
  var y3 = parseInt(y3, 10);
  var z3 = u3+v3+w3+x3+y3;
  document.getElementById("z3").value = z3;
}</script>
  
</body>

</html>