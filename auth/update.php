
<?php include '../connection/config.php'; 

 //query to register

if (isset($_POST['register'])) {

    $c_fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $c_lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $c_address = mysqli_real_escape_string($conn, $_POST['address']);
    $c_contactno = mysqli_real_escape_string($conn, $_POST['contact']);
    $c_email = mysqli_real_escape_string($conn, $_POST['email']);
    $c_pass = mysqli_real_escape_string($conn, $_POST['password']);

    $query1 = "Select c_email from customer where c_email = '$c_email' ";
    $result = $conn->query($query1);
    $row = $result->fetch_assoc();
    if($result->num_rows >0){
        echo 'email already exist';
        die();
    }
    else{
        $query = "INSERT INTO customer (c_fname	,c_lname,c_address,c_contactno,	c_email,c_pass) VALUES ('$c_fname','$c_lname' , '$c_address','$c_contactno' ,'$c_email' , '$c_pass' )";

        if (mysqli_query($conn, $query)) {
            header("Location: login.php");
            exit();
        } else {
            echo "Error:user cannot register ";
            die();
        }  

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
        $_SESSION['c_fname'] = $row['c_fname'];
        $_SESSION['c_lname'] = $row['c_lname'];
        $_SESSION['c_id'] = $row['c_id'];
        header("Location: ../index.php");
       
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
        $_SESSION['a_email'] = $row['a_email'];
        header("Location:../dashboard/admin-dashboard.php");
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