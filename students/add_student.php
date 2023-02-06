<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        <!-- sidebar -->

        <?php
          include "../inc/sidebar.php"; 
        ?>

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">

                <!-- Basic Tables start -->

                <!-- Striped rows start -->
                <section class="section">
                    <div class="row" id="table-striped">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom  py-2">
                                    <h4 class="card-title d-flex mb-0 align-items-center justify-content-between">New Student
                                        <a href="../dashbord.php" class="btn btn-sm btn-danger">Back </a>
                                    </h4>
                                </div>
                                <div class="card-content px-4 pb-3">
                                    <div class="card-body">
                                        <form class="form form-vertical">
                                                <div class="row">
                                                <h4>Student Information:</h4>
                                                    <div class="col-8">
                                                        <div class="form-group">
                                                            <label for="student-name-vertical">Student Name</label>
                                                            <input type="text" id="student-name-vertical" class="form-control" name="fname" placeholder="Student Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="father's-name-vertical">Father's Name</label>
                                                            <input type="text" id="father's-name-vertical" class="form-control" name="fname" placeholder="Father's Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mother's-name-vertical">Mother's Name</label>
                                                            <input type="text" id="mother's-name-vertical" class="form-control" name="fname" placeholder="Mother's Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="date-name-vertical">Date of Birth</label>
                                                            <input type="date" id="date-name-vertical" class="form-control" name="fname">
                                                        </div>
                                                        <h4>Contact Information:</h4>
                                                        <div class="form-group">
                                                            <label for="email-id-vertical">Email</label>
                                                            <input type="email" id="email-id-vertical" class="form-control" name="email-id" placeholder="Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="contact-info-vertical">Mobile</label>
                                                            <input type="number" id="contact-info-vertical" class="form-control" name="contact" placeholder="Mobile">
                                                        </div>
                                                        <label for="" class="d-block">Gender</label>
                                                        <div class="d-flex align-items-center">
                                                            <div class="form-check form-group me-3">
                                                                <input class="form-check-input" type="radio" name="gender" id="male" >
                                                                <label class="form-check-label" for="male">
                                                                    Male
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-group me-3">
                                                                <input class="form-check-input" type="radio" name="gender" id="female" >
                                                                <label class="form-check-label" for="female">
                                                                    Female
                                                                </label>
                                                            </div>
                                                            <div class="form-check form-group">
                                                                <input class="form-check-input" type="radio" name="gender" id="others" >
                                                                <label class="form-check-label" for="others">
                                                                    Others
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label for="">District</label>                                                          
                                                            <select class="form-select" id="basicSelect">
                                                                <option>-- Select District</option>
                                                                <option>Bogura</option>
                                                                <option>Jamalpur</option>
                                                                <option>Sherpur</option>
                                                                <option>Vhola</option>
                                                                <option>Natore</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Board</label>                                                          
                                                            <select class="form-select" id="basicSelect">
                                                                <option>-- Select Board</option>
                                                                <option>Dhaka</option>
                                                                <option>Rajshahi</option>
                                                                <option>Sylhet</option>
                                                                <option>Mymensing</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row text-end">                                                  
                                                    <div>
                                                        <button type="reset" class="btn btn-danger btn-sm rounded-0 me-1 ">Reset</button>                                      
                                                        <button type="submit" class="btn btn-primary btn-sm rounded-0 me-1 ">Submit</button>
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Striped rows end -->
            </div>

        <!-- footer -->

        <?php
          include "../inc/footer.php"; 
        ?>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>