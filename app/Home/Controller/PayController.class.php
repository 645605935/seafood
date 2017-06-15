<?php
namespace Home\Controller;
use Think\CommonController;

class PayController extends CommonController{
    public function _initialize(){
        parent::_initialize();
        
    }



    public function test() {
        Vendor( 'pingpp.init');

        if (empty($_GET['channel']) || empty($_GET['amount'])) {
            echo 'channel or amount is empty';
            exit();
        }
        $channel = strtolower($_GET['channel']);
        $amount = $_GET['amount'];
        $orderNo = substr(md5(time()), 0, 12);

        //$extra 在使用某些渠道的时候，需要填入相应的参数，其它渠道则是 array() .具体见以下代码或者官网中的文档。其他渠道时可以传空值也可以不传。
        $extra = array();
        switch ($channel) {
            case 'alipay' :
                $extra = array();
                break;
            case 'alipay_wap' :
                $extra = array('success_url' => 'http://wanzhuan.zhangtengrui.com/index.php?s=/Home/Pay/success.html', 'cancel_url' => 'http://wanzhuan.zhangtengrui.com/index.php?s=/Home/Pay/cancel.html');
                break;
            case 'upmp_wap' :
                $extra = array('result_url' => 'http://www.yourdomain.com/result?code=');
                break;
            case 'bfb_wap' :
                $extra = array('result_url' => 'http://www.yourdomain.com/result?code=', 'bfb_login' => true);
                break;
            case 'upacp_wap' :
                $extra = array('result_url' => 'http://www.yourdomain.com/result');
                break;
            case 'wx_pub' :
                $extra = array('open_id' => 'Openid');
                break;
            case 'wx_pub_qr' :
                $extra = array('product_id' => 'Productid');
                break;
            case 'yeepay_wap' :
                $extra = array('product_category' => '1', 'identity_id' => 'your identity_id', 'identity_type' => 1, 'terminal_type' => 1, 'terminal_id' => 'your terminal_id', 'user_ua' => 'your user_ua', 'result_url' => 'http://www.yourdomain.com/result');
                break;
            case 'jdpay_wap' :
                $extra = array('success_url' => 'http://www.yourdomain.com', 'fail_url' => 'http://www.yourdomain.com', 'token' => 'dsafadsfasdfadsjuyhfnhujkijunhaf');
                break;
        }


        \Pingpp\Pingpp::setApiKey('sk_live_e9K0K00G48K8WvDm5KOGeLC8');
        \Pingpp\Pingpp::setPrivateKeyPath(__DIR__ . '/rsa_private_key.pem');

        try {
            $ch = \Pingpp\Charge::create(
                array(
                    'subject' => '111111111Subject', 
                    'body' => '22222222Body', 
                    'amount' => $amount, 
                    'order_no' => $orderNo, 
                    'currency' => 'cny', 
                    'extra' => $extra, 
                    'channel' => $channel,
                    'client_ip' => get_client_ip(), 
                    'app' => array('id' => 'app_jD8GSGLeDmL0qTqL')
                )
            );
            echo $ch;
        } catch (\Pingpp\Error\Base $e) {
            //header('Status: ' . $e->getHttpStatus());
            header("Content-type:text/html;charset=utf-8");
            echo($e->getHttpBody());
        }
    }


    // 支付成功
    public function charge_succeeded() {
        echo 111;
    }

}
