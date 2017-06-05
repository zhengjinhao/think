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
彩民选票：
<br/>
<br/>
</div>
0<input type="radio" name="number" value="0">
1<input type="radio" name="number" value="1">
2<input type="radio" name="number" value="2">
3<input type="radio" name="number" value="3">
4<input type="radio" name="number" value="4">
5<input type="radio" name="number" value="5">
6<input type="radio" name="number" value="6">
7<input type="radio" name="number" value="7">
8<input type="radio" name="number" value="8">
9<input type="radio" name="number" value="9"> 
</br>
</br>
<input id="tijiao" type="submit" name="tijiao">
</br>
</br> 
第这一期选中的数字是：<span id="first"></span>
<script type="text/javascript">
//倒计时
var sec=5;
//var fristDate = new Date();
//console.log(fristDate);
//var fristtime=fristDate.toLocaleString();
//console.log(time) ;
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
              /*error:function (){
                  alert("没有传输过去！");
              }*/
            });
            sec=5;
            //window.clearInterval(setIn);
            //var fristDate = new Date();
            //console.log(fristDate);
        };
    };
};
var setIn=window.setInterval(countDown,1000);

//选彩票
$("#tijiao").click(function(){
	var number = $('input[name=number]:checked').val();
	//console.log(number);
	$.ajax({
         url:"/index.php/Home/index/insert",
         type:"post",
         data:{num:number},
         dataType:"json",
         success:function(evt){
           var  ert=evt.number;
           $("#first").text(ert);
          },
         error:function(evt){
           alert("没有传输过去！");
          }
	     });
});
</script>
</body>
</html>