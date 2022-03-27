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
                    <h3>Post A Message</h3>
                        Message:
                        <form method="post" action="./libs/postmsg.php">
                            <textarea name="message" id="message" placeholder="oh my god, it's christmas in 2 weeks AHH" rows="5" cols="30"></textarea>
                            <br><br>
                            <button type="submit" name="submit">Post</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>

        <?php include 'footer.php'; ?>
    </center>
</body>

</html>