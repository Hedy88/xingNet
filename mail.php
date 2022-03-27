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
                        <h3>Inbox</h3>

                        Private Messages will be displayed here | <a href="./sendmail.php">Send something!</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <?php 
        $username = $_SESSION['username'];
        $sql = mysqli_query($conn, "SELECT * FROM inbox WHERE to_username='$username'");

        while ($fetch = mysqli_fetch_assoc($sql)) {
            $from_username = htmlspecialchars($fetch['from_username']);
            $msg = htmlspecialchars($fetch['msg']);
            $date_sent = htmlspecialchars($fetch['date_created']);

            echo '
            <table class="hmcontainer" width="440">
            <tbody>
                <tr>
                    <td class="hmcontainer2">
                        <h3>Message from - ' . $from_username . '</h3>

                        ' . $msg .' 

                        <br><br><i>sent at - ' . $date_sent . '</i>
                    </td>
                </tr>
            </tbody>
        </table>
            ';
        }
        ?>
        <?php include 'footer.php'; ?>
    </center>
</body>

</html>