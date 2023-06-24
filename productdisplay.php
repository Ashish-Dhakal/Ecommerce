<?php include './connection/config.php'; ?>
<?php
$id = $_GET['id'];
$query = "SELECT * FROM product WHERE p_id = $id ";
$result = $conn->query($query);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./resources/css/index.css">
</head>

<body>
    <div class="image-info-container">

        <div class="image-container">
            <img src="resources/image/uploads/<?php echo $row["p_image"] ?>" alt="">
        </div>
        <div class="image-to-cartinfo">
            <div class="cart-product-name">
                <p><?php echo $row["p_name"] ?></p>
            </div>
            <div class="cart-product-category">
                <p><?php echo $row["p_category"] ?></p>
            </div>
            <div class="cart-product-subcategory">
                <p><?php echo $row["p_subcategory"] ?></p>
            </div>
            <div class="cart-product-brand">
                <p><?php echo $row["p_brand"] ?></p>
            </div>
            <div class="cart-product-price">
                <p><?php echo $row["p_price"] ?></p>
            </div>
        </div>
        <form action="">
            <div class="cart-product-price">
            </div>
            <button type="submit" name="addtocart"> Add to Cart</button>
        </form>

    </div>

</body>

</html>