<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.2.0.min.js"></script>
</head>
<body>
<div>
<span id="day" >00:</span>
<span id="hour" >00:</span>
<span id="minute" >01:</span>
<span id="second" >00</span>
<br/>
这一期的中奖号码是：<span id="win_numbers"></span>
<br/>
<br/>
</div>
<script type="text/javascript">
var sec=5;
function countDown(){
    $('#minute').text("00:");
    sec--;
    $('#second').text(sec);
    if(sec<=9){
        $('#second').text("0"+sec);
        if(sec==0){
            var lot="lottery";
            $.ajax({
              url:"/index.php/Home/index/lotInSer",
              type:"post",
              data:{lottery:lot},
              dataType:"json",
              success:function (evt){
                  //console.log(evt);
                  $("#win_numbers").text(evt);
              },
              error:function (){

              }
            });
            window.clearInterval(setIn);
        };
    };
};
var setIn=window.setInterval(countDown,1000);




</script>
</body>
</html>