<?php
namespace Admin\Controller;
use Common\Controller\AuthController;

class MessageController extends AuthController {
    
    public function _initialize() {
        parent::_initialize();
        global $user;
        $user=session('auth');
        $this->user=$user;
        $this->cur_c='Message';

        if($_POST){
            $this->_POST=$_POST;
        }
    }

    //会员列表
    public function index(){
        global $user;
        $this->user=$user;
        
        $this->display();
    }

    //会员列表
    public function ajax_get_message_list(){
        $map=array();
        $d = M('Message');
        $list = $d->where($map)->order('id desc')->select();

        foreach ($list as $key => $value) {
            $list[$key]['register_time']=date('Y-m-d',$value['register_time']);
        }

        if($list){
            $data=array();
            $data['code']=0;
            $data['msg']='success';
            $data['data']=$list;
        }else{
            $data=array();
            $data['code']=1;
            $data['msg']='empty';
        }
        echo json_encode($data);
    }

  

    //删除
    public function ajax_del(){
        $_json=file_get_contents('php://input');
        $_arr=json_decode($_json,true);


        $ids=$_arr['ids']; 

        $ids_arr=explode(',', $ids);

        if(is_array($ids_arr)){
            foreach ($ids_arr as $key => $value) {
                $_uid=$value;
                $_user_info=M('User')->where(array('id'=>$_uid))->find();
                unlink('./Uploads'.$_user_info['img']);
                //删除相关数据表里的数据
                if(M('User')->where(array('id'=>$_uid))->delete()){
                    M('AuthGroupAccess')->where(array('uid'=>$_uid))->delete();
                    unlink($_SERVER['HTTP_ORIGIN'].'/Uploads'.$_user_info);
                }
            }
        }

        $data=array();
        $data['code']=0;
        $data['msg']='success';
        
        echo json_encode($data);
    }

  

}