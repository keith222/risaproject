<?
require_once("database.php");
$video_status = $_POST['status'];

mysql_query("update `risaproject`.`video` set `status`='".$video_status."' where `vId`=1");
?>