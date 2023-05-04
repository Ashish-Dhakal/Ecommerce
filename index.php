<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-MALL | Your shopping Partner</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.font-awesome.com/c4522a710f.js"> </script>
</head>

<body>

    <!-- header nav bar starts  -->


    <nav class="header">
            <a href="#" class="image"> <img src="image/E-MALL.png" alt="LOGO"> </a>
            <a href="#">
                <h4 class="mall-name">E-MALL</h4>
            </a>
            <input class="search" placeholder="Search...">
            <button class="button" type="submit"> <i class="fas fa-search"></i> </button>
        
    </nav>

    <nav class="navbar" id="navBar">
        <li><a href="#">Home</a></li>
        <li><a href="#">Home</a></li>
        <li><a href="#">Home</a></li>
        <li><a href="#">Home</a></li>
        <li><a href="#">Home</a></li>
    </nav>

    <!-- nav bar header ends -->























    <script>
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

</body>

</html>