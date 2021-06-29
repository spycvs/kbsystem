<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barangay Management System</title>
    <link rel="icon" type="image/x-icon" href="img/icons/kb-logo.ico" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="login-container">
        <div class="logo">
            <img src="img/kblogin-logo.png" alt="logo" />
        </div>
        <div class="login-section">
            <div class="text">
                <h1>BARANGAY</h1>
                <h4>MANAGEMENT INFORMATION SYSTEM</h4>
            </div>

            <!-- error -->
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <!-- action form -->
            <form action="login-function.php" method="post">

                <div class="textbox">
                    <img src="img/icons/user-30.png" alt="" />
                    <input type="text" placeholder="Username" name="uname" />
                </div>

                <div class="textbox">
                    <img src="img/icons/password-30.png" alt="" />
                    <input type="password" placeholder="Password" name="password" />
                </div>

                <button class="btn"><span>LOGIN</span></button>
            </form>

        </div>
    </div>
</body>

</html>