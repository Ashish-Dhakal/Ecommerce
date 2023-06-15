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


                <div class="l-info ">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic placeat distinctio facilis quidem velit autem iure dolorum nobis cum</p>
                </div>
            </div>

            <div class="slide">

                <div class="image">
                    <img src="resources/image/slider-img2.png" alt="">
                </div>

                <div class="r-info ">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic placeat distinctio facilis quidem velit autem iure dolorum nobis cum</p>
                </div>

            </div>


            <div class="slide">

                <div class="image">
                    <img src="resources/image/slider-img3.png" alt="">
                </div>

                <div class="l-info ">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic placeat distinctio facilis quidem velit autem iure dolorum nobis cum</p>
                </div>

            </div>


            <div class="slide">

                <div class="image">
                    <img src="resources/image/slider-img4.png" alt="">
                </div>

                <div class="r-info ">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic placeat distinctio facilis quidem velit autem iure dolorum nobis cum</p>
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



    <script src="./resources/script.js" type="text/javascript">
        window.onscroll = function() {
            myFunction()
        }
        var header = document.getElementById("navBar");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>

    <!-- <script>
      
    </script> -->


</body>

</html>