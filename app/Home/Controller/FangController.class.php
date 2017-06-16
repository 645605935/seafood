<?php

namespace Home\Controller;
use Think\CommonController;

class FangController extends CommonController{

    public function _initialize(){
        parent::_initialize();
    }

    public function index(){
        $d =D('Fang');
        $map=array();
        if($_GET['tid']){
            $map['tid']=$_GET['tid'];
        }

        $count      = $d->where($map)->count();
        $Page       = new \Common\Extend\Page($count,10);
        $nowPage = isset($_GET['p'])?$_GET['p']:1;
        $list = $d->order('id desc')->where($map)->page($nowPage.','.$Page->listRows)->relation(true)->select();
        $this->assign('list',$list);
        $show       = $Page->show();
        $this->assign('page',$show);

        //分类
        $type=A('Communal/Type');
        $cate=$type->getSon(1238);
        $this->cate=$cate;
        
        $this->display();
    }

    // 详情
    public function detail(){
        $id=I('id');
        $row=D('Fang')->relation(true)->find($id);
        $row['text']=htmlspecialchars_decode($row['text']);
        $this->row=$row;

        //分类
        $type=A('Communal/Type');
        $cate=$type->getSon(1238);
        $this->cate=$cate;
        $this->display();
    }



   
}