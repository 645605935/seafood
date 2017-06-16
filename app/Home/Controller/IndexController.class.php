<?php

namespace Home\Controller;
use Think\CommonController;

class IndexController extends CommonController{

    public function _initialize(){
        parent::_initialize();
    }

    public function index(){
        $url = $_SERVER['HTTP_HOST'];
        $temp_school=explode('.baidulab.', $url);
        $school=$temp_school[0];

        $url = $school;
        $this->school=D('School')->where(array('url'=>$url))->find();

        $this->url=$url;

        //分类
        $type=A('Communal/Type');
        $focus=$type->getSon(1303);
        $six_1=$type->getRow(1305);
        $six_2=$type->getRow(1306);
        $six_3=$type->getRow(1307);
        $six_4=$type->getRow(1308);
        $six_5=$type->getRow(1309);
        $six_6=$type->getRow(1310);

        
        $this->focus=$focus;
        $this->six_1=$six_1;
        $this->six_2=$six_2;
        $this->six_3=$six_3;
        $this->six_4=$six_4;
        $this->six_5=$six_5;
        $this->six_6=$six_6;

        // 记住我  end
        $this->display();
    }

    public function about(){
        $this->display();
    }

    public function about_1(){
        $this->display();
    }

    public function about_2(){
        $this->display();
    }

    public function contact(){
        $this->display();
    }

    public function join(){
        $this->display();
    }

    public function join15(){
        $this->display();
    }

    public function join16(){
        $this->display();
    }

    public function feedback(){
        if($_POST){
            $data=$_POST;
            if($id=M('Message')->add($data)){
                $this->success('提交成功');
            };
        }

        $this->display();
    }

    //是否到期，可否继续登录
    public function ajaxIsCanLogin(){
        if(IS_POST){
            $url = $_SERVER['HTTP_HOST'];
            $temp_school=explode('.baidulab.', $url);
            $url=$temp_school[0];
            $school=D('School')->where(array('url'=>$url))->find();

            if( $school['start_time'] < time() && time() < $school['end_time']){
                $data['status']="1";
            }else{
                $data['status']="1";
            }
            echo json_encode($data);
        }
    }
}