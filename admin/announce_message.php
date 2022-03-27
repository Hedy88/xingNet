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
                    <font size="+1"><b>Announce a message</b></font><br><br>
                    dosn't work
                     <form action="./libs/announce_message.php" method="POST" enctype="multipart/form-data">
                      <label>message:</label><br><br>
                      <input type="text" name="message"><br><br>
                      <label>background color:</label><br><br>
                      <input type="color" name="background_color"><br><br>
                      <label>text color:</label><br><br>
                      <input type="color" name="message_color"><br><br>
                      <button type="submit">announce</button><button type="clear">clear</button>
                     </form>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php include 'footer.php'; ?>
    </center>
</body>

</html>