<!---------------------------------------------------Calling Header ---------------------------------------------------------------------->
<?php

$title = "Retail Dashboard";

include '../includes/pageHeader.php';
?>
<div id="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="../src/index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Retail Dashboard</li>
        </ol>
        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xl-6 col-sm-12 mb-3">
                <div class="card o-hidden h-100">
                    <div class="card-header bg-primary text-white">
                        <h1>Revenue</h1>
                    </div>
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-money text-white"></i>
                        </div>
                        <div class="card-text text-center">
                            <span class="display-3"><strong>13.2</strong>k</span>
                            <small class="text-danger"> <strong>6%<i class="fa fa-arrow-down"></i> </strong></small>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-6 col-sm-12 mb-3">
                <div class="card o-hidden h-100">
                    <div class="card-header bg-warning text-white">
                        <h1>Sales Count</h1>
                    </div>
                    <div class="card-body">
                        <div class="card-body-icon text-white">
                            <i class="fa fa-fw fa-flash"></i>
                        </div>
                        <div class="card-text text-center">
                            <span class="display-3"><strong>17</strong></span>
                            <small class="text-primary"> <strong>26%<i class="fa fa-arrow-up"></i> </strong></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-sm-12 mb-3">
                <div class="card o-hidden h-100">
                    <div class="card-header bg-primary text-white">
                        <h1>Gross Profit</h1>
                    </div>
                    <div class="card-body">
                        <div class="card-body-icon text-white">
                            <i class="fa fa-fw fa-shopping-cart"></i>
                        </div>
                        <div class="card-text text-center">
                            <span class="display-3"><strong>8.2</strong>k</span>
                            <small class="text-danger"> <strong>3%<i class="fa fa-arrow-down"></i> </strong></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-sm-12 mb-3">
                <div class="card o-hidden h-100">
                    <div class="card-header bg-dark text-white">
                        <h1>Account</h1>
                    </div>
                    <div class="card-body">
                        <div class="card-body-icon text-white">
                            <i class="fa fa-fw fa-dollar"></i>
                        </div>
                        <div class="card-text text-center">
                            <span class="display-3"><strong>27.5</strong>k</span>
                            <small class="text-primary"> <strong>52%<i class="fa fa-arrow-up"></i> </strong></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a>
<!-- Modals -->
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- Add Product Modal-->
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">
                    <i class="fa fa-tag"></i> Add New Product
                </h5>
                <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form class="" method="POST" action="../includes/insertNewProduct.php">

                <div class="modal-body">

                    <div class="form-group">
                        <label class="form-label" for="customFile">Default file input example</label>
                        <input type="file" class="form-control" id="customFile" />
                    </div>

                    <div class="form-group">
                        <label for="">Type</label>
                        <input type="text" class="form-control" name="type" id="type" value=""
                            placeholder="Enter type..." required>
                    </div>
                    <div class="form-group">
                        <label for="">Brand</label>
                        <input type="text" class="form-control" name="brand" id="brand" value=""
                            placeholder="Enter brand..." required>
                    </div>
                    <div class="form-group">
                        <label for="">Colour</label>
                        <input type="text" class="form-control" name="colour" id="colour" value=""
                            placeholder="Enter colour..." required>


                    </div>
                    <div class="form-group">
                        <label for="">Size</label>
                        <input type="number" class="form-control" name="size" id="size" value=""
                            placeholder="Enter shoes size..." required>
                    </div>


                    <div class="form-group">
                        <label for="">Product Name</label>
                        <input type="text" class="form-control" name="name" id="name" value=""
                            placeholder="Enter product name..." required>
                        <small class="text-muted">Be more specific with product names. Make sure its
                            unique.</small>
                    </div>
                    <div class="form-group">
                        <label for="">Product Price <small class="text-muted">(cost/item)</small>
                        </label>
                        <input type="number" class="form-control" name="price" id="price" value=""
                            placeholder="Enter cost of product per item..." required>
                    </div>
                    <div class="form-group">
                        <label for="">Product Stock
                            <small>(Quantity)</small>
                        </label>
                        <input type="number" class="form-control" name="quantity" id="quantity" value=""
                            placeholder="Enter number of items..." required>
                        <small class="text-muted">This will be used as product quantity in stock keeping
                            unit.</small>
                    </div>
                    <div class="form-group">
                        <label for="">Description <small class="text-muted">(Optional)</small></label>
                        <textarea name="description" id="description" class="form-control" cols="80"
                            placeholder="Add some note or description about this product..."></textarea>
                    </div>

                    <small class="text-muted"><em>Please double check information before
                            submitting.</em></small>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <input type="submit" class="btn btn-primary" value="Add Product">
                </div>
            </form>
            <?php
// ---------------------------Alert Message so Admin knows what has been done------------------------------------------------------->

include '../includes/alertMessage.php'; 

?>
        </div>
    </div>
</div>

<!-- Add Product Staff Test-->
<div class="modal fade" id="addStaffModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">
                    <i class="fa fa-industry"></i> Add Staff
                </h5>
                <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form class="" method="POST" action="../includes/insertNewStaff.php">
                <div class="modal-body">
                    <div class="form-group">
                        <labe>First Name</label>
                            <input type="text" class="form-control" id="fname" name="fname" value=""
                                placeholder="Enter first name here..." required>

                    </div>

                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname" value=""
                            placeholder="Enter last name here..." required>

                    </div>

                    <div class="form-group">
                        <label for="">Role</label>
                        <input type="text" class="form-control" id="role" name="role" value=""
                            placeholder="Enter role here..." required>

                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" id="username" name="username" value=""
                            placeholder="Enter username here..." required>

                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id="password" name="password" value=""
                            placeholder="Enter password here..." required>

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <input type="submit" class="btn btn-primary" value="Add Staff">

                    </div>
            </form>
            <?php
// ---------------------------Alert Message so Admin knows what has been done------------------------------------------------------->

include '../includes/alertMessage.php'; 

?>

        </div>
    </div>

    <script src="../src/js/jquery.min.js"></script>
    <script src="../src/js/bootstrap.bundle.min.js"></script>
    <script src="../src/js/jquery.easing.min.js"></script>
    <script src="../src/js/chart.min.js"></script>
    <script src="../src/js/rc-pos.min.js"></script>
    <script src="../src/js/chart-area-demo.js"></script>
    </body>

    </html>