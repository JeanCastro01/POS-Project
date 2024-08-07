<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>CCT-POS - Profile</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="css/styles.css" rel="stylesheet">
    </head>

    <body id="page-top">
        <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
            <a class="navbar-brand mr-1" href="index.html">CCT POS</a>
            <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
                <i class="fa fa-bars"></i>
            </button>
            <!-- Navbar Search -->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar -->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-plus fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addSaleModal"> <i
                                class="fa fa-money"></i> New Sale</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductModal"> <i
                                class="fa fa-tag"></i> New Product</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductTypeModal"> <i
                                class="fa fa-tags"></i> New Product Type</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductVendorModal"> <i
                                class="fa fa-user"></i> New Product Vendor</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductBrandModal"> <i
                                class="fa fa-industry"></i> New Product Brand</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addExpenseAccountModal"> <i
                                class="fa fa-dollar"></i> New Expense Account</a>
                    </div>
                </li>
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-flash fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                        <a class="dropdown-item" href="products.html"> <i class="fa fa-tag"></i> All Products</a>
                        <a class="dropdown-item" href="product-types.html"> <i class="fa fa-tags"></i> Product Types</a>
                        <a class="dropdown-item" href="product-vendors.html"> <i class="fa fa-user"></i> Product
                            Vendors</a>
                        <a class="dropdown-item" href="product-brands.html"> <i class="fa fa-industry"></i> Product
                            Brands</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="revenue.html"> <i class="fa fa-money"></i> Revenue</a>
                        <a class="dropdown-item" href="improvements.html"> <i class="fa fa-rocket"></i> Improvements</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="accounts.html"> <i class="fa fa-dollar"></i> Accounts</a>
                    </div>
                </li>
                <li class="nav-item dropdown no-arrow ml-3">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="badge badge-warning">9+</span>
                        <i class="fa fa-fw fa-bell"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                        <a class="dropdown-item text-danger no-text-decorations" href="#"> <i
                                class="fa fa-info-circle"></i> You've few blocked products</a>
                        <a class="dropdown-item text-danger no-text-decorations" href="#"> <i
                                class="fa fa-info-circle"></i> Another new notification</a>
                        <a class="dropdown-item text-danger no-text-decorations" href="#"> <i
                                class="fa fa-info-circle"></i> Another new notification</a>
                        <a class="dropdown-item text-danger no-text-decorations" href="#"> <i
                                class="fa fa-info-circle"></i> Another new notification</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="notifications.html">See more notifications</a>
                    </div>
                </li>
                <li class="nav-item dropdown no-arrow ml-3">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user-circle fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <div class="dropdown-header">Rao Ahmed</div>
                        <a class="dropdown-item" href="profile.php"> <i class="fa fa-user"></i> Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"> <i class="fa fa-cog"></i> Settings</a>
                        <a class="dropdown-item" href="history.php"> <i class="fa fa-line-chart"></i> Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"> <i
                                class="fa fa-power-off"></i> Logout</a>
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
                    <a class="nav-link" href="../src/retail-dashboard.php">
                        <i class="fa fa-fw fa-line-chart"></i>
                        <span>Retail Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../src/sales-reports.php">
                        <i class="fa fa-fw fa-bar-chart"></i>
                        <span>Sales Reports</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="inventory-reports.html">
                        <i class="fa fa-fw fa-tags"></i>
                        <span>Inventory Reports</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="payment-reports.html">
                        <i class="fa fa-fw fa-money"></i>
                        <span>Payment Reports</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../src/sales.php">
                        <i class="fa fa-fw fa-table"></i>
                        <span>Check Sales</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" data-toggle="modal" data-target="#addSaleModal">
                        <i class="fa fa-fw fa-plus"></i>
                        <span>Record New Sale</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" data-toggle="modal" data-target="#addProductModal">
                        <i class="fa fa-fw fa-tags"></i>
                        <span>Add New Product</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product-brands.html">
                        <i class="fa fa-fw fa-industry"></i>
                        <span>Product Brands</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product-vendors.html">
                        <i class="fa fa-fw fa-users"></i>
                        <span>Product Vendors</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="pagesDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-folder"></i>
                        <span>
                            Manage Products
                            <i class="float-right fa fa-angle-down"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                        <h6 class="dropdown-header">Inventory</h6>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductModal"> <i
                                class="fa fa-plus"></i> Add Product</a>
                        <a class="dropdown-item" href="products.html"> <i class="fa fa-tags"></i> All Products</a>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header">Product Types</h6>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductTypeModal"> <i
                                class="fa fa-plus"></i> Add New Type</a>
                        <a class="dropdown-item" href="product-types.html"> <i class="fa fa-tags"></i> Product Types</a>
                        <div class="dropdown-divider"></div>
                        <h6 class="dropdown-header">Dealers &amp; Brands</h6>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductVendorModal"> <i
                                class="fa fa-user"></i> Add New Vendor</a>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductBrandModal"> <i
                                class="fa fa-industry"></i> Add New Brand</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="history.html">
                        <i class="fa fa-fw fa-calendar"></i>
                        <span>History</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="export-record.html">
                        <i class="fa fa-fw fa-external-link"></i>
                        <span>Export Record</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="general-settings.html">
                        <i class="fa fa-fw fa-cogs"></i>
                        <span>General Settings</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="help.html">
                        <i class="fa fa-fw fa-life-ring"></i>
                        <span>Help</span></a>
                </li>
            </ul>
            <div id="content-wrapper">
                <div class="container-fluid">
                    <!-- Breadcrumbs-->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../src/index.php">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                    <!-- Page Content -->
                    <h1>Blank Page</h1>
                    <hr>
                    <p>This is a great starting point for new custom pages.</p>
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
                        <a class="btn btn-danger" href="login.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Sale Modal-->
        <div class="modal fade" id="addSaleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="exampleModalLabel">
                            <i class="fa fa-money"></i>
                            Add New Sale
                        </h5>
                        <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form class="">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Select Product</label>
                                <select class="form-control text-primary" required>
                                    <option disabled selected><sub>Please select a product</sub></option>
                                    <option disabled><sub>Speakers &amp; MICs</sub></option>
                                    <option>Audionic MIC AM-20</option>
                                    <option>USB Sound Card</option>
                                    <option>Audionic Headphones AHT-11</option>
                                    <option disabled><sub>Mice &amp; Accessories</sub></option>
                                    <option>Razer Mousepad</option>
                                    <option>Blue Mousepad</option>
                                    <option>Apple Mouse Wireless A11</option>
                                    <option>DELL Mouse Wireless D232</option>
                                    <option>Razer Mousepad</option>
                                    <option>Razer Mousepad</option>
                                    <option>Razer Mousepad</option>
                                    <option>Razer Mousepad</option>
                                    <option>Razer Mousepad</option>
                                    <option>Razer Mousepad</option>
                                    <option>Razer Mousepad</option>
                                    <option disabled><sub>Mice &amp; Accessories</sub></option>
                                    <option>Razer Mousepad</option>
                                    <option>Razer Mousepad</option>
                                    <option>Razer Mousepad</option>
                                    <option>Razer Mousepad</option>
                                    <option>Razer Mousepad</option>
                                    <option>Razer Mousepad</option>
                                    <option disabled><sub>Mice &amp; Accessories</sub></option>
                                    <option>Razer Mousepad</option>
                                    <option>Razer Mousepad</option>
                                    <option>Razer Mousepad</option>
                                </select>
                                <small class="float-right">Product not listed here? <a href="#" data-toggle="modal"
                                        data-target="#addProductModal">Add new</a> </small>
                            </div>
                            <div class="form-group">
                                <label for="">Product Price</label>
                                <input type="number" class="form-control" name="" value=""
                                    placeholder="Enter product price here..." required>
                            </div>
                            <div class="form-group">
                                <label for="">Description <small class="text-muted">(Optional)</small></label>
                                <textarea name="name" class="form-control" rows="8" cols="80"
                                    placeholder="Add some note or description about this sale..."></textarea>
                            </div>
                            <small class="text-muted"><em>Please double check information before
                                    submitting.</em></small>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <input type="submit" class="btn btn-primary" value="Add Sale">
                        </div>
                    </form>
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
            <!-- Add Product Type-->
            <div class="modal fade" id="addProductTypeModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title" id="exampleModalLabel">
                                <i class="fa fa-tags"></i>
                                Add Product Type
                            </h5>
                            <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form class="">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="">Product Type</label>
                                    <input type="text" class="form-control" name="" value=""
                                        placeholder="Enter product type..." required>
                                    <small class="text-muted">Example: Mousepads, Headphones or Keyboards etc</small>
                                </div>
                                <div class="form-group">
                                    <label for="">Description <small class="text-muted">(Optional)</small></label>
                                    <textarea name="name" class="form-control" rows="8" cols="80"
                                        placeholder="Add some note or description about this product type..."></textarea>
                                </div>
                                <small class="text-muted"><em>Please double check information before
                                        submitting.</em></small>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <input type="submit" class="btn btn-primary" value="Add Product Type">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Add Product Brand-->
            <div class="modal fade" id="addProductBrandModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title" id="exampleModalLabel">
                                <i class="fa fa-industry"></i>
                                Add Product Brand
                            </h5>
                            <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form class="">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="">Product Brand</label>
                                    <input type="text" class="form-control" name="" value=""
                                        placeholder="Enter brand name here..." required>
                                    <small class="text-muted">Example: Nokia, AMB or MSI etc</small>
                                </div>
                                <div class="form-group">
                                    <label for="">Description <small class="text-muted">(Optional)</small></label>
                                    <textarea name="name" class="form-control" rows="8" cols="80"
                                        placeholder="Add some note or description about this vendor..."></textarea>
                                </div>
                                <small class="text-muted"><em>Please double check information before
                                        submitting.</em></small>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <input type="submit" class="btn btn-primary" value="Add Brand">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Add Product Vendor -->
            <div class="modal fade" id="addProductVendorModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title" id="exampleModalLabel">
                                <i class="fa fa-user"></i>
                                Add Products Vendor
                            </h5>
                            <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form class="">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="">Vendor Name</label>
                                    <input type="text" class="form-control" name="" value=""
                                        placeholder="Enter vendor's name here..." required>
                                    <small class="text-muted">Example: Anees Ahmad, Faisal Hayat or Shahzaib Khan
                                        etc</small>
                                </div>
                                <div class="form-group">
                                    <label for="">Phone Number</label>
                                    <input type="text" class="form-control" name="" value=""
                                        placeholder="Enter vendor's phone number here...">
                                    <small class="text-muted">Example: 555-665-123</small>
                                </div>
                                <div class="form-group">
                                    <label for="">Email Address</label>
                                    <input type="email" class="form-control" name="" value=""
                                        placeholder="Enter vendor's email here...">
                                    <small class="text-muted">Example: ahmadanees02@gmail.com</small>
                                </div>
                                <div class="form-group">
                                    <label for="">Description <small class="text-muted">(Optional)</small></label>
                                    <textarea name="name" class="form-control" rows="8" cols="80"
                                        placeholder="Add some note or description about this vendor..."></textarea>
                                </div>
                                <small class="text-muted"><em>Please double check information before
                                        submitting.</em></small>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <input type="submit" class="btn btn-primary" value="Add Vendor">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Add Expense Account Modal -->
            <div class="modal fade" id="addExpenseAccountModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title" id="exampleModalLabel">
                                <i class="fa fa-dollar"></i>
                                Add Expense Account
                            </h5>
                            <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form class="">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="">Account Title</label>
                                    <input type="text" class="form-control" name="" value=""
                                        placeholder="Enter account title here..." required>
                                    <small class="text-muted">Example: Akhtar Hotel, Mian Tea Stall or My Personal
                                        Account etc</small>
                                </div>
                                <div class="form-group">
                                    <label for="">How much are you depositing?</label>
                                    <input type="email" class="form-control" name="" value=""
                                        placeholder="Enter the amount you are despositing...">
                                </div>
                                <div class="form-group">
                                    <label for="">Description <small class="text-muted">(Optional)</small></label>
                                    <textarea name="name" class="form-control" cols="80"
                                        placeholder="Add some note or description about this vendor..."></textarea>
                                </div>
                                <small class="text-muted"><em>Please double check information before
                                        submitting.</em></small>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <input type="submit" class="btn btn-primary" value="Add Account">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script src="../src/js/jquery.min.js"></script>
            <script src="../src/js/bootstrap.bundle.min.js"></script>
            <script src="../src/js/jquery.easing.min.js"></script>
            <script src="../src/js/rc-pos.min.js"></script>
    </body>

</html>