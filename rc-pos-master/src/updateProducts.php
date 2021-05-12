<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RC-POS - Update Products</title>
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
                <a class="nav-link" href="../src/products.php">
                    <i class="fa fa-chevron-circle-left"></i>
                    <span>Back</span>
                </a>
            </li>

        </ul>
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <i class="fa fa-pencil"></i> Update Product
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
                            <input type="text" class="form-control" name="type" id="type" value="" placeholder="Enter type..." required>
                        </div>
                        <div class="form-group">
                        <label for="">Brand</label>
                            <input type="text" class="form-control" name="brand" id="brand" value="" placeholder="Enter brand..." required>
                        </div>
                        <div class="form-group">
                        <label for="">Colour</label>
                            <input type="text" class="form-control" name="colour" id="colour" value="" placeholder="Enter colour..." required>
           

                        </div>
                        <div class="form-group">
                            <label for="">Size</label>
                            <input type="number" class="form-control" name="size" id="size" value="" placeholder="Enter shoes size..." required>
                        </div>

                       
                        <div class="form-group">
                            <label for="">Product Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="" placeholder="Enter product name..." required>
                            <small class="text-muted">Be more specific with product names. Make sure its
                                unique.</small>
                        </div>
                        <div class="form-group">
                            <label for="">Product Price <small class="text-muted">(cost/item)</small>
                            </label>
                            <input type="number" class="form-control" name="price" id="price" value="" placeholder="Enter cost of product per item..." required>
                        </div>
                        <div class="form-group">
                            <label for="">Product Stock
                                <small>(Quantity)</small>
                            </label>
                            <input type="number" class="form-control" name="quantity" id="quantity" value="" placeholder="Enter number of items..." required>
                            <small class="text-muted">This will be used as product quantity in stock keeping
                                unit.</small>
                        </div>
                        <div class="form-group">
                            <label for="">Description <small class="text-muted">(Optional)</small></label>
                            <textarea name="description" id="description" class="form-control" cols="80" placeholder="Add some note or description about this product..."></textarea>
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