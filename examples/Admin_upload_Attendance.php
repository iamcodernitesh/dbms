<?php

    session_start();

    if(!$_SESSION['admin'])
    {
        header('location:./Login/index.php');
    }

    
    if($_POST)
    {
        include "config.php";
        $gr_no = $_POST['gr_no'];       
        $attendance = $_POST['attendance'];
       

        

        $conn = mysqli_connect($host,$user,$pass,$db);
	    $query = "INSERT into  attendance_details(gr_no,attendance) values('$gr_no','$attendance')";

        if(mysqli_query($conn, $query)){
            echo '<script> alert(" Added Successfully") </script> ' ;
            
        } else{
            echo '<script> alert("ERROR: Could not able to execute $query.".mysqli_error($conn)") </script>' ;
        }
          
          $conn->close();

    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Upload Attendance</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
    <?php include "wrapper.php" ?>
        <div class="main-panel">
            <!-- Navbar -->
            <?php include "side_navbar.php" ?>
            <!-- End Navbar -->
            <div class="panel-header">
                <div class="header text-center">
                    <h2 class="title">Fill Student Attendance</h2>
                    <!-- <p class="category">Handcrafted by our friend
                        <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. Please checkout the
                        <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">full documentation.</a>
                    </p> -->
                </div>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form method="post">
                            <div class="card-header">
                                <h4 class="card-title">Insert Student Attendance</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>General Register Number</label>
                                            <input type="text" class="form-control"  placeholder="GR Number" value="21910" name="gr_no">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-1">
                                        <div class="form-group">
                                            <label>Attendance In Percentage(%)</label>
                                            <input type="text" class="form-control"  placeholder="Insert Attendance in Percentage" name="attendance">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-success" type="submit">Insert</button>
                                </div>
                            
                            </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul>
                            <li>
                                <a href="">
                                    NBA'S
                                </a>
                            </li>
                            <!-- <li>
                                <a href="">
                                    About Us
                                </a>
                            </li> -->
                            <!-- <li>
                                <a href="">
                                    Blog
                                </a>
                            </li> -->
                        </ul>
                    </nav>
                    <div class="copyright">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, Designed by
                        <a href="" target="_blank">VIIT</a>. Coded by
                        <a href="" target="_blank">NBA'S</a>.
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-dashboard.js?v=1.0.1"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>

</html>