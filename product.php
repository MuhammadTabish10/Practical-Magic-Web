<?php
    include "./db/conn.php";

    $sql1 = "SELECT * FROM producttable";
    $result = mysqli_query($conn, $sql1);
    $data = array();

    // if (mysqli_num_rows($result) > 0) {
    //     while ($row = mysqli_fetch_assoc($result)) {
    //         $data[] = $row;
    //     }
    // }
                 
    // else{
    //     echo "0 records found";
    // }
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
        <title>Products</title>
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
                                <p>PRODUCTS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>             
        <!-- Banner Ends -->
        <!-- off Canvas Navbar -->
        <div class="category-cart-small container">
            <div class="row uu">
                <div class="col-3">
                    <button class="btn btn-primary Menu-prod-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="fa-solid fa-bars"></i></button>
                </div>
                <div class="col-9 menu-prod">
                    <p>SEARCH PRODUCTS</p>
                </div>
            </div>
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                <div class="offcanvas-header search-menu-btn">
                    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">SEARCH PRODUCTS</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body noo-padding">
                    <div class="search_bar">
                        <form>
                            <input type="text" placeholder="Search" >
                            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <div class="list">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                              <a class="nav-link active list-head" aria-current="page" href="#">CATEGORIES</a>
                            </li>
                            <li class="nav-item element">
                              <a class="nav-link active" aria-current="page" href="#">Lorem Ipsum</a>
                            </li>
                            <li class="nav-item element">
                              <a class="nav-link active" aria-current="page" href="#">Lorem Ipsum</a>
                            </li>
                            <li class="nav-item element">
                              <a class="nav-link active" aria-current="page" href="#">Lorem Ipsum</a>
                            </li>
                            <li class="nav-item element">
                              <a class="nav-link active" aria-current="page" href="#">Lorem Ipsum</a>
                            </li>
                            <li class="nav-item element">
                              <a class="nav-link active" aria-current="page" href="#">Lorem Ipsum</a>
                            </li>
                            <li class="nav-item element">
                              <a class="nav-link active" aria-current="page" href="#">Lorem Ipsum</a>
                            </li>
                            <li class="nav-item element">
                              <a class="nav-link active" aria-current="page" href="#">Lorem Ipsum</a>
                            </li>
                            <li class="nav-item element">
                              <a class="nav-link active" aria-current="page" href="#">Lorem Ipsum</a>
                            </li>
                            <li class="nav-item element">
                              <a class="nav-link active" aria-current="page" href="#">Lorem Ipsum</a>
                            </li>
                            <li class="nav-item element">
                              <a class="nav-link active" aria-current="page" href="#">Lorem Ipsum</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Products and Search List Section Begins -->
        <section class="top-sellers sel">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="shadow category-cart">
                            <div class="search-product">
                                <h3>SEARCH PRODUCTS</h3>
                            </div>
                            <div class="search_bar">
                                <form>
                                    <input type="text" placeholder="Search" >
                                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <div class="list">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                      <a class="nav-link active list-head" aria-current="page" href="#">CATEGORIES</a>
                                    </li>
                                    <li class="nav-item element">
                                      <a class="nav-link active" aria-current="page" name="cat1">Lorem Ipsum</a>
                                    </li>
                                    <li class="nav-item element">
                                      <a class="nav-link active" aria-current="page" name="cat2">Lorem Ipsum</a>
                                    </li>
                                    <li class="nav-item element">
                                      <a class="nav-link active" aria-current="page" name="cat3">Lorem Ipsum</a>
                                    </li>
                                    <li class="nav-item element">
                                      <a class="nav-link active" aria-current="page" name="cat4">Lorem Ipsum</a>
                                    </li>
                                    <li class="nav-item element">
                                      <a class="nav-link active" aria-current="page" name="cat5">Lorem Ipsum</a>
                                    </li>
                                    <li class="nav-item element">
                                      <a class="nav-link active" aria-current="page" name="cat6">Lorem Ipsum</a>
                                    </li>
                                    <li class="nav-item element">
                                      <a class="nav-link active" aria-current="page" name="cat7">Lorem Ipsum</a>
                                    </li>
                                    <li class="nav-item element">
                                      <a class="nav-link active" aria-current="page" name="cat8">Lorem Ipsum</a>
                                    </li>
                                    <li class="nav-item element">
                                      <a class="nav-link active" aria-current="page" name="cat9">Lorem Ipsum</a>
                                    </li>
                                    <li class="nav-item element">
                                      <a class="nav-link active" aria-current="page" name="cat10">Lorem Ipsum</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> 
                    <?php
                        if (mysqli_num_rows($result) > 0) {
                            $count = 0;
                            $space = 3;
                            while ($row = mysqli_fetch_assoc($result)) 
                            {
                                $count = $count + 1;
                                ?>
                                    <div class="col-lg-3 ">
                                        <div class="top-seller-card">
                                            <a href="./product-detail.php">
                                                <div class="card-topimg">
                                                    <!-- <img src="./images/prod-1.png" alt=""> -->
                                                    <img src=<?php echo $row['productImage'];?> alt="">
                                                </div>
                                                <!-- <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</h3> -->
                                                <h3><?php echo $row['productTitle'];?></h3>
                                                <ul class="rating-stars">
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><span>(123)</span></li>
                                                </ul>
                                                <!-- <h4>$123.00 CAD</h4> -->
                                                <h4><?php echo $row['productPrice'];?></h4>
                                            </a>
                                            <a href="./cart.php">
                                                <div class="card-btn">
                                                    <span><i class="fa-solid fa-cart-shopping"></i> ADD TO CART</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                    if($count == $space){
                                        $space = $space + 3;
                                        ?>
                                            <div class="col-lg-3"></div>
                                        <?php
                                    }
                                    ?>
                                <?php
                            }
                        }
                        else{
                            echo "0 records found";
                        }
                    ?>
                </div>
            </div>
        </section>
        <!-- Products and Search List Section Ends -->
        <!-- Footer Begins -->
        <?php include 'assets\footer.php';?>
        <!-- Footer Ends -->
    <script src="https://kit.fontawesome.com/0ecb256005.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../Javascript/bootstrap.min.js"></script>
    </body>
</html>