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
        <?php include './libs/bancheck.php'; ?>
        <table class="hmcontainer" width="440">
            <tbody>
                <tr>
                    <td class="hmcontainer2">
                        <h3>Welcome to XingNet</h3>

                        <strong>XingNet</strong> is a social network where you can create, share and view posts and customize your profile
                        <?php 
                        if (!isset($_SESSION['username'])) {
                            echo '
                                <p>
                                Seems that you are not logged in, You can login <a href="./login.php">here</a> or make an account.</p>
                                </p>
                            ';
                        } else {
                            echo '<br><br>
                            Hello, ' . $_SESSION['username'] . ' <br> <a href="./profile_editor.php">Edit your profile</a> | <a href="./postmsg.php">Post something</a> | <a href="./report_user.php">Report a user</a>
                            ';
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>

        <?php include 'footer.php'; ?>
    </center>
</body>

</html>