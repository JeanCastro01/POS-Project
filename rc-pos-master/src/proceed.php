<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>CCT-POS - Purchase overview</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="css/dataTables.bootstrap4.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <link href="css/shoppingCart.css" rel="stylesheet">
    </head>

    <body id="page-top">
        <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
            <a class="navbar-brand mr-1" href="index.php">CCT POS</a>
            <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
                <i class="fa fa-bars"></i>
            </button>

            <ul class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">


                <li class="nav-item dropdown no-arrow ml-3">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user-circle fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">


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
                    <a class="nav-link" href="index.php">
                        <i class="fa fa-fw fa-home"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="newSale.php">
                        <i class="fa fa-chevron-circle-left"></i>
                        <span>Back</span>
                    </a>
                </li>
            </ul>
            
            <!-- Database code to populate content from basket automatically -->

            <?php
include("../includes/connection.php");

$sql = "SELECT * FROM Items
inner join SalesRequestQueue on Items.Item_ID=SalesRequestQueue.reservation_ID";
  $result = $conn->query($sql);

  $nRows = $result->num_rows;

  if($nRows >0){

    while($row = $result->fetch_assoc()){
      $data[]=$row;
    }
   
  }
    echo "
    <div class='basket'>
    <div class='basket-labels'>
    <ul>
        <li class='item item-heading'>Item</li>
        <li class='price'>Price</li>
        <li class='quantity'>Quantity</li>
        <li class='subtotal'>Subtotal</li>
    </ul>
</div>
        
        ";

        foreach($data as $row){
        
      echo "


      <div class='basket-product'>
      <div class='item'>
          <div class='product-image'>
          <img>".'<img src="data:image/png;base64,'.base64_encode( $row['image'] ).'"/>'."</img>
         
          </div>
          <div class='product-details'>
              <h1><strong><span class='item-quantity'>1</span> {$row['name']}</strong> 
              </h1>
              <p><strong>{$row['colour']}, {$row['size']}</strong></p>
              <p>Product Code - {$row['Item_ID']}</p>
          </div>
      </div>
      <div class='price'>{$row['price']}</div>
      <div class='quantity'>
          <input type='number' value='1' min='1' class='quantity-field'>
      </div>
      <div class='subtotal'>{$row['price']}</div>
      <div class='remove'>
          <button>Remove</button>
      </div>
  </div>
  </div>

  <aside>
                <div class='summary'>
                    <div class='summary-total-items'><span class='total-items'></span> Items in your Bag</div>
                    <div class='summary-subtotal'>
                        <div class='subtotal-title'>Subtotal</div>
                        <div class='subtotal-value final-value' id='basket-subtotal'>{$row['price']}</div>
                        <div class='summary-promo hide'>
                            <div class='promo-title'>Promotion</div>
                            <div class='promo-value final-value' id='basket-promo'></div>
                        </div>
                    </div>
                    <div class='summary-delivery'>
                        <select name='delivery-collection' class='summary-delivery-selection'>
                            <option value='0' selected='selected'>Select Collection or Delivery</option>
                            <option value='collection'>Collection</option>
                            <option value='delivery'>Delivery</option>
                        </select>
                    </div>
                    <div class='summary-total'>
                        <div class='total-title'>Total</div>
                        <div class='total-value final-value' id='basket-total'>{$row['price']}</div>
                    </div>
                    <div class='summary-checkout'>

                        <a href='payment.php'>
                            <button class='checkout-cta' href='payment.php'>Go to Secure Checkout</button>
                        </a>
                    </div>
                </div>";
  
    }
    echo "</div>";
 
  ?>
            <!---------------------------------------------------------------------------------------------------------------------------------------------------->
            <?php

include '../includes/alertMessage.php'; 

?>
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
        <script src="../src/js/shoppingCart.js"></script>
    </body>

</html>