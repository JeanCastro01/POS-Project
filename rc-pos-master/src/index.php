<!---------------------------------------------------Calling Header ---------------------------------------------------------------------->
<?php

$title = "Home";

include '../includes/pageHeader.php';
?>

        <div id="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../src/index.php">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Overview</li>
                </ol>
                <!-- Icon Cards-->
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-header">
                                <h1>Sales Count</h1>
                                <small class="float-left">Last two weeks</small>
                            </div>
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-money"></i>
                                </div>
                                <div class="card-text">
                                    <h1 class="text-center display-3"><strong>135</strong></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-header">
                                <h1>Top-Selling</h1>
                                <small class="float-left">Speakers</small>
                            </div>
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-flash"></i>
                                </div>
                                <div class="card-text">
                                    <h1 class="text-center display-3"><strong>24</strong></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                        <div class="card text-white bg-dark o-hidden h-100">
                            <div class="card-header">
                                <h1>Short Items</h1>
                                <small class="float-left">Includes short and requested items</small>
                            </div>
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-tags"></i>
                                </div>
                                <div class="card-text">
                                    <h1 class="text-center display-3"><strong>14</strong></h1>
                                </div>
                            </div>
                     
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <div class="card-header">
                                <h1>Improvements</h1>
                                <small class="float-left">Based on total monthly sales</small>
                            </div>
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fa fa-fw fa-shopping-cart"></i>
                                </div>
                                <div class="card-text">
                                    <h1 class="text-center display-3"><strong>27%</strong></h1>
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
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-danger text-white">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-danger" href="login.php">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add Sale Modal-->
                <div class="modal fade" id="addSaleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary text-white">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    <i class="fa fa-money"></i> Add New Sale
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
                                        <small class="float-right">Product not listed here? <a href="#"
                                                data-toggle="modal" data-target="#addProductModal">Add new</a> </small>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Product Price</label>
                                        <input type="number" class="form-control" name="" value="" placeholder="Enter product price here..." required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Description <small class="text-muted">(Optional)</small></label>
                                        <textarea name="name" class="form-control" rows="8" cols="80" placeholder="Add some note or description about this sale..."></textarea>
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
                            <form class="" method="POST" action="../includes/insertNewStaff.php">
                    <div class="modal-body">
                        <div class="form-group">
                            <labe>First Name</label>
                                <input type="text" class="form-control" id="fname" name="fname" value="" placeholder="Enter first name here..." required>

                        </div>

                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lname" value="" placeholder="Enter last name here..." required>

                        </div>

                        <div class="form-group">
                            <label for="">Role</label>
                            <input type="text" class="form-control" id="role" name="role" value="" placeholder="Enter role here..." required>

                        </div>

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="" placeholder="Enter username here..." required>

                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="" placeholder="Enter password here..." required>

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
                        </div>
                        <!-- Add Product Vendor -->
                        <div class="modal fade" id="addProductVendorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            <i class="fa fa-user"></i> Add Products Vendor
                                        </h5>
                                        <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                    </div>
                                    <form class="">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="">Vendor Name</label>
                                                <input type="text" class="form-control" name="" value="" placeholder="Enter vendor's name here..." required>
                                                <small class="text-muted">Example: Anees Ahmad, Faisal Hayat or Shahzaib Khan
                                            etc</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Phone Number</label>
                                                <input type="text" class="form-control" name="" value="" placeholder="Enter vendor's phone number here...">
                                                <small class="text-muted">Example: 555-665-123</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Email Address</label>
                                                <input type="email" class="form-control" name="" value="" placeholder="Enter vendor's email here...">
                                                <small class="text-muted">Example: ahmadanees02@gmail.com</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Description <small class="text-muted">(Optional)</small></label>
                                                <textarea name="name" class="form-control" rows="8" cols="80" placeholder="Add some note or description about this vendor..."></textarea>
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
                        <div class="modal fade" id="addExpenseAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            <i class="fa fa-dollar"></i> Add Expense Account
                                        </h5>
                                        <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                    </div>
                                    <form class="">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="">Account Title</label>
                                                <input type="text" class="form-control" name="" value="" placeholder="Enter account title here..." required>
                                                <small class="text-muted">Example: Akhtar Hotel, Mian Tea Stall or My Personal
                                            Account etc</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="">How much are you depositing?</label>
                                                <input type="email" class="form-control" name="" value="" placeholder="Enter the amount you are despositing...">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Description <small class="text-muted">(Optional)</small></label>
                                                <textarea name="name" class="form-control" cols="80" placeholder="Add some note or description about this vendor..."></textarea>
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
                        <script src="../src/js/chart.min.js"></script>
                        <script src="../src/js/rc-pos.min.js"></script>
                        <script src="../src/js/chart-area-demo.js"></script>

</body>

</html>

