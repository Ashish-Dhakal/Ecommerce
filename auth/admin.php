<?php include '../connection/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= $hostname?>auth/auth.css">
</head>

<body>
    <section class="container forms">
        <siv class="form login">
            <div class="form-content">
                 <h3>Admin Login</h3>
                <form action="./update.php" method="POST">
                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="input" name="email">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Password" class="password" name="password">
                        <i class="bx bx-hide eye-icon"></i>
                    </div>

                    <div class="field button-field">
                        <button type="submit" class="btn" name="admin_login"> Login</button>
                    </div>

                </form>
            </div>
        </siv>
    </section>

</body>

</html>