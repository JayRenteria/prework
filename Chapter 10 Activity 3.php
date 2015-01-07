<?php
$userbday = mktime( 0,0,0,06,29,2015);
$today = time();
$difference = ($userbday - $today);
$daysleft = (int) ($difference/86400);
$hoursleft = (int) ($difference/3600);
$minutesleft = (int) ($difference/60);
$secondsleft = (int) ($difference/1);
echo "Your birtday is in $daysleft days, $hoursleft hours, $minutesleft minutes, and $secondsleft seconds!";
?>