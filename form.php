<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h2>Use this form to enter data in Database</h2>

<div>
  <form action="./db/checkdata.php" method="post">
    <h3>About Page</h3>
    
    <label for="fname">About Image</label>
    <input type="text" id="fname" name="aboutimage">

    <label for="lname">About Small Title</label>
    <input type="text" id="lname" name="aboutsmalltitle">

    <label for="fname">About Title</label>
    <input type="text" id="fname" name="abouttitle">

    <label for="lname">About Short Description 1</label>
    <input type="text" id="lname" name="aboutshortdes1">

    <label for="fname">About Short Description 2</label>
    <input type="text" id="fname" name="aboutshortdes2">

    <label for="lname">About Long Description</label>
    <input type="text" id="lname" name="aboutlongdes">

    <label for="fname">About Review Title</label>
    <input type="text" id="fname" name="aboutreviewtitle">

    <label for="lname">About Review Description</label>
    <input type="text" id="lname" name="aboutreviewdes">

    <label for="fname">About Review Name</label>
    <input type="text" id="fname" name="aboutreviewname">

    <label for="lname">About Days</label>
    <input type="text" id="lname" name="aboutdays">

    <label for="fname">About Days Text</label>
    <input type="text" id="fname" name="aboutdaystext">

    <label for="lname">About Free</label>
    <input type="text" id="lname" name="aboutfree">

    <label for="fname">About Free Text</label>
    <input type="text" id="fname" name="aboutfreetext">

    <label for="lname">About Day Num</label>
    <input type="text" id="lname" name="aboutdaynum">

    <label for="fname">About Day Num Text</label>
    <input type="text" id="fname" name="aboutdaynumtext">

    <label for="lname">About Find Product</label>
    <input type="text" id="lname" name="aboutfindproduct">

    <label for="fname">About Find Product Description</label>
    <input type="text" id="fname" name="aboutfindproductdes">

    <label for="lname">About Learn CBD</label>
    <input type="text" id="lname" name="aboutlearncbd">

    <label for="fname">About Subtitle CBD 1</label>
    <input type="text" id="fname" name="aboutsubcbd1">

    <label for="lname">About Subtitle CBD Text 1</label>
    <input type="text" id="lname" name="aboutsubcbdtext1">

    <label for="fname">About Subtitle CBD 2</label>
    <input type="text" id="fname" name="aboutsubcbd2">

    <label for="lname">About Subtitle CBD Text 2</label>
    <input type="text" id="lname" name="aboutsubcbdtext2">
 
    <input type="submit" name="aboutsubmit" value="Submit">
  </form>
</div>


<div>
  <form action="./db/checkdata.php" method="post">
    <h3>Product Page</h3>
    
    <label for="fname">Product Image</label>
    <input type="text" id="fname" name="productimage">

    <label for="lname">Product Title</label>
    <input type="text" id="lname" name="producttitle">

    <label for="fname">Product Price</label>
    <input type="text" id="fname" name="productprice">
 
    <input type="submit" name="productsubmit" value="Submit">
  </form>
</div>

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
        header("location:contact.php"); 
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>
