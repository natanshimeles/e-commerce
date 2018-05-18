<?php
DEFINE('servername','localhost');
DEFINE('username','root');
DEFINE('password','');
DEFINE('database','adwa');

$Connection = new mysqli(servername, username, password, database) or die("can't connect");

 ?>
