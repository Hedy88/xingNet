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
                        <font size="+1"><b>admin panel</b></font><br><br>
                        <font size="2"><b>Users</b></font><br>
                        <a href="./users.php">Ban / Unban Users</a><br><br>
                        <font size="2"><b>Reports</b></font><br>
                        <a href="reports.php">User reports</a><br>
                        <a href="logs.php">Audit log</a><br>
                        <a href="announce_message.php">Announce a message</a><br>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="hmcontainer" width="440">
            <tbody>
                <tr>
                    <td class="hmcontainer2">
                        <font size="+1"><b>webserver status</b></font><br><br>
                        <b>PHP version:<b> <?php echo phpversion() ?><br><br>
                        <b>OS version:<b> <?php echo php_uname() ?><br><br>
                    </td>
                </tr>
            </tbody>

            <?php include 'footer.php'; ?>
    </center>
</body>

</html>