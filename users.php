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
                        <h3>Users!</h3>
                        You can find any user here!
                    </td>
                </tr>
            </tbody>
        </table>

        <?php 
         $sql = mysqli_query($conn, 'SELECT * FROM `profiles`');

         while ($fetch = mysqli_fetch_assoc($sql)) {
            $username = $fetch['username'];
            $status = $fetch['status'];
            $nickname = $fetch['nickname'];
            $admin_badge = $fetch['admin_badge']; // janky way to get the admin badge but oh well /shrug
            echo '
            <table class="hmcontainer" width="440">
            <tbody>
                <tr>
                    <td class="hmcontainer2">
                        <font class="UserProfile" size="+1"><a href="profile.php?u=' . $username .'">' . $nickname . '</a></font><img src="' . $admin_badge . '"><br>
                        <a href="profile.php?u=' . $username .'"><b>@' . $username . '</b></a><br>
                        <font class="UserProfile" size="-1">'. $status .'</font>
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