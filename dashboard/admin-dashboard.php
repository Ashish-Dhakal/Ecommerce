<?php include '../connection/config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include '../dashboard/admin-dash.php'; ?>
    <!-----------------start of main section------------------>
    <main class="main-container">
        <div class="main-title">
            Dashboard
        </div>
        <div class="main-cards">


            <div class="card">
                <div class="card-inner">
                    <div class="card-heading">
                        Total Product
                    </div>

                    <i class="fa-solid fa-warehouse" style="color: #ffffff;"></i>
                </div>
                <?php
                $query = 'SELECT COUNT(*) AS total_products FROM product';
                $result = $conn->query($query);

                if ($result && $result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $totalProducts = $row['total_products'];
                } else {
                    $totalProducts = "No products found.";
                }
                ?>
                <div class="card-number">


                    <?php echo $totalProducts; ?></div>

            </div>

            <div class="card">
                <div class="card-inner">
                    <div class="card-heading">
                        Total User
                    </div>
                    <i class="fa-regular fa-user"></i>
                </div>
                <?php
                $query1 = 'SELECT COUNT(*) AS total_user FROM customer';
                $result = $conn->query($query1);

                if ($result && $result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $totalUser = $row['total_user'];
                } else {
                    $totalUser = "No products found.";
                }
                ?>
                <div class="card-number">
                    <?php echo $totalUser; ?>
                </div>

            </div>

            <div class="card">
                <div class="card-inner">
                    <div class="card-heading">
                        Ordered Product
                    </div>
                    <i class="fa-thin fa-bags-shopping"></i>
                </div>
                <div class="card-number">4,122</div>

            </div>

            <div class="card">
                <div class="card-inner">
                    <div class="card-heading">
                        Processed Product
                    </div>
                    <i class="fa-sharp fa-solid fa-arrow-progress"></i>
                </div>
                <div class="card-number">4,122</div>

            </div>

            <div class="card">
                <div class="card-inner">
                    <div class="card-heading">
                        Total sales
                    </div>
                    <i class="fa-sharp fa-solid fa-dollar-sign"></i>
                </div>
                <div class="card-number">22</div>

            </div>


        </div>
    </main>
    <!--------- end of main section------- -->

    </div>

</body>

</html>