<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Video</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//www.google.com/jsapi" type="text/javascript"></script>
 <script type="text/javascript">
  google.load("swfobject", "2.1");
</script>  
<script type="text/javascript">
    var videos = ["xnjE2RBfn-s","eaKSr1Vbb4g","aoeOxecd0qw","jxvi5ozyRqE","YohlqPqymz4","Yp2wgDzojL0","NsdFamnYAz8","4rf2o9Ej2rE","DENaU_y1VY0","icUpRUNqSQs","TxHmxiymtmw","N75IJQYJCzY","wYCOKDfD8o8","b6hdB_VBIpQ"];//youtube影片id

    google.setOnLoadCallback(loadPlayer());//google api=>讀取網頁後執行loadplayer()
    var num=0;//記錄目前第幾部影片

    function loadVideo(videos) {//讀取影片id
      var videoID = videos;
      if(ytplayer) {
        ytplayer.loadVideoById(videoID);
      }
    }

    function loadPlayer(){//讀取播放器
      var video = videos[0];//預設第一部影片id
      var params = { allowScriptAccess: "always" };
      var atts = { id: "myytplayer" };
      swfobject.embedSWF("http://www.youtube.com/v/"+video+"?rel=0&enablejsapi=1&playerapiid=ytplayer", "ytapiplayer", "560", "315", "8", null, null, params, atts);
    }

   
    
    function updateHTML(elmId, value) {
          document.getElementById(elmId).innerHTML = value;//讀取影片狀態顯示至網頁
        }

    function setytplayerState(newState) {
          //updateHTML("playerstate", newState);//將影片目前動態送至updatehtml()顯示
    }

    function onYouTubePlayerReady(playerId) {//youtube播放器設定
      ytplayer = document.getElementById("myytplayer");
      setInterval(updateytplayerInfo, 100);
      updateytplayerInfo();
      ytplayer.addEventListener("onStateChange", "onytplayerStateChange");
      ytplayer.addEventListener("onError", "onPlayerError");
      ytplayer.setPlaybackQuality("hd1080");//預設畫質1080p;720p則為hd720;另還有 large,small
    }

    function onytplayerStateChange(newState) {//偵測目前影片動態
      //setytplayerState(newState);
      if(newState === 0){//newState=0表示影片播放完畢 1：播放 -1:影片0:00未播放狀態
        num++;//影片記錄數目+1
        switch(num){
          case 1:case 2:case 3:case 5:case 8:case 9:case 12:setTimeout("loadVideo(videos[num])",10000);break;//預設特定影片播完後暫停10秒後繼續下部
          case 4:case 6:case 7:case 10:case 11:loadVideo(videos[num]);break;
        }
      };
    }

    function updateytplayerInfo() {
      updateHTML("videoduration", getDuration());
      updateHTML("videotime", getCurrentTime());
    }

    // functions for the api calls
    function play() {//影片播放
      if (ytplayer) {
        ytplayer.playVideo();
      }
    }

    function stop() {//影片停止
      if (ytplayer) {
        ytplayer.stopVideo();
      }
    }

    function getPlayerState() {//取得影片狀態
      if (ytplayer) {
        return ytplayer.getPlayerState();
      }
    }


    function getCurrentTime() {//取得現在影片時間
      if (ytplayer) {
        return ytplayer.getCurrentTime();
      }
    }

    function getDuration() {//取得影片長度
      if (ytplayer) {
        return ytplayer.getDuration();
      }
    }
    function onPlayerError(errorCode) {
        alert("An error occured of type:" + errorCode);
    }
    
</script>
</head>
<body>

  <div id="ytapiplayer">
    You need Flash player 8+ and JavaScript enabled to view this video.
  </div>
  <p>Current Time: <span id="videotime">--:--</span> | Duration: <span id="videoduration">--:--</span></p>
</body>
</html>