<?php 
$bsql = mysqli_query($conn, "SELECT * FROM site_banner");

while ($bfetch = mysqli_fetch_assoc($bsql)) {
    $text = htmlspecialchars($bfetch['msg']);
    $textcolor = $bfetch['textcolor'];
    $bcolor = $bfetch['bannercolor'];
    echo "<table bgcolor='$textcolor' width='440' class='banner-alert'> <tr><td><font color='$bcolor'>$text</font></td></tr></table>";
}
?>