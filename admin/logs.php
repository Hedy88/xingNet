<?php include('../libs/config/config.php'); ?>
<?php include('../libs/config/db_auth.php'); ?>
<?php include('./libs/grablogs.php'); ?>
<?php include('./libs/logs.php'); ?>
<?php session_start(); ?>
<html>

<head>
    <?php include 'meta.php'; ?>
</head>

<body>
    <center>
        <?php include 'header.php'; ?>
        <?php include '../libs/bancheck.php'; ?>
        <div style="padding-top: 5px;">
            <table width="440" class="BorderStrip">
               <tbody>
                  <tr class="redstrip3" height="20">
                     <td class="redstrip3">Logs</td>
                     <td class="redstrip3" align="center">Date</td>
                  </tr>
                  <?php
                     while ($row = $logs->fetch_assoc()) {
                     ?>
                  <tr class="hmcontainer">
                     <td class="hmcontainer2" height="31">
                        <table>
                           <tbody>
                              <tr>
                                 <td>
                                    <font class="UserProfile" size="1"><?php echo $row["log_note"]; ?> (<?php echo $row["ip"]; ?>)</font>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </td>
                     <td class="hmcontainer2" height="10" width="80">
                        <table align="center">
                           <tbody>
                              <tr>
                                 <td><font class="UserProfile" size="-2"><?php $date = strtotime($row["date"]); echo date('m/d/Y', $date); ?></font></td>
                              </tr>
                           </tbody>
                        </table>
                     </td>
                  </tr>
                  <?php
                     }
                     ?>
               </tbody>
            </table>
         </div>
            <?php include 'footer.php'; ?>
    </center>
</body>

</html>