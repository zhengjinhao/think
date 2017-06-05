登录 商家就能记住谁买的member_id
$timestamp=$_GET['timestamp'];
$nonce=$_GET['nonce'];
$token="zjh";
$arr=array($timestamp,$nonce,$token);
asort($arr,SORT_STRING);
$arrto=sha1(implode("",$arr));


if($arrto==$_GET['signature']){
  $echostr=$_GET['echostr'];
  echo $echostr;
}
oauth2.0：用到用户信息 用户直接把用户名和密码告诉你
第二种oauth2.0 如果说一个系统实现了这种协议
第三方需要获得用户的信息 授权——》
微信会返回一个access_token的一个东西
这个东西让第三方拿到用户的部分信息 回调到一个授权url
1.弹出授权页面 您同意让第三方应用获取您的信息
2.如果用户点击确认 然后微信就会自动调用一个url
把用户相关告诉nageurl（登录了）！
user_id+appid=open_id
