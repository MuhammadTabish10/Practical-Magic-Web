<?php
include "conn.php";
echo "<pre>";
print_r($_POST);


if (isset($_POST['HomeSubmit'])) {
    $Heading = $_POST['heading1'];
    $Description = $_POST['desc1'];
    $Image1 = $_POST['img1'];
    $Image1Des= $_POST['img1text'];
    $Image2 = $_POST['img2'];
    $Image2Des = $_POST['img2text'];
    $Image3 = $_POST['img3'];
    $Image3Des = $_POST['img3text'];
    $Image4 = $_POST['img4'];
    $Image4Des = $_POST['img4text'];
    $Image5 = $_POST['img5'];
    $Image5Des = $_POST['img5text'];
    $Image6 = $_POST['img6'];
    $Image6Des = $_POST['img6text'];
    $TopSellimg1 = $_POST['topimg1'];
    $TopSell1Des = $_POST['topdesc1'];
    $TopSellimg2 = $_POST['topimg2'];
    $TopSell2Des = $_POST['topdesc2'];
    $TopSellimg3 = $_POST['topimg3'];
    $TopSell3Des = $_POST['topdesc3'];
    $TopSellimg4 = $_POST['topimg4'];
    $TopSell4Des = $_POST['topdesc4'];
    $TopSellimg5 = $_POST['topimg5'];
    $TopSell5Des = $_POST['topdesc5'];
    $TopSellimg6 = $_POST['topimg6'];
    $TopSell6Des = $_POST['topdesc6'];
    $TopSellimg7 = $_POST['topimg7'];
    $TopSell7Des = $_POST['topdesc7'];
    $TopSellimg8 = $_POST['topimg8'];
    $TopSell8Des = $_POST['topdesc8'];
    $Price1 = $_POST['topprice1'];
    $Price2 = $_POST['topprice2'];
    $Price3 = $_POST['topprice3'];
    $Price4 = $_POST['topprice4'];
    $Price5 = $_POST['topprice5'];
    $Price6 = $_POST['topprice6'];
    $Price7 = $_POST['topprice7'];
    $Price8 = $_POST['topprice8'];
    $CBDMainTitle = $_POST['CBDmaintitle'];
    $CBDHeading1 = $_POST['CBDhead1'];
    $CBDHeading2 = $_POST['CBDhead2'];
    $CBDDes1 = $_POST['CBDdesc1'];
    $CBDDes2 = $_POST['CBDdesc2'];
  

    $sql = "INSERT INTO home_table(heading1,desc1,img1,img1text,img2,img2text,img3,img3text,img4,img4text,img5,img5text,img6,img6text,topimg1,
                        topdesc1,topimg2,topdesc2,topimg3,topdesc3,topimg4,topdesc4,topimg5,topdesc5,topimg6,topdesc6,topimg7,topdesc7,topimg8,
                        topdesc8,topprice1,topprice2,topprice3,topprice4,topprice5,topprice6,topprice7,topprice8,CBDmaintitle,CBDhead1,CBDhead2,
                        CBDdesc1,CBDdesc2)
    VALUES('".$Heading."','".$Description."','".$Image1."','".$Image1Des."','".$Image2."','".$Image2Des."','".$Image3."','".$Image3Des."',
          '".$Image4."','".$Image4Des."','".$Image5."','".$Image5Des."','".$Image6."','".$Image6Des."','".$TopSellimg1."','".$TopSell1Des."',
          '".$TopSellimg2."','".$TopSell2Des."','".$TopSellimg3."','".$TopSell3Des."','".$TopSellimg4."','".$TopSell4Des."','".$TopSellimg5."',
          '".$TopSell5Des."','".$TopSellimg6."','".$TopSell6Des."','".$TopSellimg7."','".$TopSell7Des."','".$TopSellimg8."','".$TopSell8Des."',
          '".$Price1."','".$Price2."','".$Price3."','".$Price4."','".$Price5."','".$Price6."','".$Price7."','".$Price8."','".$CBDMainTitle."',
          '".$CBDHeading1."','".$CBDHeading2."','".$CBDDes1."','".$CBDDes2."')";

    if(mysqli_query($conn, $sql)){
        echo "New Record Created Successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

else if (isset($_POST['aboutsubmit'])) {
    $aboutImage = $_POST['aboutimage'];
    $aboutSmallTitle = $_POST['aboutsmalltitle'];
    $aboutTitle = $_POST['abouttitle'];
    $aboutShortDescription1 = $_POST['aboutshortdes1'];
    $aboutShortDescription2 = $_POST['aboutshortdes2'];
    $aboutLongdesDescription = $_POST['aboutlongdes'];
    $aboutReviewTitle = $_POST['aboutreviewtitle'];
    $aboutReviewDescription = $_POST['aboutreviewdes'];
    $aboutReviewName = $_POST['aboutreviewname'];
    $aboutDays = $_POST['aboutdays'];
    $aboutDaysText = $_POST['aboutdaystext'];
    $aboutFree = $_POST['aboutfree'];
    $aboutFreeText = $_POST['aboutfreetext'];
    $aboutDayNum = $_POST['aboutdaynum'];
    $aboutDayNumText = $_POST['aboutdaynumtext'];
    $aboutFindProduct = $_POST['aboutfindproduct'];
    $aboutFindProductDescription = $_POST['aboutfindproductdes'];
    $aboutLearnCBD = $_POST['aboutlearncbd'];
    $aboutSubCBD1 = $_POST['aboutsubcbd1'];
    $aboutSubCBDText1 = $_POST['aboutsubcbdtext1'];
    $aboutSubCBD2 = $_POST['aboutsubcbd2'];
    $aboutSubCBDText2 = $_POST['aboutsubcbdtext2'];

    $sql = "INSERT INTO abouttable(aboutImage,aboutSmallTitle,aboutTitle,aboutShortDes1,aboutShortDes2,aboutLongDes,aboutReviewTitle,aboutReviewDes,aboutReviewName,aboutDays,aboutDaysText,aboutFree,aboutFreeText,aboutDayNum,aboutDayNumText,aboutFindProduct,aboutFindProductDes,aboutLeanCBD,aboutSubtitleCBD1,aboutSubtitleCBDText1,aboutSubtitleCBD2,aboutSubtitleCBDText2)
    VALUES('".$aboutImage."','".$aboutSmallTitle."','".$aboutTitle."','".$aboutShortDescription1."','".$aboutShortDescription2."','".$aboutLongdesDescription."','".$aboutReviewTitle."','".$aboutReviewDescription."','".$aboutReviewName."','".$aboutDays."','".$aboutDaysText."','".$aboutFree."','".$aboutFreeText."','".$aboutDayNum."','".$aboutDayNumText."','".$aboutFindProduct."','".$aboutFindProductDescription."','".$aboutLearnCBD."','".$aboutSubCBD1."','".$aboutSubCBDText1."','".$aboutSubCBD2."','".$aboutSubCBDText2."')";

    if(mysqli_query($conn, $sql)){
        echo "New Record Created Successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

else if(isset($_POST['productsubmit']))
{
    $ID = $_POST['ID'];
    $productImage = $_POST['productimage'];
    $productTitle = $_POST['producttitle'];
    $productPrice = $_POST['productprice'];
    $status = $_POST['status'];

    $sql = "INSERT INTO producttable(ID,productImage,productTitle,productPrice,status)
    VALUES('".$ID."','".$productImage."','".$productTitle."','".$productPrice."','$status')";

    if(mysqli_query($conn, $sql)){
        header("location:../Admin/html/product_panal.php"); 
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

else if(isset($_POST['DltButton']))
{
    $ID = $_POST['ID'];

    $sql = "DELETE FROM producttable WHERE ID ='$ID'";
    $query = mysqli_query($conn, $sql);


    if($query){
        echo '<script> alert("Data Deleted Successfully"); </script>';
        header("location:../Admin/html/product_panal.php"); 
    } else {
        echo '<script> alert("Data Not Deleted"); </script>';
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

else if(isset($_POST['updatebtn']))
{
    $ID = $_POST['ID'];
    $productImage = $_POST['productimage'];
    $productTitle = $_POST['producttitle'];
    $productPrice = $_POST['productprice'];
    $status = $_POST['status'];

    $sql = "UPDATE producttable SET productimage = '" . $productImage . "', producttitle = '" . $productTitle . "',
    productprice = '" . $productPrice . "', status = '$status' WHERE ID ='$ID' ";
    //echo $sql;
    //die;
    $query = mysqli_query($conn, $sql);

    if($query){
        header("location:../Admin/html/product_panal.php"); 
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

else if(isset($_POST['cat1'])){
    $sql1 = "SELECT * FROM producttable WHERE ID % 2 = 0";
    $result = mysqli_query($conn, $sql1);
    $data = array();

    mysqli_close($conn);
}

else if(isset($_POST['cat2'])){
    $sql1 = "SELECT * FROM producttable WHERE ID % 2 != 0";
    $result = mysqli_query($conn, $sql1);
    $data = array();

    mysqli_close($conn);
}

else if(isset($_POST['contactSubmit']))
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

else if(isset($_POST['ContactDltButton']))
{
    $ID = $_POST['ID'];

    $sql = "DELETE FROM contactus WHERE ID ='$ID'";
    $query = mysqli_query($conn, $sql);


    if($query){
        echo '<script> alert("Data Deleted Successfully"); </script>';
        header("location:../Admin/html/contactus_panal.php"); 
    } else {
        echo '<script> alert("Data Not Deleted"); </script>';
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

else if(isset($_POST['contactupdatebtn']))
{
    $ID = $_POST['ID'];
    $Name = $_POST['name'];
    $Address = $_POST['address'];
    $Email = $_POST['email'];
    $Type = $_POST['type'];
    $status = $_POST['status'];

    $sql = "UPDATE contactus SET Name = '" . $Name . "', Address = '" . $Address . "',
    Email = '" . $Email . "', Status = '$status' WHERE ID ='$ID' ";
    //echo $sql;
    //die;
    $query = mysqli_query($conn, $sql);

    if($query){
        header("location:../Admin/html/contactus_panal.php"); 
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>