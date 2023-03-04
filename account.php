
<!DOCTYPE html>
<html>
  <head>
    <!-- PSD LINK: https://we.tl/t-NgmriMxjMX -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/0ecb256005.js"
      crossorigin="anonymous"
    ></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/Practical Magic Web.css">
    <title>Login/Signup</title>

    <style>

.accounts-main {
    padding: 100px 0;
    font-family: 'Poppins' !important;
}

.login,
.accounts-main input,
.register {
    border: 1px solid #ccc;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}

.login,
.register {
    padding: 30px;
    background-color: #f9f9f9;
}

.accounts-main h3 {
    font-size: 40px;
    color: black;
    text-align: center;
    padding: 15px 0;
    font-weight: 500;
    letter-spacing: -2px;
}

.accounts-main input {
    font-size: 14px;
    color: #222;
    font-weight: 600;
    margin: 15px 0;
    width: 100%;
    height: 55px;
    text-align: left;
    padding: 15px 20px;
    border-radius: 0;
}

.accounts-main button {
    background: linear-gradient(to right, #1f8554 , #a47e0a);
    color: white;
    height: 55px;
    font-weight: 600;
    font-size: 14px;
    /* padding: 15px; */
    text-align: center;
    width: 100%;
    border: none;
    margin: 15px 0;
    transition: .2s ease;
}

.accounts-main button:hover {
    background-color:linear-gradient(to right, #1f8554 , #a47e0a);
}

.other-options {
    width: 100%;
    list-style-type: none;
    display: inline-flex;
    justify-content: space-between;
}


.other-options label{
    font-size: 14px;
    line-height: 16px !important;
    font-family: 'Poppins';
    color: black;
    line-height: 15px;
    margin: 0;
    text-transform: none;
    height: fit-content;
}

.other-options p {
    font-size: 14px;
    line-height: 16px !important;
    font-family: 'Poppins';
    color: black;
    line-height: 15px;
    margin: 0;
    text-transform: none;
    height: fit-content;
    background: linear-gradient(to right, #1f8554, #b28f29);
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;
}

.other-options a:hover p {
    text-decoration: underline;
}

.form-check {
    display: inline-flex;
    justify-content: flex-start;
    align-items: center;
    height: fit-content;
}

.form-check input {
    height: 15px;
    border-radius: 0px !important;
    padding: 0;
    width: 15px;
    margin-right: 8px;
    border: 1px solid linear-gradient(to right, #1f8554 , #a47e0a);
    margin-top: 0;
    margin-bottom: 0;
}

.form-check-input:checked {
    background: linear-gradient(to right, #1f8554, #b28f29);
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;
    /* border-color: #0d6efd; */
    box-shadow: none;
    outline: none;
}

.form-check-input:checked,
.form-check-input:focus,
.form-check-input:active,
.form-check-input:visited {
    border: none;
    box-shadow: none;
    outline: none;
}

.half {
    width: 48% !important;
    display: inline;
}

.halfed {
    display: flex;
    justify-content: space-between;
}

.terms-and-conditions p {
    font-size: 14px;
    line-height: 16px !important;
    font-family: 'Poppins';
    color: black;
    line-height: 15px;
    margin: 0;
    text-transform: none;
}

.terms-and-conditions a {
    text-decoration: underline;
    background: linear-gradient(to right, #1f8554, #b28f29);
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;
}

.terms-and-conditions {
    margin-bottom: 15px;
}

.tnc{
    padding-left: 50px;
}

    </style>

  </head>

  <body>
    <!-- HEADER START -->
    <?php include "assets/header.php"; ?>
    <!-- HEADER END -->

<!-- Crousel Banner Starts -->
  <!-- BANNER START -->
  <section class="home-banner">
            <div class="title-of-banner">
                <img class="banner1" src="./images/Banner1.jpg"/>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="inner-text">
                                <p>LOGIN/SIGNUP</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
    <!-- Crousel Banner Starts -->
<!-- Crousel Banner Ends -->

<!-- account start -->

<section class="accounts-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login">
                    <h3>Login To Your Account</h3>
                    <form>
                        <input type="text" id="username" name="name" placeholder="Username">
                        <input type="password" name="password" placeholder="Password">
                        <button type="submit">LOGIN</button>
                    </form>
                    <ul class="other-options">
                        <li class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                        </li>
                        <li><a href="#"><p>Forgot Password?</p></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="register">
                    <h3>Register Your Account</h3>
                    <form>
                        <div class="halfed">
                            <input type="text" class="half" id="fname" name="fname" placeholder="First Name">
                            <input type="text" class="half" id="lname" name="lname" placeholder="Last Name">
                        </div>
                        <input type="email" id="email" name="email" placeholder="Email Address">
                        <input type="password" id="password1" name="password" placeholder="Password">
                        <input type="password" id="password2" name="password" placeholder="Retype Password">
                        <div class="terms-and-conditions">
                            <p>By creating an account, You agree to our <a class="tnc" href="#">Terms & Conditions</a></p>
                        </div>
                        <button type="submit">CREATE ACCOUNT</button>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--  account end -->





<!-- footer start -->

<!-- footer -->
<?php include "assets/footer.php"; ?>
  <!--  footer end-->
  
  
      <script
        src="https://kit.fontawesome.com/0ecb256005.js"
        crossorigin="anonymous"
      ></script>
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
    </body>
  </html>