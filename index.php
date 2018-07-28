<?php
header("content-type:text/html;charset=utf-8");
error_reporting(0);
session_start();
	if(!isset($_SESSION['username']) or !isset($_SESSION['lev'])){
		header("location:login.php");
		exit;
	}
	require ('./init/init.php');
    require ('./index.html');



?>