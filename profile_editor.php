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
                        <h3>Profile Editor</h3>
                        <label>Change Nickname</label>
                        <form method="post" action="./libs/changenickname.php">
                            <input type="text" name="changenickname" placeholder="john">
                            <br><br>
                            <button type="submit" name="submit">Change Nickname</button>
                        </form>
                        <label>Change Status</label>
                        <form method="post" action="./libs/changestatus.php">
                            <input type="text" name="changestatus" placeholder="john">
                            <br><br>
                            <button type="submit" name="submit">Change Status</button>
                        </form>
                        <label>Change About Me</label>
                        <form method="post" action="./libs/changeaboutme.php">
                            <textarea name="aboutme" id="message" placeholder="hi" rows="5" cols="30"></textarea>
                            <br><br>
                            <button type="submit" name="submit">Change about me</button>
                        </form>
                        <label>Custom CSS</label>
                        <form method="post" action="./libs/changecss.php">
                            <textarea name="css" id="message" placeholder="body {}" rows="5" cols="30"></textarea>
                            <br><br>
                            <button type="submit" name="submit">Change CSS</button>
                        </form>
                        <form action="/libs/uploadsong.php" method="post" enctype="multipart/form-data">
                            Select Song
                            <input type="file" name="songupload"><br><br>
                            <input type="submit" value="Upload Song" name="submit">
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>

        <?php include 'footer.php'; ?>
    </center>
</body>

</html>