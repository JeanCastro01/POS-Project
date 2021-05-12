<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RC-POS - Update Staff</title>
    <link href="../src/css/bootstrap.css" rel="stylesheet">
    <link href="../src/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="../src/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../src/css/styles.css" rel="stylesheet">
</head>

<body id="page-top">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
        <a class="navbar-brand mr-1" href="../src/index.php">CCT POS</a>
        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fa fa-bars"></i>
        </button>

    </nav>
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="sidebar navbar-nav active">

            <li class="nav-item">
                <a class="nav-link" href="../src/staff.php">
                    <i class="fa fa-chevron-circle-left"></i>
                    <span>Back</span>
                </a>
            </li>

        </ul>

                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title" id="exampleModalLabel">
                                <i class="fa fa-address-card"></i> Update Staff
                            </h5>
                            <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form class="">
                            <div class="modal-body">
                                <div class="form-group">
                                    <labe>First Name</label>
                                        <input type="text" class="form-control" name="" value=""
                                            placeholder="Enter first name here..." required>

                                </div>

                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="" value=""
                                        placeholder="Enter last name here..." required>

                                </div>

                                <div class="form-group">
                                    <label for="">Role</label>
                                    <input type="text" class="form-control" name="" value=""
                                        placeholder="Enter role here..." required>

                                </div>

                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="" value=""
                                        placeholder="Enter username here..." required>

                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="" value=""
                                        placeholder="Enter password here..." required>

                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <input type="submit" class="btn btn-primary" value="Update">
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
        
        <script src="../src/js/jquery.min.js"></script>
        <script src="../src/js/bootstrap.bundle.min.js"></script>
        <script src="../src/js/jquery.easing.min.js"></script>
        <script src="../src/js/chart.min.js"></script>
        <script src="../src/js/rc-pos.min.js"></script>
        <script src="../src/js/chart-area-demo.js"></script>
</body>

</html>