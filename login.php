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
                        <h3>XingNet Login</h3>
                        <?php 
                        if (isset($_GET['error'])) {
                            $error = htmlspecialchars($_GET['error']);
                            echo '<font style="color:red;">' . $error . '</font>';
                        }
                        ?>

                        <form action="./libs/login.php" method="post">
                            Username<br><br>
                            <input type="text" name="username" placeholder="Username"><br><br>
                            Password<br><br>
                            <input type="password" name="password" placeholder="Password"><br><br>
                            <button type="submit">Login</button>
                        </form>
                        <br>
                        <a href="#" onClick="alert('Please contact the XingNet admins / mods in the discord');">
                            forgot password?
                        </a>
                         or make an account 
                        <a href="./signup.php">here</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <?php include 'footer.php'; ?>
    </center>
</body>

</html>