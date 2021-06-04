<?php

$mysql_hostname = "localhost";

$mysql_user = "db접속아이디";

$mysql_password = "db접속비밀번호";

$mysql_database = "db명";

 

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("db connect error");

mysql_select_db($mysql_database, $bd) or die("db connect error");

  

?>
