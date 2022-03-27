<?php include('./libs/config/config.php'); ?>
<?php include('./libs/config/db_auth.php'); ?>
<?php session_start(); ?>
<html>

<head>
    <?php include 'meta.php'; ?>
</head>

<body>
    <center>
        <?php include './header.php'; ?>

        <table class="hmcontainer" width="440">
            <tbody>
                <tr>
                    <td class="hmcontainer2">
                        <h3>XingNet Signup</h3>
                        <?php
                        if (isset($_GET['error'])) {
                            $error = htmlspecialchars($_GET['error']);
                            echo '<font style="color:red;">' . $error . '</font>';
                        }
                        ?>

                        <form action="./libs/signup.php" method="post">
                            <p>Username</p>
                            <input type="text" name="username" placeholder="rgb">
                            <p>Password</p>
                            <input type="password" name="password" placeholder="johncar96">
                            <p>Email</p>
                            <input type="email" name="email" placeholder="rgb@rgb.net"><br><br>
                            <button type="submit" name="signup_button">Sign Up</button>
                        </form>
                        <br>
                    </td>
                </tr>
            </tbody>
        </table>

        <?php include 'footer.php'; ?>
    </center>
</body>

</html>