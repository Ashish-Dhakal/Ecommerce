<?php include '../connection/config.php'; ?>

<?php
    if (isset($_POST['submit'])) {

        $c_fname = $_POST['fname'];
        $c_lname = $_POST['lname'];
        $c_address = $_POST['address'];
        $c_contactno = $_POST['contact'];
        $c_email = $_POST['email'];
        $c_pass = $_POST['password'];


        $query = "INSERT INTO customer (c_fname	,c_lname,c_address,c_contactno,	c_email,c_pass) VALUES ('$c_fname','$c_lname' , '$c_address','$c_contactno' ,'$c_email' , '$c_pass' )";

        if (mysqli_query($conn, $query)) {
         header("Location: login.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
            die();
        }
    }
    else
    {

    }
    
    ?> 
