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
                        <h3>xingNet API</h3>
                        <font style="color:red;">WARNING: Misuse of the API will get you banned from the site.</font>
                        <br>
                        <br>
                        <code>/api/users/get_profile_info.php?u=(usernamehere)</code>
                        will respond with the profile info of a user   
                    </td>
                </tr>
            </tbody>
        </table>

        <?php include 'footer.php'; ?>
    </center>
</body>

</html>