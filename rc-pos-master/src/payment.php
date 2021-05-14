<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>CCT-POS - Payment Page</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="css/dataTables.bootstrap4.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <link href="css/payment.css" rel="stylesheet">
    </head>

    <body id="page-top">
        <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
            <a class="navbar-brand mr-1" href="index.php">CCT POS</a>

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
                    <a class="nav-link" href="proceed.php">
                        <i class="fa fa-chevron-circle-left"></i>
                        <span>Purchase Overview</span>
                    </a>
                </li>
            </ul>

            <div class="row">
                <div class="col-75">
                    <div class="container">
                        <form action="index.php">

                            <div class="row">
                                <div class="col-50">
                                    <h3>Billing Address</h3>
                                    <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                    <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                                    <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                    <input type="text" id="email" name="email" placeholder="john@example.com">
                                    <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                    <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                                    <label for="city"><i class="fa fa-institution"></i> City</label>
                                    <input type="text" id="city" name="city" placeholder="New York">

                                    <div class="row">
                                        <div class="col-50">
                                            <label for="state">State</label>
                                            <input type="text" id="state" name="state" placeholder="NY">
                                        </div>
                                        <div class="col-50">
                                            <label for="zip">Zip</label>
                                            <input type="text" id="zip" name="zip" placeholder="10001">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-50">
                                    <h3>Payment</h3>
                                    <label for="fname">Accepted Cards</label>
                                    <div class="icon-container">
                                        <i class="fa fa-cc-visa" style="color:navy;"></i>
                                        <i class="fa fa-cc-amex" style="color:blue;"></i>
                                        <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                        <i class="fa fa-cc-discover" style="color:orange;"></i>
                                    </div>
                                    <label for="cname">Name on Card</label>
                                    <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                                    <label for="ccnum">Credit card number</label>
                                    <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                                    <label for="expmonth">Exp Month</label>
                                    <input type="text" id="expmonth" name="expmonth" placeholder="September">

                                    <div class="row">
                                        <div class="col-50">
                                            <label for="expyear">Exp Year</label>
                                            <input type="text" id="expyear" name="expyear" placeholder="2018">
                                        </div>
                                        <div class="col-50">
                                            <label for="cvv">CVV</label>
                                            <input type="text" id="cvv" name="cvv" placeholder="352">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <label>
                                <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as
                                billing
                            </label>
                            <input type="submit" value="Click here to make payment" class="btn">
                        </form>
                    </div>
                </div>

                <div class="col-25">
                    <div class="container">
                        <h4>Cart
                            <span class="price" style="color:black">
                                <i class="fa fa-shopping-cart"></i>
                                <b>4</b>
                            </span>
                        </h4>
                        <p><a href="#">Product 1</a> <span class="price">$15</span></p>
                        <p><a href="#">Product 2</a> <span class="price">$5</span></p>
                        <p><a href="#">Product 3</a> <span class="price">$8</span></p>
                        <p><a href="#">Product 4</a> <span class="price">$2</span></p>
                        <hr>
                        <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
                    </div>
                </div>
            </div>

            <!-- ----------------------------------------------------------------------------------------------------------- -->


            <script src="../src/js/jquery.min.js"></script>
            <script src="../src/js/bootstrap.bundle.min.js"></script>
            <script src="../src/js/jquery.easing.min.js"></script>
            <script src="../src/js/chart.min.js"></script>
            <script src="../src/js/rc-pos.min.js"></script>
            <script src="../src/js/chart-area-demo.js"></script>
            <script src="../src/js/shoppingCart.js"></script>
    </body>

</html>