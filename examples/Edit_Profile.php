<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Edit Profile</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
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
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> Edit Profile</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">

                                </div>
                            </div>
                        </div>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-md-5 pr-1">
                                <div class="form-group">
                                    <label>College (disabled)</label>
                                    <input type="text" class="form-control" disabled="" placeholder="College" value="BRACT'S VIIT">
                                </div>
                            </div>
                            <div class="col-md-3 px-1">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" placeholder="Username" >
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" disabled="" placeholder="Company" >
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" disabled="" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" placeholder="Home Address" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" placeholder="City">
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" placeholder="Country">
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Postal Code</label>
                                    <input type="number" class="form-control" placeholder="ZIP Code">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>Date Of Birth</label>
                                    <input type="date" class="form-control" placeholder="DOB">
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Birth Place</label>
                                    <input type="text" class="form-control" placeholder="Birth Place" >
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Birth Country</label>
                                    <input type="number" class="form-control" placeholder="Birth Country">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>Birth State</label>
                                    <input type="text" class="form-control" placeholder="Birth State">
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Birth District</label>
                                    <input type="text" class="form-control" placeholder="Birth District">
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Birth Certificate Number</label>
                                    <input type="number" class="form-control" placeholder="Birth Certificate No">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>Native Place</label>
                                    <input type="text" class="form-control" placeholder="Native Place">
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Native State</label>
                                    <input type="text" class="form-control" placeholder="Native State" >
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Native Country</label>
                                    <input type="number" class="form-control" placeholder="Native Country">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>Email (primary)</label>
                                    <input type="email" class="form-control" placeholder="Primary Email">
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Email (secondary)</label>
                                    <input type="email" class="form-control" placeholder="Secondary Email" >
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Email Official</label>
                                    <input type="number" class="form-control" placeholder="Official Email">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>Caste</label>
                                    <input type="text" class="form-control" placeholder="Caste">
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Subcaste</label>
                                    <input type="text" class="form-control" placeholder="Subcaste" >
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Religion</label>
                                        <input type="text" class="form-control" placeholder="Religion">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="number" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Category</label>
                                    <input type="email" class="form-control" placeholder="Category" >
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Blood Group</label>
                                    <input type="number" class="form-control" placeholder="Blood Group">
                                </div>
                            </div>
                        </div>

                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Aadhar Number</label>
                                        <input type="number" class="form-control" placeholder="Aadhar number">
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Nationality</label>
                                        <input type="text" class="form-control" placeholder="Nationality" >
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Mother Tongue</label>
                                        <input type="text" class="form-control" placeholder="Mother Tongue">
                                    </div>
                                </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <input type="number" class="form-control" placeholder="Gender">
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Marital Status</label>
                                        <input type="text" class="form-control" placeholder="Marital Status" >
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Pan Number</label>
                                        <input type="text" class="form-control" placeholder="Pan Number">
                                    </div>
                                </div>
                            </div><br><br>
                            <h2 class="card-title"> Educational Details</h2>
                            <h4>SSC Details</h4>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Examination</label>
                                        <input type="text" class="form-control" placeholder="Examination" >
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Seat Number</label>
                                        <input type="text" class="form-control" placeholder="Seat Number">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Passing Year</label>
                                        <input type="number" class="form-control" placeholder="Passing Year">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Name of Institute</label>
                                        <input type="text" class="form-control" placeholder="Name of Institute" >
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Name of Board</label>
                                        <input type="text" class="form-control" placeholder="Name of Board">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Marks Obtained</label>
                                        <input type="number" class="form-control" placeholder="Marks Obtained">
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Total Marks</label>
                                        <input type="text" class="form-control" placeholder="Total Marks" >
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Percentage</label>
                                        <input type="text" class="form-control" placeholder="Percentage">
                                    </div>
                                </div>
                            </div>



                            <h4>HSC Details</h4>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Examination</label>
                                        <input type="text" class="form-control" placeholder="Examination" >
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Seat Number</label>
                                        <input type="text" class="form-control" placeholder="Seat Number">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Passing Year</label>
                                        <input type="number" class="form-control" placeholder="Passing Year">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Name of Institute</label>
                                        <input type="text" class="form-control" placeholder="Name of Institute" >
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Name of Board</label>
                                        <input type="text" class="form-control" placeholder="Name of Board">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Marks Obtained</label>
                                        <input type="number" class="form-control" placeholder="Marks Obtained">
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Total Marks</label>
                                        <input type="text" class="form-control" placeholder="Total Marks" >
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Percentage</label>
                                        <input type="text" class="form-control" placeholder="Percentage">
                                    </div>
                                </div>
                            </div>


                            <h4>Diploma Details</h4>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Examination</label>
                                        <input type="text" class="form-control" placeholder="Examination" >
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Seat Number</label>
                                        <input type="text" class="form-control" placeholder="Seat Number">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Passing Year</label>
                                        <input type="number" class="form-control" placeholder="Passing Year">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Name of Institute</label>
                                        <input type="text" class="form-control" placeholder="Name of Institute" >
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Name of Board</label>
                                        <input type="text" class="form-control" placeholder="Name of Board">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Marks Obtained</label>
                                        <input type="number" class="form-control" placeholder="Marks Obtained">
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Total Marks</label>
                                        <input type="text" class="form-control" placeholder="Total Marks" >
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Percentage</label>
                                        <input type="text" class="form-control" placeholder="Percentage">
                                    </div>
                                </div>
                            </div>


                            <h4>MHT CET Details</h4>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Examination</label>
                                        <input type="text" class="form-control" placeholder="Examination" >
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Seat Number</label>
                                        <input type="text" class="form-control" placeholder="Seat Number">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Passing Year</label>
                                        <input type="number" class="form-control" placeholder="Passing Year">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>Marks Obtained</label>
                                        <input type="number" class="form-control" placeholder="Marks Obtained">
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Total Marks</label>
                                        <input type="text" class="form-control" placeholder="Total Marks" >
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Percentage</label>
                                        <input type="text" class="form-control" placeholder="Percentage">
                                    </div>
                                </div>
                            </div>
                            
                            
                            <br><br>
                            <h2>Contact Details</h2>
                            <h4>Current Address</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" placeholder="Home Address" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="number" class="form-control" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Taluka</label>
                                        <input type="text" class="form-control" placeholder="Taluka" >
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>District</label>
                                        <input type="text" class="form-control" placeholder="District">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="number" class="form-control" placeholder="State">
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control" placeholder="Country" >
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Pincode
                                        </label>
                                        <input type="text" class="form-control" placeholder="Pincode">
                                    </div>
                                </div>
                            </div>


                            <h4>Permenant Address</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" placeholder="Home Address" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="number" class="form-control" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Taluka</label>
                                        <input type="text" class="form-control" placeholder="Taluka" >
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>District</label>
                                        <input type="text" class="form-control" placeholder="District">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="number" class="form-control" placeholder="State">
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control" placeholder="Country" >
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Pincode
                                        </label>
                                        <input type="text" class="form-control" placeholder="Pincode">
                                    </div>
                                </div>
                            </div>

                            <h4>Gurdian Details</h4>

                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Guardian Name</label>
                                        <input type="text" class="form-control" placeholder="Guardian Name" >
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Guardian Phone No</label>
                                        <input type="number" class="form-control" placeholder="Phone No">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" placeholder="Home Address" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="number" class="form-control" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Taluka</label>
                                        <input type="text" class="form-control" placeholder="Taluka" >
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>District</label>
                                        <input type="text" class="form-control" placeholder="District">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="number" class="form-control" placeholder="State">
                                    </div>
                                </div>
                                <div class="col-md-4 px-1">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control" placeholder="Country" >
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Pincode
                                        </label>
                                        <input type="text" class="form-control" placeholder="Pincode">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- <div class="form-group">
                                    <label>About Me</label>
                                    <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                </div> -->
                            </div>
                        </div>
                    </form>
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
