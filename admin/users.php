<?php include('../libs/config/config.php'); ?>
<?php include('../libs/config/db_auth.php'); ?>
<?php session_start(); ?>
<html>

<head>
    <?php include 'meta.php'; ?>
</head>

<body>
    <center>
        <?php include 'header.php'; ?>
        <?php include '../libs/bancheck.php'; ?>
        <table class="hmcontainer" width="440">
            <tbody>
                <tr>
                    <td class="hmcontainer2">
                        <h3>Ban / Unban Users</h3>
                        <form method="post" action="./libs/banuser.php">
                            <p>Ban User</p>
                            <input type="text" name="banuser" placeholder="jameoncrack">
                            <button type="submit" name="banusersubmit">Ban user</button>
                        </form>
                        <form method="post" action="./libs/unbanuser.php">
                            <p>Unban User</p>
                            <input type="text" name="unbanuser" placeholder="a">
                            <button type="submit" name="unbanusersubmit">Unban user</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php include 'footer.php'; ?>
    </center>
</body>

</html>