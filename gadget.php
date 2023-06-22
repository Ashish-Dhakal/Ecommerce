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
        <form action="" class="form">
            <div class="input_field">
                <label> Gadget</label>
            </div>
            <div class="input_field ">
                <label class="in-f">Product</label>
                <select name="cars" id="cars">
                    <option value="">Select the Product</option>
                    <option value="Drome">Drone</option>
                    <option value="VR">VR</option>
                </select>
            </div>
            <div class="input_field">
                <label class="in-f"> Select Price Range</label>
                <input type="number" class="input" name="lower-price" placeholder="Min-Price"> -
                <input type="number" class="input" name="lower-price" placeholder="Max-Price">
            </div>
            <div class="input_field">
                <button type="submit" class="search-btn" name="search-btn"> Search</button>
            </div>
        </form>

    </div>
    <div class="card-category">
        <?php
        $query1 = 'SELECT * FROM product WHERE p_category = "Gadget";';
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
                <div class="addtocart">
                    Add to cart <span class="material-symbols-outlined">
                        shopping_bag
                    </span>
                </div>
                

            </div>
        <?php
        }
        ?>
    </div>

</body>

</html>