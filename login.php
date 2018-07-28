<?php
	header("content-type:text/html;charset=utf-8");
    error_reporting(0);
    session_start();
    require('./code/class/log.class.php');
    $sql = "select * from login_message";
 	$rst=$mysql->query($sql);
    $rzt=$mysql->get_date($rst);
    $message= $rzt[0]['message'];
    $dw_info = '通辽供电段';
  	require("./login.html");
?>