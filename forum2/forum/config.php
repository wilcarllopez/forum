<?php
/******************************************************
------------------Required Configuration---------------
Please edit the following variables so the forum can
work correctly.
******************************************************/

//We log to the DataBase
mysql_connect("localhost", "root", "usbw");
mysql_select_db("forum");

//Username of the Administrator
$admin='wilcarllopez';
$mail_webmaster = 'wilcarllopez@gmail.com';


/******************************************************
-----------------Optional Configuration----------------
******************************************************/

//Forum Home Page
$url_home = 'index.php';

//Design Name
$design = 'default';


/******************************************************
----------------------Initialization-------------------
******************************************************/
include('init.php');
?>