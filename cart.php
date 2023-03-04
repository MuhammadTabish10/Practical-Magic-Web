<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../Bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./css/Practical Magic Web.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
        <title>Cart</title>
    </head>
    <body>
        <!-- Header Begins -->
        <?php include 'assets\header.php';?> 
        <!-- Header Ends -->
        <!-- Banner Starts -->
        <section class="home-banner">
            <div class="title-of-banner">
                <img class="banner1" src="./images/Banner1.jpg"/>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="inner-text">
                                <p>CART</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>                      
        <!-- Banner Ends -->
        <!-- Middle Section Begins -->
        <section class="cart-info">
            <div class="container">
                <div class="row">
                    <!-- For Responsive Begin -->
                    <div class="">
                        <div class="col-1"></div>
                        <div class="top-seller-card Cart_Responsive col-10">
                            <div>
                                <a href="./product-detail.php" class="card-topimg">
                                    <img src="./images/prod-1.png" alt="">
                                </a>
                                <div class="cart-topp">
                                    <div>
                                        <h3>IPSUM DOLOR</h3>
                                        <h3>GRAM: 20</h3>
                                        <h3>30 REVIEWS</h3>
                                    </div>
                                    <form class="centering">
                                        <input type="text" placeholder="2">
                                        <p>Update Cart</p>
                                    </form>
                                </div>
                                <div class="prices__">
                                    <div>
                                        <h3>Unit Price</h3>
                                        <p>$22</p>
                                    </div>
                                    <div>
                                        <h3>Sub Price</h3>
                                        <p>$44</p>
                                    </div>
                                </div>
                                <div><button>X</button></div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <div class="">
                        <div class="col-1"></div>
                        <div class="top-seller-card Cart_Responsive col-10">
                            <div>
                                <a href="./product-detail.php" class="card-topimg">
                                    <img src="./images/prod-1.png" alt="">
                                </a>
                                <div class="cart-topp">
                                    <div>
                                        <h3>IPSUM DOLOR</h3>
                                        <h3>GRAM: 20</h3>
                                        <h3>30 REVIEWS</h3>
                                    </div>
                                    <form class="centering">
                                        <input type="text" placeholder="1">
                                        <p>Update Cart</p>
                                    </form>
                                </div>
                                <div class="prices__">
                                    <div>
                                        <h3>Unit Price</h3>
                                        <p>$32</p>
                                    </div>
                                    <div>
                                        <h3>Sub Price</h3>
                                        <p>$32</p>
                                    </div>
                                </div>
                                <div><button>X</button></div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                        <div class="cart-tail  tailll">
                            <div class="proceed-to-checkout">
                                <a href="./checkout.php">
                                    <button>PROCEED TO CHECKOUT</button>
                                </a>
                                <div>
                                    <img src="./images/paypal.png">
                                    <p>OR CHECKOUT WITH</p>
                                </div>
                            </div>
                        </div>
                        <div class="continue__p">
                            <a href="./index.php">
                                <p>CONTINUE PARCHASING ></p>
                            </a>
                        </div>
                    </div>
                    <!-- For Responsive End -->
                    <!-- Left Section Begins -->
                    <div class="col-lg-9 col-12">
                        <div class="cart-product">
                            <table class="cart-product1 prod--1" >
                                <tr class="cart-head">
                                    <th>Item</th>
                                    <th class="centering">Quantity</th>
                                    <th class="centering">Unit Price</th>
                                    <th class="centering">Sub Price</th>
                                </tr>
                                <tr>
                                    <td class="cart-text">
                                        <div><img src="./images/prod-1.png"></div>
                                        <div>
                                            <p>IPSUM DOLOR</p>
                                            <p>GRAM: 20</p>
                                            <p>30 REVIEWS</p>
                                        </div>  
                                    </td>
                                    <td>
                                        <form class="centering">
                                            <input type="text" placeholder="2">
                                            <p>Update Cart</p>
                                        </form>
                                    </td>
                                    <td class="centering">
                                        <p>$22</p>
                                    </td>
                                    <td class="centering">
                                        <p>$44</p>
                                        <button>X</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart-text">
                                        <div><img src="./images/prod-1.png"></div>
                                        <div>
                                            <p>IPSUM DOLOR</p>
                                            <p>GRAM: 20</p>
                                            <p>30 REVIEWS</p>
                                        </div>  
                                    </td>
                                    <td>
                                        <form class="centering">
                                            <input type="text" placeholder="1">
                                            <p>Update Cart</p>
                                        </form>
                                    </td>
                                    <td class="centering">
                                        <p class="spacee_">$32</p>
                                    </td>
                                    <td>
                                        <p class="centering">$32</p>
                                        <button>X</button>
                                    </td>
                                </tr>
                            </table>
                            <div class="cart-tail">
                                <div>
                                    <a href="./index.php">
                                        <p>CONTINUE PARCHASING ></p>
                                    </a>
                                </div>
                                <div class="proceed-to-checkout">
                                    <a href="./checkout.php">
                                        <button>PROCEED TO CHECKOUT</button>
                                    </a>
                                    <div>
                                        <img src="./images/paypal.png">
                                        <p>OR CHECKOUT WITH</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Left Section Ends -->
                    <!-- Right Section Begins -->
                    <!-- <div class="col-1"></div> -->
                    <div class="col-lg-3 col-9">
                        <div class="spc">
                            <div class="totaling">
                                <ul class="total-">
                                    <li>Sub Total</li>
                                    <li>Discount</li>
                                    <li>Shipping</li>
                                    <li>TOTAL</li>
                                </ul>
                                <ul class="total-price">
                                    <li>$76</li>
                                    <li>$10</li>
                                    <li>$15</li>
                                    <li>$91</li>
                                </ul>
                            </div>
                            <div class="shipping__">
                                <div>
                                    <h4>Shipping</h4>
                                    <h5>Courier ($15)</h5>
                                </div>
                                <div class="est">
                                    <h4>Estimate For</h4>
                                    <h5>United Estate,NY,1230</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-1"></div> -->
                    <!-- Right Section Ends  -->
                </div>
            </div>
        </section>
        <!-- Middle Section Ends -->
        <!-- Footer Begins -->
        <?php include 'assets\footer.php';?>
        <!-- Footer Ends -->
    <script src="https://kit.fontawesome.com/0ecb256005.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../Javascript/bootstrap.min.js"></script>
    </body>
</html>