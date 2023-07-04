<?php include './header.php'; ?>
<?php
$id = $_GET['id'];
$query = "SELECT * FROM product WHERE p_id = $id ";
$result = $conn->query($query);
$row = $result->fetch_assoc();
?>


<div class="product_info-container">

    <div class="image-container">
        <img src="resources/image/uploads/<?php echo $row["p_image"] ?>" alt="">
    </div>
    <div class="product_info">

        <div class="cart-product-name">
            <p>
                <label>Name :</label>
                <?php echo $row["p_name"]; ?>
            </p>
        </div>
        <div class="cart-product-category">
            <p>
                <label> Category :</label>
                <?php echo $row["p_category"] ?>
            </p>
        </div>
        <div class="cart-product-subcategory">
            <p>
                <label>Sub-Category :</label>
                <?php echo $row["p_subcategory"] ?>
            </p>
        </div>
        <div class="cart-product-brand">
            <p>
                <label> Brand :</label>
                <?php echo $row["p_brand"] ?>
            </p>
        </div>
        <div class="cart-product-brand desc-info">
            <p>
                <label> Description :</label>
                <?php echo $row["p_description"] ?>
            </p>
        </div>
        <div class="cart-product-price">
            <p>
                <label> Price :</label>
                <?php echo $row["p_price"] ?>
            </p>
        </div>

        <div class="cart-product-price">
        </div>
        <form action="./cart.php?id=<?php echo $row["p_id"] ?>" method="post">
            <input type="number" name="quantity">
            <button type="submit" name="addtocart"> Add to Cart</button>
        </form>
    </div>


</div>

<!-- footer section start -->
<?php include './footer.php'; ?>
<!-- footer section ends -->

</body>

</html>