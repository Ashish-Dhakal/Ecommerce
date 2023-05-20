<?php include '../connection/config.php'; 

 //query to register

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
   //query to login

if  (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    $query1 = "SELECT * FROM customer WHERE c_email = '$email' AND c_pass = '$pass'";
    $result = $conn->query($query1);
    $row = $result->fetch_assoc();

    if ($result->num_rows == 1) {
        header("Location: ../dashboard/user.php");
        exit();
    } else {
        header("Location: ./login.php?error=1");
        exit();
    }

}

//query to admin login

if (isset($_POST['admin_login'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    $query2 = "SELECT * FROM admin WHERE a_email = '$email' AND a_pass = '$pass'";
    $result1 = $conn->query($query2);
    $row = $result1->fetch_assoc();

    if ($result1->num_rows == 1) {
        header("Location: ../dashboard/admin.php");
        exit();
    } else {
        header("Location: ./admin.php?error=1");
        exit();
    }
} 
else {
    echo "aayena";
}

?> 