<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="auth.css">
</head>

<body>
    <section class="container forms">
        <siv class="form login">
            <div class="form-content">
                <header>Registration</header>
                <form action="./update.php" method="$_POST">
                    <div class="field input-field">
                        <input type="text" placeholder="First Name" class="input" required>
                    </div>

                    <div class="field input-field">
                        <input type="text" placeholder="Last Name" class="input" required>
                    </div>

                    <div class="field input-field">
                        <input type="number" placeholder="Phone No." class="input" required>
                    </div>

                    <div class="field input-field">
                        <input type="text" placeholder="Address" class="input" required>
                    </div>

                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="input" required>
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Password" class="password" required>
                        <i class="bx bx-hide eye-icon"></i>
                    </div>

                    <div class="field button-field">
                        <a href="" class="btn"> Register</a>
                    </div>

                    <div class="form-link">
                        <span> Already have an account <a href="../auth/login.php" class="signup link"> Login</a></span>
                    </div>


                </form>
            </div>
        </siv>
    </section>

</body>

</html>