<?php
include "./db/conn.php";
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
        <title>Contact Us</title>
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
                                <p>CONTACT US</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>                     
        <!-- Banner Ends -->
        <!-- Contact Us Begin -->
        <section class="contact">
            <div class="container">
                <div class="row">
                    <!-- Left Side Section Begins -->
                    <div class="col-lg-5">
                        <div class="background-pic">
                            <img class="back-img" src="./images/background.png">
                            <div class="contact_info">
                                <h1>Get in Touch</h1>
                                <p> sed do eiusmod tempor nsectetur adipisicin incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                <div class="email">
                                    <img src="./images/paper-plane.jpg">
                                    <div class="email-info">
                                        <h4>Email :</h4>
                                        <p>your@mail.com</p>
                                    </div>
                                </div>
                                <div class="phone">
                                    <img src="./images/phone-call.jpg">
                                    <div class="phone-info">
                                        <h4>Phone :</h4>
                                        <p>+123 456 7890</p>
                                    </div>
                                </div>
                                <div class="address_">
                                    <img src="./images/pin.jpg">
                                    <div class="address-info">
                                        <h4>Address :</h4>
                                        <p>Lorem Ipsum, 4586 Street</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Left Side Section Ends -->
                    <!-- Right Side Section Begins -->
                    <div class="col-lg-7">
                        <div class="contact-details shadow">
                            <div class="contact-title">
                                <h1>Contact Us</h1>
                            </div>
                            <form action="" method="post">
                                <input type="text" name="name" placeholder="Name">
                                <input type="text" name="address" placeholder="Address">
                                <input type="email" name="email" placeholder="Email">
                                <input type="text" name="type" placeholder="Type">
                                <button name="contactSubmit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Right Side Section Ends -->
        <!-- Contact Us End -->

        <!-- Footer Begins -->
        <?php include 'assets\footer.php';?>
        <!-- Footer Ends -->
        
    <script src="https://kit.fontawesome.com/0ecb256005.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../Javascript/bootstrap.min.js"></script>
    </body>
</html>


<?php

if(isset($_POST['contactSubmit']))
{
    $Name = $_POST['name'];
    $Address = $_POST['address'];
    $Email = $_POST['email'];
    $Type = $_POST['type'];

    $sql = "INSERT INTO contactus(Name,Address,Email,Type)
    VALUES('".$Name."','".$Address."','".$Email."','".$Type."')";

    if(mysqli_query($conn, $sql)){
        header("location:/contact.php"); 
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}


?>