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
                        <?php
                        if (!isset($_GET['u'])) {
                            echo '<h3 style="color:red;">Please select a user.</h3>';
                        }

                        $username = htmlspecialchars($_GET['u']);
                        $sql = mysqli_query($conn, "SELECT * FROM `profiles` WHERE username='$username'");
                        $row = mysqli_fetch_assoc($sql);
                        $aboutme = htmlspecialchars($row['about_me']);
                        $status = htmlspecialchars($row['status']);
                        $song = htmlspecialchars($row['song']);
                        $nickname = htmlspecialchars($row['nickname']);
                        $custom_css = htmlspecialchars($row['custom_css']);
                        $admin_badge = $row['admin_badge']; // janky way to get the admin badge but oh well /shrug

                        ?>
                        <style>
                            <?php echo $custom_css; ?>
                        </style>

                        <font class="UserProfile" size="+1"><a href="profile.php?u=<?php echo $username; ?>"><?php echo $nickname; ?></a></font><img src="<?php echo $admin_badge; ?>"><br>
                        <a href="profile.php?u=<?php echo $username; ?>"><b>@<?php echo $username; ?></b></a><br>
                        <font class="UserProfile" size="-2"><?php echo $status; ?></font>

                    </td>
                </tr>
            </tbody>
        </table>
        <div class="container">
            <div class="about">
                <table class="BorderStrip" width="230">
                    <tbody>
                        <tr class="redstrip3" height="20">
                            <td class="redstrip3">
                                About <?php echo $nickname; ?></td>
                            </td>
                        </tr>
                        <tr class="hmcontainer">
                            <td class="hmcontainer2">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <font class="UserProfile" size="-2"><?php echo $aboutme; ?></font>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="media-player">
                <table class="BorderStrip" width="205">
                    <tbody>
                        <tr class="redstrip3" height="20">
                            <td class="redstrip3">Media Player</td>
                        </tr>
                        <tr class="hmcontainer">
                            <td class="hmcontainer3">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <audio controls autoplay style="width:190px;height:30px;">
                                                    <source src="./songs/<?php echo $song;?>">
                                                    <font size="-2">Audio element not supported on this browser</font>
                                                </audio>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </center>
</body>

</html>