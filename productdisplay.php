<?php include './header.php'; ?>
<?php
$id = $_GET['id'];
$query = "SELECT * FROM product WHERE p_id = $id ";
$result = $conn->query($query);
$row = $result->fetch_assoc();
?>

<div class="product-display-container">

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
            <!-- <form action="./cart.php?id=<?php echo $row["p_id"] ?>" method="post">
                <input type="number" name="quantity">
                <button type="submit" name="addtocart"> Add to Cart</button>
            </form> -->

            <form action="./cart.php?id=<?php echo $row["p_id"] ?>" method="post">
                <div class="wrapper">
                    <div class="count">
                        <button class="minus">-</button>
                        <div class="num">1</div>
                        <button class="add">+</button>

                        <button type="submit" name="addtocart">Add to Cart</button>
                    </div>
                </div>
                <input type="hidden" name="quantity" value="1">

            </form>
        </div>


    </div>
</div>





<!-- footer section start -->
<?php include './footer.php'; ?>
<!-- footer section ends -->
<script>
    $(document).ready(function() {
        var num = 1;

        $(".minus").click(function(e) {
            e.preventDefault();
            if (num > 1) {
                num--;
                $(".num").text(num);
                $("input[name='quantity']").val(num); // Update hidden input field
            }
        });

        $(".add").click(function(e) {
            e.preventDefault();
            num++;
            $(".num").text(num);
            $("input[name='quantity']").val(num); // Update hidden input field
        });

        $(".num").text(num);

        $("form").submit(function(e) {
            if (!$(e.target).find("button[name='addtocart']").is(":focus")) {
                e.preventDefault();
            }
        });
    });
</script>



</body>

</html>