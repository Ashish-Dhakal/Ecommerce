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

    <div class="search-form">
        <form action="" class="form" method="post">
            <div class="input_field">
                <label> Electronic Acceories</label>
            </div>
            <div class="input_field ">
                <label class="in-f">Product</label>
                <select name="product" id="product">
                    <option value="">Select the Product</option>
                    <option value="Mobile Accessories">Mobile Accessories</option>
                    <option value="Camera Accessories">Camera Accessories</option>
                    <option value="Computer Accessories">Computer Accessories</option>
                    <option value="Storage">Storage</option>
                </select>
            </div>
            <div class="input_field">
                <label class="in-f"> Select Price Range</label>
                <input type="number" class="input" name="lower-price" placeholder="Min-Price"> -
                <input type="number" class="input" name="max-price" placeholder="Max-Price">
            </div>
            <div class="input_field">
                <button type="submit" class="search-btn" name="search-btn"> Search</button>
            </div>
            <div class="input_field">
                <a href="./electronicacceories.php"> Reset</a>
            </div>
        </form>

    </div>
    <div class="card-category">

        <?php
        if (isset($_POST['search-btn'])) {
            // Search form submitted
            $product = $_POST['product'];
            $minPrice = $_POST['lower-price'];
            $maxPrice = $_POST['max-price'];

            $query = "SELECT * FROM product WHERE p_subcategory = '$product' AND p_price >= $minPrice AND p_price <= $maxPrice";
            $result = $conn->query($query);

            while ($row = $result->fetch_assoc()) {
        ?>
                <a href="http://localhost/ecommerc/productdisplay.php?id=<?= $row['p_id'] ?>">

                    <div class="card" style="margin-bottom: 25px;">
                        <div class="product-image">
                            <img src="resources/image/uploads/<?php echo $row["p_image"] ?>" alt="">
                        </div>
                        <div class="product-info">
                            <div class="product-rating"></div>
                            <p><?php echo $row["p_name"] ?></p>
                            <p><?php echo $row["p_price"] ?></p>
                        </div>
                        <div class="addtocart" style="justify-content: space-around; ">
                            Add to cart<i class="fa-solid fa-cart-shopping"></i>

                        </div>
                    </div>
                </a>
            <?php
            }
        } else {
            // Display all products in 'Gadget' category
            $query1 = 'SELECT * FROM product WHERE p_category = "ElectronicAccessories";';
            $result1 = $conn->query($query1);

            while ($row = $result1->fetch_assoc()) {
            ?>
                <a href="http://localhost/ecommerc/productdisplay.php?id=<?= $row['p_id'] ?>">
                    <div class="card" style="margin-bottom: 25px;">
                        <div class="product-image">
                            <img src="resources/image/uploads/<?php echo $row["p_image"] ?>" alt="">
                        </div>
                        <div class="product-info">
                            <div class="product-rating"></div>
                            <p><?php echo $row["p_name"] ?></p>
                            <p><?php echo $row["p_price"] ?></p>
                        </div>
                        <div class="addtocart" style="justify-content: space-around; ">
                            Add to cart<i class="fa-solid fa-cart-shopping"></i>

                        </div>
                    </div>
                </a>
        <?php
            }
        }


        ?>


    </div>
</body>

</html>