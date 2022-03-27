<?php include('../libs/config/config.php'); ?>
<?php include('../libs/config/db_auth.php'); ?>
<?php session_start(); ?>
<html>

<head>
    <?php include 'meta.php'; ?>
</head>

<body>
    <center>
        <?php include './header.php'; ?>
        <?php include '../libs/bancheck.php'; ?>
        <table class="hmcontainer" width="440">
            <tbody>
                <tr>
                    <td class="hmcontainer2">
                    <font size="+1"><b>xingExchange</b></font>
                    <font size="1">| <a href="makestock.php">create a stock</a></font>
                    </td>
                </tr>
            </tbody>
        </table>

        <?php include 'footer.php'; ?>
    </center>
</body>

</html>