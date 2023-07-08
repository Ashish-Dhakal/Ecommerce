<?php include '../connection/config.php';

if (($_SESSION['a_email']) == null) {
    header('Location: ../auth/admin.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;700&display=swap" rel="stylesheet">
    <!-- fontaesome symbol -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="dashboard.css">

</head>

<body>
    <div class="grid-container">
        <!-- header -->
        <header class="header">
            <div class="menu-icon" onclick="openSidebar()">
                <span class="material-symbols-outlined">Menu</span>
                <?php echo $_SESSION['a_email']; ?>
            </div>
            <!-- <div class="header-left">
                <span class="material-symbols-outlined">search</span>
            </div> -->
            <div class="header-right">
                <!-- <span class="material-symbols-outlined">notifications</span>
                <span class="material-symbols-outlined">email</span> -->
                <i class="fa-solid fa-user"></i>
            </div>
        </header>
        <!-- sidebar -->
        <aside id="sidebar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                    <a href="./admin-dashboard.php">E-Mall</a>
                </div>
                <span class="material-symbols-outlined" onclick="closeSidebar()">close</span>
            </div>
            <ul class="sidebar-list">
                <li class="sidebar-list-item"><a href="./admin-dashboard.php">Dashboard</a></li>
                <li class="sidebar-list-item"><a href="./addproduct.php">Add Product</a></li>
                <li class="sidebar-list-item"><a href="./admin-orderedproduct.php">Ordered Product</a></li>
                <li class="sidebar-list-item"><a href="">Product Process</a></li>
                <li class="sidebar-list-item"><a href="">Manage Product</a></li>
                <li class="sidebar-list-item"><a href="./logout.php">Logout</a></li>
            </ul>

        </aside>




        <script src="js/script.js"></script>
</body>

</html>