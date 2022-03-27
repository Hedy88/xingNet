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
                        <h3>Posts!</h3>
                        You can find every single post here
                    </td>
                </tr>
            </tbody>
        </table>

        <?php
        $sql = mysqli_query($conn, 'SELECT * FROM `posts` ORDER BY `date_created`');

        while ($fetch = mysqli_fetch_assoc($sql)) {
            $post = htmlspecialchars($fetch['post']);
            $poster = htmlspecialchars($fetch['poster']);
            $date = htmlspecialchars($fetch['date_created']);
            $id = htmlspecialchars($fetch['id']);

            echo '
            <table class="hmcontainer" width="440">
            <tbody>
                <tr>
                    <td class="hmcontainer2">
                        <h3><a href="./profile.php?u=' . $poster .'">@' . $poster . '</a></h3>
 
                        ' . $post . '
                        <br> 
                        <i>id - ' . $id . ' / posted on ' . $date .'</i>
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