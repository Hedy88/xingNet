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
                        <h3>Post Mail</h3>

                        You can post mail to anybody you want!
                        <br><br>
                        <form action="./libs/sendmail.php" method="post">
                            <label>Send mail to: (Please enter there username without the "@" NOT nickname)</label><br><br>
                            <input type="text" name="to_username" placeholder="rgb"><br><br>
                            <label>Message: </label><br><br>
                            <textarea name="message" placeholder="give admin plz" rows="5" cols="30"></textarea>
                            <br><br>
                            <button type="submit">Send</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>

        <?php include 'footer.php'; ?>
    </center>
</body>

</html>