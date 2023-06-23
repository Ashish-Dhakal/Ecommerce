<?php include './connection/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./resources/css/index.css">
</head>

<body>
    <?php include './header.php'; ?>
    <div class="card-category">
        <?php
        $query1 = 'SELECT * FROM product WHERE p_category = "ElectronicDevice";';
        $result = $conn->query($query1);
        while ($row = $result->fetch_assoc()) {
        ?>
            <div class="card">


                <div class="product-image">
                    <img src="resources/image/uploads/<?php echo $row["p_image"] ?>" alt="">
                </div>
                <div class="product-info">
                    <div class="product-rating">

                    </div>
                    <p><?php echo $row["p_name"] ?></p>
                    <p><?php echo $row["p_price"] ?></p>
                </div>
                <div class="addtocart" style="justify-content: space-around; ">
                    Add to cart<i class="fa-solid fa-cart-shopping"></i>
                    </span>
                </div>


            </div>
        <?php
        }
        ?>
    </div>

</body>

</html>