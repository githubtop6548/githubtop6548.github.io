<?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("user") or die (mysql_error());

mysql_query("create table users (
id_user int(10) AUTO_INCREMENT,
name varchar(20) NOT NULL,
email varchar(50) NOT NULL,
password varchar(15) NOT NULL,
PRIMARY KEY (id_user) 
)");
mysql_close();
?>