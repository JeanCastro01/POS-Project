<!---------------------------------------------------Calling Header ---------------------------------------------------------------------->
<?php

$title = "New Sale";

include '../includes/pageHeader.php';
?>
        <div id="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../src/index.php">Home</a>
                    </li>
                    <li class="breadcrumb-item active">New Sale</li>
                </ol>
                <!-- Page Content -->
                <!-- DataTables Example -->
                <div class="card mb-3">
                    <div class="card-header bg-primary text-white">
                        <i class="fa fa-table"></i> New Sale


                        </span>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive col-md-09 bg-light text-center">
                     
<!------------------------------------- Accessing the Database to populate my Table ------------------------------------------------------>                        
    <?php

                            


include("../includes/connection.php");

  $sql = "SELECT Item_ID, description, image,  name, type, brand, quantity, price, colour, size FROM Items";
  $result = $conn->query($sql);

  $nRows = $result->num_rows;

  if($nRows >0){

    while($row = $result->fetch_assoc()){
      $data[]=$row;
    }
   
  }   echo "
  <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
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
  </tr>
</thead>
        
        ";

        foreach($data as $row){
        
      echo "
        <tr>
        <td>
        <div class='form-check'>
        <input class='form-check-input' type='checkbox' value='' id='flexCheckDefault'>
        <label class='form-check-label' for='flexCheckDefault'>
        </label>
        </div>
        </td>
        <td>" . $row["image"] . "</td>
        <td>" . $row["name"] . "</td>
        <td>" . $row["type"] . "</td>
        <td>" . $row["brand"] . "</td>
        <td>" . $row["quantity"] . "</td>
        <td>" . $row["price"] . "</td>
        <td>" . $row["colour"] . "</td>
        <td>" . $row["size"] . "</td>";
  
    }
    echo "</table>";
 
  ?>
<!----------------------------------------------------------------------------------------------------------------------------->
                            
                        </div>
                        <a href="proceed.html"> <button type="button" style="float: right;" class="btn btn-danger">
                            Proceed</button></a>
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
                    <a class="btn btn-danger" href="../login.php">Logout</a>
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