
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RC-POS - Purchase overview</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body id="page-top">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
        <a class="navbar-brand mr-1" href="index.html">CCT POS</a>
        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fa fa-bars"></i>
        </button>

        <ul class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">


            <li class="nav-item dropdown no-arrow ml-3">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">


                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"> <i class="fa fa-power-off"></i> Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fa fa-fw fa-home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="newSale.html">
                    <i class="fa fa-chevron-circle-left"></i>
                    <span>Back</span>
                </a>
            </li>



        </ul>
        <div id="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <b> Purchase </b></li>
                    <li class="breadcrumb-item active">Overview</li>
                </ol>
                <!-- Page Content -->
                <!-- DataTables Example -->
                <div class="card mb-3">
                    <div class="card-header bg-primary text-white">
                        <i class="fa fa-table"></i> All Products


                        </span>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                <thead>
                                    <tr>
                                        <th>Select</th>
                                        <th>Photo</th>
                                        <th>Product Name</th>
                                        <th>Product Type</th>
                                        <th>Brand</th>
                                        <th>In-stock</th>
                                        <th>Cost/item</th>
                                        <th>Colour</th>
                                        <th>Size</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                </label>
                                            </div>
                                        </td>
                                        <td>#</td>
                                        <td>Mouse &amp; Pointing Devices</td>
                                        <td>Runners</td>
                                        <td>Nike</td>
                                        <td>6</td>
                                        <td>85</td>
                                        <td>Orange</td>
                                        <td>40</td>
                                        <td>
                                            <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                    class="fa fa-edit"></i></button>
                                            </li>
                                            <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                    class="fa fa-trash"></i></button>
                                            </li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                </label>
                                            </div>
                                        </td>
                                        <td>#</td>
                                        <td>Mouse &amp; Pointing Devices</td>
                                        <td>Boots</td>
                                        <td>Adidas</td>
                                        <td>10</td>
                                        <td>55</td>
                                        <td>Blue</td>
                                        <td>38</td>
                                        <td>
                                            <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                    class="fa fa-edit"></i></button>
                                            </li>
                                            <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                    class="fa fa-trash"></i></button>
                                            </li>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">

                                                </label>
                                            </div>
                                        </td>
                                        <td>#</td>
                                        <td>Mouse &amp; Pointing Devices</td>
                                        <td>Dress Shoes</td>
                                        <td>Tommy Hilfiger</td>
                                        <td>3</td>
                                        <td>120</td>
                                        <td>Black</td>
                                        <td>42</td>
                                        <td>
                                            <li class="list-inline-item">
                                                <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                    class="fa fa-edit"></i></button>
                                            </li>
                                            <li class="list-inline-item">
                                                <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                    class="fa fa-trash"></i></button>
                                            </li>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addProductModal">
                                Proceed</button> -->
                        </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
            <br><br><br>
        </div>
    </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Modals -->
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <form class="">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Product Type</label>
                            <select class="form-control text-primary" required>
                                <option disabled selected><sub>Please select a product type</sub></option>
                                <option>athletic shoes</option>
                                <option>climbing shoes</option>
                                <option>cycling shoes</option>
                                <option>dress shoes</option>
                                <option>golf shoes</option>
                                <option>high heels</option>
                                <option>running shoes</option>
                                <option>skate shoes</option>
                                <option>platform shoes</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label>Product Brand</label>
                            <select class="form-control text-primary" required>
                                <option disabled selected><sub>Please select a product brand</sub></option>
                                <option>Nike</option>
                                <option>adidas</option>
                                <option>New Balance</option>
                                <option>ASICS</option>
                                <option>PUMA</option>
                                <option>Skechers</option>
                                <option>Fila</option>
                                <option>Converse</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label>Color</label>
                            <select class="form-control text-primary" required>
                                <option disabled selected><sub>Please select a Color </sub></option>
                                <option>Blue</option>
                                <option>Green</option>
                                <option>Black</option>
                                <option>Yellow</option>
                                <option>White</option>
                                <option>Red</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label>Size</label>
                            <select class="form-control text-primary" required>
                                <option disabled selected><sub>Please select a Size </sub></option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="">Product Name</label>
                            <input type="text" class="form-control" name="" value="" placeholder="Enter product name..." required>
                            <small class="text-muted">Be more specific with product names. Make sure its
                                unique.</small>
                        </div>
                        <div class="form-group">
                            <label for="">Product Price <small class="text-muted">(cost/item)</small>
                            </label>
                            <input type="number" class="form-control" name="" value="" placeholder="Enter cost of product per item..." required>
                        </div>
                        <div class="form-group">
                            <label for="">Product Stock
                                <small>(Quantity)</small>
                            </label>
                            <input type="number" class="form-control" name="" value="" placeholder="Enter number of items..." required>
                            <small class="text-muted">This will be used as product quantity in stock keeping
                                unit.</small>
                        </div>
                        <div class="form-group">
                            <label for="">Description <small class="text-muted">(Optional)</small></label>
                            <textarea name="name" class="form-control" cols="80" placeholder="Add some note or description about this product..."></textarea>
                        </div>

                        <small class="text-muted"><em>Please double check information before
                                submitting.</em></small>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <input type="submit" class="btn btn-primary" value="Add Product">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Product Staff Test-->
    <div class="modal fade" id="addStaffModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <form class="">
                    <div class="modal-body">
                        <div class="form-group">
                            <labe>First Name</label>
                                <input type="text" class="form-control" name="" value="" placeholder="Enter first name here..." required>

                        </div>

                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="" value="" placeholder="Enter last name here..." required>

                        </div>

                        <div class="form-group">
                            <label for="">Role</label>
                            <input type="text" class="form-control" name="" value="" placeholder="Enter role here..." required>

                        </div>

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="" value="" placeholder="Enter username here..." required>

                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="" value="" placeholder="Enter password here..." required>

                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <input type="submit" class="btn btn-primary" value="Add Staff">
                        </div>
                </form>
                </div>
                </div>
            </div>

            <!-- Proceed Modal-->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Modal Heading</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>john@example.com</td>
                                    </tr>
                                    <tr>
                                        <td>Mary</td>
                                        <td>Moe</td>
                                        <td>mary@example.com</td>
                                    </tr>
                                    <tr>
                                        <td>July</td>
                                        <td>Dooley</td>
                                        <td>july@example.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
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