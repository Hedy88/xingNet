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
                        <h3>Report a user</h3>
                        <font style="color:red;">WARRING: You will be banned for spam reporting false reports.</font><br>
                        <form method="post" action="./libs/report.php">
                            <br>User: (Please enter there username without the "@" NOT nickname)<br><br>
                            <input type="text" name="user" placeholder="User"><br><br>
                            <br>Reason:<br><br>
                            <input type="text" name="reason" placeholder="..."><br><br>
                            <br>Description:<br><br>
                            <textarea name="description" placeholder="..."></textarea><br><br>
                            <button type="submit" name="submit">Submit Report</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>

        <?php include 'footer.php'; ?>
    </center>
</body>

</html>