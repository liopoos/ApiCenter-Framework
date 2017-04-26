<?php
/**
 * Created by PhpStorm.
 * User: hades
 * Date: 2017/4/18
 * Time: 17:12
 * 数据库连接
 */
$link = mysqli_connect('localhost', 'root', 'root') or die("die" . mysql_error());
$db_selected = mysqli_select_db($link, "数据表");
mysqli_query($link, "set names utf8");

?>
