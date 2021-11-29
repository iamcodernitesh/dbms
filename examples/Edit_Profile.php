<?php
    include "config.php";
    session_start();
    $name = $_SESSION['name'];
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];

    
    if(!$_SESSION['auth'])
    {
        header('location:./Login/index.php');
    }

    else
    {
        if($_POST)
        {
            // Storing Basic information 
            $address = $_POST['address'];
            $city = $_POST['city'];
            $country = $_POST['country'];
            $postalCode = $_POST['postalCode'];
            $dob = $_POST['dob'];
            $birthPlace = $_POST['birth_place'];            
            $birthCountry = $_POST['birth_country'];
            $email = $_POST['email'];
            $secondEmail = $_POST['second_email'];
            $phoneNo = $_POST['phoneNo'];
            $bloodGrp = $_POST['bloodGrp'];
            $aadharNo = $_POST['aadharNo'];
            $motherTongue = $_POST['motherTongue'];
            $maritalStatus = $_POST['maritalStatus'];
            $panNumber = $_POST['panNumber'];
            $nationality = $_POST['nationality'];
            $gender = $_POST['gender'];

            //Storing SSC Details
           $seat_no = $_POST['seat_no'];
           $pass_year = $_POST['pass_year'];
           $ins_name = $_POST['ins_name'];
           $board_name = $_POST['board_name'];
           $marks_obtained = $_POST['marks_obtained'];
           $total_marks = $_POST['total_marks'];
           $percentage = $_POST['percentage'];

           //Storing HSC details
           $h_seat_no = $_POST['h_seat_no'];
           $h_pass_year = $_POST['h_pass_year'];
           $h_ins_name = $_POST['h_ins_name'];
           $h_board_name = $_POST['h_board_name'];
           $h_marks_obtained = $_POST['h_marks_obtained'];
           $h_total_marks = $_POST['h_total_marks'];
           $h_percentage = $_POST['h_percentage'];


        //    Storing current address 
            $c_address = $_POST['c_address'];
            $c_city = $_POST['c_city'];
            $c_district = $_POST['c_district'];
            $c_state = $_POST['c_state'];
            $c_country= $_POST['c_country'];
            $c_pincode = $_POST['c_pincode'];

        //  Guardian details
            $g_name = $_POST['g_name'];
            $g_phoneNo = $_POST['g_phoneNo'];
            $g_address = $_POST['g_address'];
            $g_city = $_POST['g_city'];
            $g_state = $_POST['g_state'];
            $g_country= $_POST['g_country'];
            $g_district= $_POST['g_district'];
            $g_pincode = $_POST['g_pincode'];

            $conn = mysqli_connect($host,$user,$pass,$db);
            
            // Insert query for storing basic information in the database
            $query = "INSERT  into basicInformation(gr_no,address,city,country,postalCode,dob,birth_place,birth_country,email,
            second_email,phoneNo,bloodGrp,aadharNo,motherTongue,martialStatus,panNumber,nationality,gender)
            values('$username','$address','$city','$country','$postalCode','$dob','$birthPlace','$birthCountry','$email',
            '$secondEmail','$phoneNo','$bloodGrp','$aadharNo','$motherTongue','$maritalStatus','$panNumber','$nationality','$gender')
             ";

           

            // Insert query for storing Ssc details in the database
            $query1 = "INSERT  into ssc_details(gr_no,seat_no,pass_year,ins_name
            ,board_name,marks_obtained,total_marks,percentage) 
            values('$username','$seat_no','$pass_year','$ins_name','$board_name','$marks_obtained','$total_marks','$percentage') 
           ";


            //Insert query for storing HSC details in the database
            $query2 = "INSERT  into hsc_details(gr_no,seat_no,pass_year,ins_name
            ,board_name,marks_obtained,total_marks,percentage) 
            values('$username','$h_seat_no','$h_pass_year','$h_ins_name','$h_board_name','$h_marks_obtained','$h_total_marks','$h_percentage') 
           ";

            //Insert query for storing contact details in the database
            $query3 = "INSERT  into contact_details(gr_no,address,city,district
            ,state,country,pincode) 
            values('$username','$c_address','$c_city','$c_district','$c_state','$c_country','$c_pincode') 
            ";


             //Insert query for storing guardian details in the database
            $query4 = "INSERT  into guardian_details(gr_no,name,phoneNo,address,city,district,state,country,pincode) 
            values('$username','$g_name','$g_phoneNo','$g_address','$g_city','$g_district','$g_state','$g_country','$g_pincode') 
            ";

            $result = mysqli_query($conn,$query);
            $result1 = mysqli_query($conn,$query1);
            $result2 = mysqli_query($conn,$query2);
            $result3 = mysqli_query($conn,$query3);
            $result4 = mysqli_query($conn,$query4);
           
            $conn->close();
    
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Students Profile</title>
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
    <?php include "user_side_navbar.php" ?>
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
                                <h4 class="card-title"> </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">

                                </div>
                            </div>
                        </div>
                    </div>                   

                    <div class="card-header">
                        <h4 class="card-title"> Student's Profile</h4>
                    </div>

                    <form method="post">
                        <div class="row">
                            <div class="col-md-5 pr-1">
                                <div class="form-group">
                                    <label>College (disabled)</label>
                                    <input type="text" class="form-control" disabled="" placeholder="College"
                                        value="BRACT'S VIIT">
                                </div>
                            </div>
                            <div class="col-md-3 px-1">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" disabled="" placeholder="Username" value="<?php echo $username ?>">
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" placeholder="Email" value="<?php echo $email ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" disabled="" value="<?php echo $name ?>">
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
                                    <input type="text" class="form-control" placeholder="Home Address" name="address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" placeholder="City" name="city">
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" placeholder="Country" name="country">
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Postal Code</label>
                                    <input type="number" class="form-control" placeholder="ZIP Code" name="postalCode">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>Date Of Birth</label>
                                    <input type="date" class="form-control" placeholder="DOB" name="dob">
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Birth Place</label>
                                    <input type="text" class="form-control" placeholder="Birth Place" name="birth_place">
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Birth Country</label>
                                    <input type="text" class="form-control" placeholder="Birth Country" name="birth_country">
                                </div>
                            </div>
                        </div><br>
                                              
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Email </label>
                                    <input type="email" class="form-control" placeholder="Primary Email" name="email">
                                </div>
                            </div>
                            <div class="col-md-6 px-1">
                                <div class="form-group">
                                    <label>Email (secondary)</label>
                                    <input type="email" class="form-control" placeholder="Secondary Email" name="second_email">
                                </div>
                            </div>
                          
                        </div>
                       

                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="number" class="form-control" placeholder="Phone" name="phoneNo">
                                </div>
                            </div>                            
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>Blood Group</label>
                                    <select class="form-select form-control" aria-label="Default select example" name="bloodGrp"> 
                                        <option selected>Choose</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select>
                                </div>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>Aadhar Number</label>
                                    <input type="number" min="100000000000"class="form-control" placeholder="Aadhar number" name="aadharNo">
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Nationality</label>
                                    <input type="text" class="form-control" placeholder="Nationality" name="nationality">
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Mother Tongue</label>
                                    <input type="text" class="form-control" placeholder="Mother Tongue" name="motherTongue">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="form-select form-control" aria-label="Default select example" name="gender"> 
                                        <option selected>Choose</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Marital Status</label>
                                    <select class="form-select form-control" aria-label="Default select example" name="maritalStatus"> 
                                        <option selected>Choose</option>
                                        <option value="Married">Married</option>
                                        <option value="Single">Single</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Pan Number</label>
                                    <input type="text" class="form-control" placeholder="Pan Number" name="panNumber">
                                </div>
                            </div>
                        </div><br><br>
                        <h2 class="card-title"> Educational Details</h2>
                        <h4>SSC Details</h4>
                        <div class="row">
                            
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Seat Number</label>
                                    <input type="text" class="form-control" placeholder="Seat Number" name="seat_no">
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>Passing Year</label>
                                    <input type="number" class="form-control" placeholder="Passing Year" name="pass_year">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Name of Institute</label>
                                    <input type="text" class="form-control" placeholder="Name of Institute" name="ins_name">
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>Name of Board</label>
                                    <input type="text" class="form-control" placeholder="Name of Board" name="board_name">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>Marks Obtained</label>
                                    <input type="number" class="form-control" placeholder="Marks Obtained" name="marks_obtained"> 
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Total Marks</label>
                                    <input type="text" class="form-control" placeholder="Total Marks" name="total_marks">
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Percentage</label>
                                    <input type="text" class="form-control" placeholder="Percentage" name="percentage">
                                </div>
                            </div>
                        </div>



                        <h4>HSC Details</h4>
                        <div class="row">
                            
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Seat Number</label>
                                    <input type="text" class="form-control" placeholder="Seat Number" name="h_seat_no">



                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>Passing Year</label>
                                    <input type="number" class="form-control" placeholder="Passing Year" name="h_pass_year">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Name of Institute</label>
                                    <input type="text" class="form-control" placeholder="Name of Institute" name="h_ins_name">
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>Name of Board</label>
                                    <input type="text" class="form-control" placeholder="Name of Board" name="h_board_name">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>Marks Obtained</label>
                                    <input type="number" class="form-control" placeholder="Marks Obtained" name="h_marks_obtained">
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Total Marks</label>
                                    <input type="text" class="form-control" placeholder="Total Marks" name="h_total_marks">
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Percentage</label>
                                    <input type="text" class="form-control" placeholder="Percentage" name="h_percentage">
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
                                    <input type="text" class="form-control" placeholder="Home Address" name="c_address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" placeholder="City" name="c_city">
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>District</label>
                                    <input type="text" class="form-control" placeholder="District" name="c_district">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="number" class="form-control" placeholder="State" name="c_state">
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" placeholder="Country" name="c_country">
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Pincode</label>
                                    <input type="text" class="form-control" placeholder="Pincode" name="c_pincode">
                                </div>
                            </div>
                        </div>

                        <h4>Guardian Details</h4>

                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Guardian Name</label>
                                    <input type="text" class="form-control" placeholder="Guardian Name" name="g_name">
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>Guardian Phone No</label>
                                    <input type="number" class="form-control" placeholder="Phone No" name="g_phoneNo">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" placeholder="Home Address" name="g_address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" placeholder="City" name="g_city">
                                </div>
                            </div>                            
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>District</label>
                                    <input type="text" class="form-control" placeholder="District" name="g_district">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" class="form-control" placeholder="State" name="g_state">
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" placeholder="Country" name="g_country">
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Pincode
                                    </label>
                                    <input type="text" class="form-control" placeholder="Pincode" name="g_pincode">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-info" type="submit" onclick="demo.showNotification('bottom','left')">Submit</button>
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