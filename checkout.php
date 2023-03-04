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
        <title>Checkout</title>
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
                                <p>CHECKOUT</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>                     
        <!-- Banner Ends -->
        <!-- Middle Section Begins -->
        <div class="billing-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="bill-details">
                            <form>
                                <h2>Billing Details</h2>
                                <div class="naming-">
                                    <div>
                                        <p>Firstname*</p>
                                        <input type="text">
                                    </div>
                                    <div>
                                        <p>Lastname*</p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="company-country">
                                    <div>
                                        <p>Company name(optional)</p>
                                        <input type="text">
                                    </div>
                                    <div>
                                        <p>Country/Region*</p>
                                        <input type="text" placeholder="United States(US)">
                                    </div>
                                    <div class="street-ad">
                                        <p>Street address*</p>
                                        <input type="text" placeholder="House number and street name">
                                    </div>
                                    <div>
                                        <input type="text" placeholder="Apartment,suite,unit,etc.(optional)">
                                    </div>
                                </div>
                                <div class="town">
                                    <div>
                                        <p>Town/City*</p>
                                        <input type="text">
                                    </div>
                                    <div>
                                        <p>State*</p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="zip">
                                    <div>
                                        <p>ZIP*</p>
                                        <input type="text">
                                    </div>
                                    <div>
                                        <p>Phone*</p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="ee">
                                    <p>Email address*</p>
                                    <input type="text">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="bill-details orderr">
                            <h2>Your Order</h2>
                            <h3>Product</h3>
                            <div class="print-jac">
                                <div>
                                    <p class="--space">Palm Print Jacket x1</p>
                                    <p>$40.00</p>
                                </div>
                                <div>
                                    <p>Palm Print Jacket x1</p>
                                    <p>$60.00</p>
                                </div>
                                <div class="sac">
                                    <h3>Subtotal</h3>
                                    <p>$100.00</p>
                                </div>
                            </div>
                            <h3>Shipping</h3>
                            <div class="shiping-jac">
                                <div>
                                    <input type="checkbox">
                                    <p>Free Shipping</p>
                                </div>
                                <div>
                                    <input type="checkbox">
                                    <p>Local Pickup</p>
                                </div>
                                <div>
                                    <input type="checkbox">
                                    <p>Flat rate:$5.00</p>
                                </div>
                            </div>
                            <div class="costing">
                                <p>Total</p>
                                <p>$100.00</p>
                            </div>
                            <div class="payment-method">
                                <h3>Payment Methods</h3>
                                <div class="radio--btn">
                                    <input type="radio" name="che">
                                    <p>Direct Bank Transfer</p>
                                </div>
                                <div>
                                    <div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
                                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
                                            and scrambled it to make a.</p>
                                    </div>
                                </div>
                                <div class="radio--btn">
                                    <input type="radio" name="che">
                                    <p>Check Payments</p>
                                </div>
                                <div class="radio--btn">
                                    <input type="radio" name="che">
                                    <p>Cash on delivery</p>
                                </div>
                                <div class="radio--btn last1">
                                    <input type="radio" name="che">
                                    <p>Paypal</p>
                                </div>
                                <div class="final--button">
                                    <button>Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Middle Section Ends -->
        <!-- Footer Begins -->
        <?php include 'assets\footer.php';?>
        <!-- Footer Ends -->
    <script src="https://kit.fontawesome.com/0ecb256005.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../Javascript/bootstrap.min.js"></script>
    </body>
</html>