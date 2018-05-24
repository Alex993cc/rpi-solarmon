<meta http-equiv="refresh" content="60" >
<center>
<img src=volts.png><img src=amps.png>
<br><br>current time: 
<?php echo shell_exec("date +%T 2>&1"); ?>
<br><br>measurements last taken: 
<?php
$file = "date.dat";
$f = fopen($file, "r");
while ( $line = fgets($f, 1000) ) {
print $line;
}
?>
<br><br> Low/High recorded voltage last 24h	
<?php
$file = "/home/pi/solarmonitor/voltminmax.dat";
$f = fopen($file, "r");
while ( $line = fgets($f, 1000) ) {
print $line;
}
?>

<br><br> Low/High recorded current last 24h	
<?php
$file = "/home/pi/solarmonitor/ampminmax.dat";
$f = fopen($file, "r");
while ( $line = fgets($f, 1000) ) {
print $line;
}
?>
<br><br>Click <a href=index.php>here</a> to refresh this page
<br> Page Auto Refreshes every 60s
</center>
