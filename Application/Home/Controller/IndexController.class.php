<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display('5.31');
    }

    public function zuoye(){
    	$this->display("zuoye");
    }
    public function test(){
        $this->display("5.31");
    }
   
    public function zuoye2(){
        $this->display('zuoye2');
    }

    //开奖号码
    public function lotInSer(){
        $lottery=I("post.lottery");
        $random=rand(0,9);
        echo json_encode($random);
        //开奖时间
        //$day=date("Y-m-d H-i-s");
        //echo $day;
        //下一期开始倒计时的开始时间
        $day=date("Y-m-d H-i-s");
        $dayto=date("Y-m-d H-i-s",strtotime("+1 second"));
        echo $day;
        $lo_id=M("id");
        //开奖时间
        $lot["Winning_time"]=$day;
        //开奖号
        $lot["lo_number"]=$random;
        //$lot["issue"]=$i;
        //下一期开始倒计时时间
        $nextTime["first_time"]=$dayto;
        $i=15911;
        $nextTime["issue"]=$i;
        $iop=$lo_id->data($nextTime)->add();

        

        
       /* $bu=M("buyer");
        $da["first_time"]=$day;
        $bu->data($da)->add();*/
    }

      //购买彩票
    public function insert(){
        $sumber=I('post.num');
        //echo $sumber;
        $today=date("Y-m-d H-i-s");
        $buyer=M("buyer");
        $data["buyer_number"]=$sumber;
        $data["buyer_time"]=$today;
        $abc=$buyer->data($data)->add()->where();
        //echo $abc; 
        $qwe=array('number'=>$sumber);
        //var_dump($this->ajaxReturn($qwe));
        $this->ajaxReturn($qwe);
    }
      public function testto(){
        $appid="wxef74fb819e128fab";
        $time=time();
        function str(){
           $string ="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHICKLMNOPQRSTUVWXYZ";
           $strReuuest="";


        }

      }

   /* public function test(){
        $wurl="https://api.weixin.qq.com/cgi-bin/message/template/send?access_token=hZhj5ljhRmPo98XoAzV094G5w0eHjPhlDnjZz0gIXZQmYTGVgQKMjUxLiKpSAcyYpKk-1gWI9bWduBlg2n9ZqZWfbw8Gt_TrV3O7c0qh0WiCmzVloFENkBmazNXENctrNHHiACARLL";

        $post='{
               "touser":"olmB40onjbfEM8k4p9Fi7wR9CINE",
               "template_id":"1YC03r_aKb3vNaUB9pXpo1wv3wBwoa3UAl4yC4IIqTg",
                         
               "data":{
                       "buy_time": {
                           "value":"2017-6-1",
                           "color":"#173177"
                       },
                       "buy_money":{
                           "value":"巧克力",
                           "color":"#173177"
                       }
                       
                    }
               }';
        $abc = curl_init();
        curl_setopt($abc,CURLOPT_URL, $wurl);
        curl_setopt($abc, CURLOPT_RETURNTRANSFER, 1);// post数据
        curl_setopt($abc, CURLOPT_POST, 1);
        // post的变量
        curl_setopt($abc, CURLOPT_POSTFIELDS, $post);
        curl_setopt($abc, CURLOPT_SSL_VERIFYPEER, false);
        $output = curl_exec($abc);
        curl_close($abc);
        var_dump($output);

        }
}*/
/*https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wxef74fb819e128fab&secret=ed2f293fab6f0a657333bcb848434b9b

"access_token":"hZhj5ljhRmPo98XoAzV09_-jtwzQk6ha-yU1zCiDDySU6MvvpKucH4nZ-HZ1DgcbW1YLPkkrRdWWchB-fUVa1nSSGB7YYFomLZ3ossvxFBOIDCELhXNXQ4oA07yqb55hCMTaACAWGN"

"ticket":"HoagFKDcsGMVCIY2vOjf9l57EPELjR8p9BmreRgIrIQJz9lXoGmuNUUOYw4ilHGqXaJpDZTlM_9QzMYXctNWSw"
 
 

       