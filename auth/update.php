<?php include '../connection/config.php'; ?>

<?php
    if (isset($_POST['submit'])) {

        $c_fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $c_lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $c_address = mysqli_real_escape_string($conn, $_POST['address']);
        $c_contactno = mysqli_real_escape_string($conn, $_POST['contact']);
        $c_email = mysqli_real_escape_string($conn, $_POST['email']);
        $c_pass = mysqli_real_escape_string($conn, $_POST['password']);


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

