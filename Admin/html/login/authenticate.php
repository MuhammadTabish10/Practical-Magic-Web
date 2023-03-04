<?php
    session_start ();
    include("conn.php"); 
 
    if(isset($_REQUEST['loginsub']))
    {
        $myusername = $_REQUEST['uname'];
        $mypassword = $_REQUEST['upassword'];

        $sql = mysqli_query($conn,"SELECT * FROM users WHERE uname = '$myusername' AND upassword = '$mypassword'");

        $result=mysqli_fetch_array($sql);
        if($result)
        {
            $_SESSION['login'] = 1;
            // Start the session
            $_SESSION['username'] = $myusername;
            // Set custom session timeout
            $_SESSION['timeout'] = time() + (1*60);

            // Redirect to the home page
                 header("location:../index_panal.php");
             
        }
        else 
        {
            header("location:login.php?err=1");
        }
    }

    if (isset($_REQUEST['signup_sub'])) {
        // Get form data
        $firstname = $_REQUEST['firstname'];
        $lastname = $_REQUEST['lastname'];
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        // Insert the user into the database
        $query = "INSERT INTO users (Firstname,Lastname,uname,Email,upassword) 
        VALUES ('".$firstname."','".$lastname."','".$username."','".$email."','".$password."')";
        mysqli_query($conn, $query);
    
        // Set a session message
        $_SESSION['message'] = "You are now logged in";
        $_SESSION['firstname'] = $firstname;
    
        // Redirect to the login page
        header('location: login.php');
    }
    
?>
