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
    <!-- google symbol -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="dashboard.css">

</head>

<body>
    <div class="grid-container">
        <!-- header -->
        <header class="header">
            <div class="menu-icon" onclick="openSidebar()">
                <span class="material-symbols-outlined">Menu</span>
            </div>
            <!-- <div class="header-left">
                <span class="material-symbols-outlined">search</span>
            </div> -->
            <div class="header-right">
                <!-- <span class="material-symbols-outlined">notifications</span>
                <span class="material-symbols-outlined">email</span> -->
                <span class="material-symbols-outlined">account_circle</span>
            </div>
        </header>
        <!-- sidebar -->
        <aside id="sidebar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                   E-Mall
                </div>
                <span class="material-symbols-outlined" onclick="closeSidebar()">close</span>
            </div>
            <ul class="sidebar-list">
                <li class="sidebar-list-item"><a href="">Dashboard</a></li>
                <li class="sidebar-list-item"><a href="">Add Product</a></li>
                <li class="sidebar-list-item"><a href="">Ordered Product</a></li>
                <li class="sidebar-list-item"><a href="">Product Process</a></li>
                <li class="sidebar-list-item"><a href="">Manage Product</a></li>
            </ul>

        </aside>
    
    </div>



    <script src="js/script.js"></script>
</body>

</html>