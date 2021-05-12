<!-- 
 RC-PoS (https://appzaib.com/rc-pos)
 Copyright 2013-2018 BlackRock Digital, LLC, 2018 Vruqa Designs, 2018 Appzaib
 Licensed under MIT (https://github.com/appzaib/rc-pos/blob/master/LICENSE)
-->
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
                        <a class="nav-link" href="../src/newSale.php"> <input type="submit" class="btn btn-primary" value="Update"></a>
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