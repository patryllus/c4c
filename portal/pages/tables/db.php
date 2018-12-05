<?php 
error_reporting(E_ERROR | E_PARSE);

$conn=mysql_connect("localhost","root","pass") or die("Could not connect");
mysql_select_db("mhealth_dev",$conn) or die("could not connect database");
?>
