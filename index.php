<? require_once('database.php');?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Video</title>
<script type="text/javascript" src="swfobject.js"></script> 
<script type="text/javascript">

    var params = { allowScriptAccess: "always" };
    var atts = { id: "myytplayer" };
    swfobject.embedSWF("http://www.youtube.com/v/mgnaz8qLXvc?enablejsapi=1&playerapiid=ytplayer", 
                       "ytapiplayer", "425", "356", "8", null, null, params, atts);

</script>
</head>
<body>
<?
	mysql_query("set names UTF8");
	mysql_query("select * from `video`");
	
?>	 
  <div id="ytapiplayer">
    You need Flash player 8+ and JavaScript enabled to view this video.
  </div>

</body>
</html>