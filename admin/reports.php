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
                        <font size="+1"><b>User Reports</b></font><br><br>
                        User Reports
                    </td>
                </tr>
            </tbody>
        </table>
        <?php
        $sql = mysqli_query($conn, "SELECT * FROM reports");

        while ($fetch = mysqli_fetch_assoc($sql)) {
            $report_by = htmlspecialchars($fetch['report_by']);
            $report_to = htmlspecialchars($fetch['report_to']);
            $report_reason = htmlspecialchars($fetch['report_reason']); 
            $report_desc = htmlspecialchars($fetch['report_desc']);

            echo '
            <table class="hmcontainer" width="440">
            <tbody>
                <tr>
                    <td class="hmcontainer2">
                        <font size="2"><b>User reported - <a href="../profile.php?u=' . $report_to .'">@' . $report_to .'</a></b></font><br><br>
                        <font size="2">Reason - '. $report_reason .'</font><br>
                        <font size="2">Report Description - '. $report_desc .'</font><br><br>

                        <i>reported by - '. $report_by .'</i>
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