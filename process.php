<title>Hacker Attack..!!!!</title>
<html>
<br>
<h2 style="text-align: center;"><span style="color: #ff0000;"><strong>WHAT THE FUCK IS THIS ?? YOU WANNA HACK MY SITE ??</strong></span></h2>
<p style="text-align: center;"><a href="404.jpg"><img class="aligncenter wp-image-273 " src="404.jpg" alt="untitled_drawing_by_xdarkivyx-d7ursok" width="300" height="451" /></a></p>

<h2 style="text-align: center;"><strong><span style="color: #ff0000;">CLICK LOGOUT NOW BEFORE I CALL POLICE</span>
<p style="text-align: center;"><a href="logout.php"><img class="aligncenter wp-image-273 " src="logout.png" /></a></p>

</strong></h2>
</html>

<?php

$protocol = $_SERVER['SERVER_PROTOCOL'];
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['REMOTE_PORT'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$ref = $_SERVER['HTTP_REFERER'];
$cookie = $_SERVER['QUERY_STRING'];
$rqst_method = $_SERVER['METHOD'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

$fh = fopen('log.txt', 'a');
fwrite($fh, '========================================'."\n");
fwrite($fh, ' THIS HACKER WANT TO TRY HACK YOUR SITE'."\n");
fwrite($fh, '========================================'."\n");
fwrite($fh, 'IP Address: '."".$ip ."\n");
fwrite($fh, 'Hostname: '."".$hostname ."\n");
fwrite($fh, 'Port Number: '."".$port ."\n");
fwrite($fh, 'User Agent: '."".$agent ."\n");
fwrite($fh, 'HTTP Referer: '."".$ref ."\n\n");
fwrite($fh, 'Cookie: '."".$cookie ."\n\n");
fwrite($fh, 'Method: '."".$rqst_method ."\n\n");
fwrite($fh, '========================================'."\n");
fwrite($fh, '   MAYBE THEY ARE PLAY IN WRONG PLACE     '."\n");
fwrite($fh, '========================================'."\n");
fclose($fh);
?> 
