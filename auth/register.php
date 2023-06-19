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
        <div class="form login">
            <div class="form-content">
                <h3>Registration</h3>
                <form action="./update.php" method="POST" enctype="multipart/form-data">
                    <div class="field input-field">
                        <input type="text" placeholder="First Name" class="input" name="fname" required>
                    </div>

                    <div class="field input-field">
                        <input type="text" placeholder="Last Name" class="input" name="lname" required>
                    </div>

                    <div class="field input-field">
                        <input type="number" placeholder="Phone No." class="input" name="contact" required>
                    </div>

                    <div class="field input-field">
                        <input type="text" placeholder="Address" class="input" name="address" required>
                    </div>

                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="input" name="email" required>
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Password" class="password" name="password" required>
                        <i class="bx bx-hide eye-icon"></i>
                    </div>

                    <div class="field button-field">

                        <button type="submit" class="btn" name="submit"> Register</button>
                        <!-- <input class="signup link" type="button" name="submit" value="Register"> -->
                        <!-- <a href="#" class="signup link" name="submit"> Register</a> -->
                    </div>

                    <div class="form-link">
                        <span> Already have an account <a href="../auth/login.php" class="signup link"> Login</a></span>
                    </div>


                </form>
            </div>
        </div>
    </section>

</body>

