<table class="banner" width="440">
    <tbody>
        <tr class="redstrip" height="20">
            <td class="redstrip">
                <a href="./">
                    Home
                </a>
                |
                <a href="./users.php">
                    Users
                </a>
                |
                <a href="./allposts.php">
                    Posts
                </a>
            </td>
            <td class="redstrip2">
                <?php
                if (isset($_SESSION['username'])) {
                    echo '
                    <a href="mail.php">Inbox</a> | <a href="./profile.php?u=' . $_SESSION['username'] . '">Your Profile</a> | <a href="./logout.php">Logout</a>
                   ';
                } else {
                    echo '
                   <a href="login.php">Login</a> | <a href="signup.php">Sign Up</a>
                   ';
                }
                ?>
            </td>
        </tr>
    </tbody>
</table>
<div class="banner-image">
    <img src="../img/adminbanner.png"></img>
</div>
