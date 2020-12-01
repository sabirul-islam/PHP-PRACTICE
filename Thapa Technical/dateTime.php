<?php

echo date('d l M')."<br>";
echo date("h:i:s A")."<br>";

#Default timezone
$timeZone = date_default_timezone_get();
echo $timeZone."<br>";

# Regional timezone;
date_default_timezone_set('Asia/Dhaka');
echo date('d l M')."<br>";
echo date("h:i:s A")."<br>";
?>