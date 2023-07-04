<?php include './connection/config.php';
$id = $_GET['id'];
$quantity = $_POST['quantity'];
$query = "SELECT * FROM product WHERE p_id = $id ";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$p_id = $row['p_id'];
$p_name = $row['p_name'];
$p_price = $row['p_price'];
$p_category = $row['p_category'];




if ($quantity >= 1) {
    $price = $quantity * $p_price;

    $c_fname = $_SESSION['c_fname'];
    $query1 = "SELECT c_id FROM customer WHERE c_fname = '$c_fname'";
    $result1 = $conn->query($query1);

    if ($result1->num_rows > 0) {
        $row1 = $result1->fetch_assoc();
        $c_id = $row1['c_id'];

        $query2 = "INSERT INTO cart (c_id, p_id, quantity, total_price) VALUES ('$c_id', '$p_id', '$quantity', '$price')";

        if (mysqli_query($conn, $query2)) {
            if ($p_category == 'ElectronicDevice') {
                header("Location: electronicdevice.php");
                exit();
            } elseif ($p_category == 'TVandHomeAppliance') {
                header("Location: homeappliance.php");
                exit();
            } elseif ($p_category == 'ElectronicAccessories') {
                header("Location: electronicacceories.php");
                exit();
            } elseif ($p_category == 'Gadget') {
                header("Location: gadget.php");
                exit();
            } else {
                header("Location: index.php");
                exit();
            }
        } else {
            echo "Error: Failed to insert into cart table";
            die();
        }
    } else {
        header("Location: ./auth/login.php");
        die();
    }
} else {
    echo "Enter a valid quantity number";
}
?>