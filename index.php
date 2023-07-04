
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

    <!-- displaying the latest 4 uploaded all category product in database start -->
    <div class="category-info">
        <p>Electronic Device</p>
        <div class="show-more">
            <a href="./electronicdevice.php"> Show more<i class="fa-solid fa-chevron-right"></i></a>
        </div>
    </div>
    <div class="card-category">
        <?php
        $query1 = 'SELECT * FROM product WHERE p_category = "ElectronicDevice" ORDER BY p_id DESC LIMIT 4;';
        $result = $conn->query($query1);
        while ($row = $result->fetch_assoc()) {
        ?>
            <div class="card">

                <a href="http://localhost/ecommerc/productdisplay.php?id=<?= $row['p_id'] ?>">
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
                    <div class="new-btn">
                        New
                    </div>
                </a>

            </div>
        <?php
        }
        ?>
    </div>


    <div class="category-info">
        <p>TV and Homw Appliance</p>
        <div class="show-more">
            <a href="./homeappliance.php"> Show more<i class="fa-solid fa-chevron-right"></i></a>
        </div>
    </div>
    <div class="card-category">
        <?php
        $query2 = 'SELECT * FROM product WHERE p_category = "TVandHomeAppliance" ORDER BY p_id DESC LIMIT 4;';
        $result = $conn->query($query2);
        while ($row = $result->fetch_assoc()) {
        ?>
            <div class="card">

                <a href="http://localhost/ecommerc/productdisplay.php?id=<?= $row['p_id'] ?>">
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
                    <div class="new-btn">
                        New
                    </div>
                </a>

            </div>
        <?php
        }
        ?>
    </div>



    <div class="category-info">
        <p>Electronic Accessories</p>
        <div class="show-more">
            <a href="./electronicacceories.php"> Show more<i class="fa-solid fa-chevron-right"></i></a>
        </div>
    </div>
    <div class="card-category">
        <?php
        $query3 = 'SELECT * FROM product WHERE p_category = "ElectronicAccessories" ORDER BY p_id DESC LIMIT 4;';
        $result = $conn->query($query3);
        while ($row = $result->fetch_assoc()) {
        ?>
            <div class="card">

                <a href="http://localhost/ecommerc/productdisplay.php?id=<?= $row['p_id'] ?>">
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
                    <div class="new-btn">
                        New
                    </div>
                </a>

            </div>
        <?php
        }
        ?>
    </div>


    <div class="category-info">
        <p>Gadget</p>
        <div class="show-more">
            <a href=" ./gadget.php"> Show more <i class="fa-solid fa-chevron-right"></i> </a>
        </div>
    </div>
    <div class="card-category">
        <?php
        $query3 = 'SELECT * FROM product WHERE p_category = "Gadget" ORDER BY p_id DESC LIMIT 4;';
        $result = $conn->query($query3);
        while ($row = $result->fetch_assoc()) {
        ?>
            <div class="card">

                <a href="http://localhost/ecommerc/productdisplay.php?id=<?= $row['p_id'] ?>">
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
                        
                    </div>
                    <div class="new-btn">
                        New
                    </div>
                </a>

            </div>
        <?php
        }
        ?>
    </div>

    <!-- displaying the latest 4 uploaded of evey category in database start -->

    <!-- footer section start -->
    <?php include './footer.php'; ?>
    <!-- footer section ends -->

    <script src="resources/script.js">

    </script>
    <script src="resources/sticky.js"></script>
    <!-- <script>
        
      
    </script> -->


</body>

</html>