<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Remove Students</title>
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
                    <h2 class="title">Remove Students From Institute</h2>
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
                            <div class="card-header">
                                <h4 class="card-title">Remove Students</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>Student Name</label>
                                            <input type="text" class="form-control"  placeholder="Enter Full Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-1">
                                        <div class="form-group">
                                            <label>Roll Number</label>
                                            <input type="text" class="form-control"  placeholder="Enter Roll Number" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label>GR Number</label>
                                            <input type="text" class="form-control"  placeholder="Enter General Register Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-1">
                                        <div class="form-group">
                                            <label>Email Id</label>
                                            <input type="text" class="form-control"  placeholder="Enter valid Email ID" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-success btn-block" onclick="demo.showNotification('bottom','left')">Remove Student</button>
                                </div>
                            </div>
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