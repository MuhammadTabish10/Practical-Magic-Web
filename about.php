<?php
    include "./db/conn.php";

    $sql1 = "SELECT * FROM abouttable WHERE ID=1";
    $result = mysqli_query($conn, $sql1);
    $data = array();

    if (mysqli_num_rows($result) > 0){
            $data = mysqli_fetch_assoc($result);
        }
                 
    else{
        echo "0 records found";
    }
?>

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
        <title>About Us</title>
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
                                <p>ABOUT US</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        
        <!-- Banner Ends -->
        <!-- About Us Section Begins -->
        <section class="about-us">
            <div class="container-fluid">
                <div class="row">
                    <div class="about-us-content">
                        <div class="picture-girl">
                            <img src=<?php echo $data['aboutImage']?> alt="">
                        </div>  
                        <div class="about-us-text">
                            <h5><?php echo $data['aboutSmallTitle']?></h5>
                            <h1><?php echo $data['aboutTitle']?></h1>
                            <p><?php echo $data['aboutShortDes1']?></p>
                            <p><?php echo $data['aboutShortDes2']?></p>
                        </div>
                    </div> 
                    <p class="padd-bottom">
                        <?php echo $data['aboutLongDes']?>
                    </p>    
                </div>
            </div>
        </section>
        <!-- About Us Section Ends -->
        <!-- Customer Review Section Begins -->
        <section class="review-banner">
            <img src="./images/reveiws-bg.png" />
            <div class="review-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="banner-caption-inner">
                                <!-- <h1>Customer Reviews</h1> -->
                                <h1><?php echo $data['aboutReviewTitle']?></h1>
                                <!-- <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p> -->
                                <p><?php echo $data['aboutReviewDes']?></p>
                                <!-- <h2>Jane Doe</h2> -->
                                <h2><?php echo $data['aboutReviewName']?></h2>
                                <a href="#">
                                    <div class="review-btn">
                                        <span> Verified by CR <i class="fa-solid"></i> </span>
                                    </div>
                                    <ul class="review-rating-stars">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li class="last-star"><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Customer Review Section Ends -->
        <!-- Time Section Begins -->
        <section class="time">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="time-title1">
                            <!-- <h2>30-Day</h2> -->
                            <!-- <p>Lorem Ipsum Dolor Sit</p> -->
                            <h2><?php echo $data['aboutDays']?></h2>
                            <p><?php echo $data['aboutDaysText']?></p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="time-title2">
                            <!-- <h2>FREE</h2>
                            <p>Lorem Ipsum Dolor Sit</p> -->
                            <h2><?php echo $data['aboutFree']?></h2>
                            <p><?php echo $data['aboutFreeText']?></p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="time-title3">
                            <!-- <h2>365</h2>
                            <p>Lorem Ipsum Dolor Sit</p> -->
                            <h2><?php echo $data['aboutDayNum']?></h2>
                            <p><?php echo $data['aboutDayNumText']?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Time Section Ends -->
        <!-- Find Product Secion Begins -->
        <section class="find-pro-banner">
            <img src="./images/find-your-product.jpg" />
            <div class="find-pro-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="find-pro-caption-inner">
                                <!-- <h1>Find Your Product</h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                </p> -->
                                <h1><?php echo $data['aboutFindProduct']?></h1>
                                <p><?php echo $data['aboutFindProductDes']?></p>
                                <a href="#">
                                    <div class="fp-btn">
                                        <span> FIND MY PERFECT DOSE <i class="fa-solid fa-arrow-right"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Find Product Secion Ends -->
        <!-- CBD Section Begins -->
        <section class="content-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">			
                        <!-- <h2>Learn Everything About CBD</h2> -->
                        <h2><?php echo $data['aboutLeanCBD']?></h2>				
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-6">			
                        <!-- <h5>What is CBD?</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the 
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with 
                        the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing 
                        software like Aldus PageMaker including versions of Lorem Ipsum</p> -->
                        <h5><?php echo $data['aboutSubtitleCBD1']?></h5>
                        <p><?php echo $data['aboutSubtitleCBDText1']?></p>
                    </div>
                    <div class="col-lg-6">
                        <!-- <h5>What is CBD?</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
                        and scrambled it to make a type specimen book.</p> 			
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
                        and scrambled it to make a type specimen book.</p>  -->
                        <h5><?php echo $data['aboutSubtitleCBD2']?></h5>
                        <p><?php echo $data['aboutSubtitleCBDText2']?></p>
                    </div>
                </div>
                <a href="#">CONTINUE READING  <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </section>
        <!-- CBD Section Ends -->
        <!-- Special Discounts Section Begins -->
        <section class="subscribe">
            <img src="./images/subscribe.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sub-caption">
                            <h2>Subscribe to get special discounts on our CBD Products</h2>
                            <form>
                                <input type="text" placeholder="Enter your email address">
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Special Discounts Section Ends -->
        <!-- Footer Begins -->
        <?php include 'assets\footer.php';?>
        <!-- Footer Ends -->
    <script src="https://kit.fontawesome.com/0ecb256005.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../Javascript/bootstrap.min.js"></script>
    </body>
</html>