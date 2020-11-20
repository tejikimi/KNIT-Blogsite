<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$con=mysqli_connect("localhost","admin","admin","geeksbyte");
if (!$con)
   die("Can't connect to the server or server down");
else
 ?>
