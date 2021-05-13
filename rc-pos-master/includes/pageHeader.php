<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
        <?php
if(isset($title) && !empty($title)) {

echo $title;

}

else {

echo "CCT - POS";
}
?>
</title>
    <link href="../src/css/bootstrap.css" rel="stylesheet">
    <link href="../src/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="../src/css/styles.css" rel="stylesheet">

</head>

<body id="page-top">

<!----------------------------------------- Authenticator to valide user trying to access the page ----------------------------------->

<?php
//include 'customerAuthenticator.php';
?>
<!------------------------------------------------------------------------------------------------------------------------------------>
<br>
<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
        <a class="navbar-brand mr-1" href="index.html">CCT POS</a>
        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fa fa-bars"></i>
        </button>
       
        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
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
                <a class="nav-link" href="../src/index.php">
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
                <a class="nav-link" href="../src/newSale.php">
                    <i class="fa fa-fw fa-plus"></i>
                    <span>Record New Sale</span></a>
            </li>



            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-folder"></i>
                    <span>
                        Manage Products
                        <i class="float-right fa fa-angle-down"></i>
                    </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">Inventory</h6>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductModal"> <i class="fa fa-plus"></i> Add Product</a>
                    <a class="dropdown-item" href="../src/products.php"> <i class="fa fa-tags"></i> All Products</a>

                </div>
            </li>

            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-folder"></i>
                    <span>
                        Manage Staff
                        <i class="float-right fa fa-angle-down"></i>
                    </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                    <h6 class="dropdown-header">Inventory</h6>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addStaffModal"> <i class="fa fa-plus"></i> Add New Staff</a>
                    <a class="dropdown-item" href="../src/staff.php"> <i class="fa fa-tags"></i> All Staff</a>

                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="../src/history.php">
                    <i class="fa fa-fw fa-calendar"></i>
                    <span>History</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../src/sales-in-progress.php">
                    <i class="fa fa-fw fa-calendar"></i>
                    <span>Sales in Progress</span></a>
            </li>
            </li>

        </ul>



        