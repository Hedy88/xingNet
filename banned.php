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
                        <h3 style="color:red;">You have been Banned.</h3>

                        You can appeal you ban in the XingNet Discord if you think it was unfair. 
                        
                        <a href="logout.php">Logout</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <?php include 'footer.php'; ?>
    </center>
</body>

</html>