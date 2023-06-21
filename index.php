<?php include './connection/config.php';
$query = 'SELECT *FROM product';
$result = $conn->query($query);
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
    <?php include './header.php'; ?>
    <!-- home section starts here -->
    <div class="hero-section">

        <div class="img-slider">

            <div class="slide active">
                <div class="image">
                    <img src="resources/image/slider-img1.png" alt="">
                </div>


                <div class="info ">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic placeat distinctio facilis quidem velit autem iure dolorum nobis cum</p>
                </div>

                <div class="shopbtn">
                    <a href="#"> Shop Now</a>
                </div>
            </div>

            <div class="slide">

                <div class="image">
                    <img src="resources/image/slider-img2.png" alt="">
                </div>

                <div class="info ">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic placeat distinctio facilis quidem velit autem iure dolorum nobis cum</p>
                </div>

                <div class="shopbtn">
                    <a href="#"> Shop Now</a>
                </div>

            </div>


            <div class="slide">

                <div class="image">
                    <img src="resources/image/slider-img3.png" alt="">
                </div>

                <div class="info ">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic placeat distinctio facilis quidem velit autem iure dolorum nobis cum</p>
                </div>

                <div class="shopbtn">
                    <a href="#"> Shop Now</a>
                </div>

            </div>


            <div class="slide">

                <div class="image">
                    <img src="resources/image/slider-img4.png" alt="">
                </div>

                <div class="info ">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic placeat distinctio facilis quidem velit autem iure dolorum nobis cum</p>
                </div>

                <div class="shopbtn">
                    <a href="#"> Shop Now</a>
                </div>

            </div>

            <div class="navigation">
                <div class="btn active"></div>
                <div class="btn"></div>
                <div class="btn"></div>
                <div class="btn"></div>
            </div>


        </div>
    </div>
    <!-- home section ends from here -->

    <!-- features product starts here -->

    <section class="products">
        <h4>Product Category</h4>
        <div class="all-category">
            <div class="product">
                <div class="image">
                    <img src="resources/image/category-img1.png" alt="">
                </div>

                <a href="#" class="cate-btn"> Electronic Device</a>
            </div>

            <div class="product">
                <div class="image">
                    <img src="resources/image/category-img2.png" alt="">
                </div>

                <a href="#" class="cate-btn"> Home Appliances</a>
            </div>

            <div class="product">
                <div class="image">
                    <img src="resources/image/category-img3.png" alt="">
                </div>

                <a href="#" class="cate-btn"> Electronic Acceories</a>
            </div>

            <div class="product">
                <div class="image">
                    <img src="resources/image/category-img4.png" alt="">
                </div>

                <a href="#" class="cate-btn"> Gadgets</a>
            </div>
        </div>

    </section>

    <!-- features product ends here -->

    <!-- displaying the latest 4 uploaded Electronic Device in database start -->
    <div class="category-info">
        <p>Electronic Device</p>
        <div class="show-more">
            <a href="#"> Show more<span class="material-symbols-outlined">
                    chevron_right
                </span></a>
        </div>
    </div>
    <div class="card-category">
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
            <div class="card">


                <div class="product-image">
                    <img src="<?php echo $row["p_image"] ?>" alt="">
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
                <div class="new-btn">
                    New
                </div>

            </div>
        <?php
        }
        ?>
    </div>

   

    <!-- displaying the latest 4 uploaded Electronic Device in database start -->

    <script src="resources/script.js">

    </script>
    <script src="resources/sticky.js"></script>
    <!-- <script>
        
      
    </script> -->


</body>

</html>