<?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_query("CREATE DATABASE user") or die(mysql_error());
mysql_close();
?>