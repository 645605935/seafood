<?php
namespace Admin\Controller;
use Common\Controller\AuthController;

class HuxingController extends AuthController {
    
    public function _initialize() {
        parent::_initialize();
        global $user;
        $user=session('auth');
        $this->user=$user;
        $this->cur_c='Fang';

        $group=M('auth_group')->where(array('pid'=>0))->select();
        foreach ($group as $key => $value) {
            $group[$key]['_child']=M('auth_group')->where(array('pid'=>$value['id']))->select();
        }
        $this->group=$group;
    }

    // 添加
    public function add(){
        global $user;

        if(IS_POST){
            if(!$_POST['fid']){$this->error('房源不能为空');exit;};
            $d=D('Huxing');
            $data=$d->create();
            $data['time']  =NOW_TIME;


            if($id=$d->add($data)){
                if($_FILES['img']['size']>0){
                    $image=new \Common\Extend\Image();
                    $img=$image->upload($_FILES['img'],filePath($user['uid'],'Fang'),'thumb');
                    $update['img']      =$img['origin_'];
                    $update['id']=$id;
                    $d->save($update);
                }
                $this->success('添加成功',U('Admin/Fang/index'));
            }else{
                $this->error('添加失败');
            }
        }else{
            $type=A('Communal/Type');
            $this->leixing=$type->getSon(1266);//类型
            $this->fengge=$type->getSon(1269);//风格
            $this->weishengjian=$type->getSon(1275);//卫生间
            $this->chaoxiang=$type->getSon(1280);//朝向
            $this->yangtai=$type->getSon(1285);//阳台
            $this->payment=$type->getSon(1289);//付款方式
            $this->status=$type->getSon(1293);//出租状态
            $this->shiyou=$type->getSon(1244);//室友

            $this->fang=M('fang')->find($_GET['fid']);

            $this->display();
        }
    }

    // 编辑
    public function edit(){
        global $user;

        if(IS_POST){
            if(!$_POST['fid']){$this->error('房源不能为空');exit;};
            $d=D('Huxing');        
            $data=$d->create();

            if($_FILES['img']['size']>0){
                $image=new \Common\Extend\Image();
                $img=$image->upload($_FILES['img'],filePath($user['uid'],'Huxing'),'thumb');
                $data['img']    =$img['origin_'];
            }else{
                unset($data['img']);
            }
            $d->save($data)?$this->success('编辑成功',U('Admin/Fang/index')):$this->error('编辑失败');

        }else{
            $type=A('Communal/Type');
            $this->leixing=$type->getSon(1266);//类型
            $this->fengge=$type->getSon(1269);//风格
            $this->weishengjian=$type->getSon(1275);//卫生间
            $this->chaoxiang=$type->getSon(1280);//朝向
            $this->yangtai=$type->getSon(1285);//阳台
            $this->payment=$type->getSon(1289);//付款方式
            $this->status=$type->getSon(1293);//出租状态
            $this->shiyou=$type->getSon(1244);//室友

            $row=M('Huxing')->find($_GET['id']);
            $row['text']=htmlspecialchars_decode($row['text']);

            $this->fang=M('fang')->find($row['fid']);

            $this->row=$row;
            $this->display();
        }
    }

    //删除户型
    public function ajax_del_huxing(){
        $_json=file_get_contents('php://input');
        $_arr=json_decode($_json,true);


        $ids=$_arr['ids']; 

        $ids_arr=explode(',', $ids);

        if(is_array($ids_arr)){
            foreach ($ids_arr as $key => $value) {
                $hxid=$value;
                $_huxing_info=M('huxing')->where(array('id'=>$hxid))->find();
                unlink('./Uploads'.$_huxing_info['img']);

                if($res = M('huxing')->where(array('id'=>$hxid))->save(array('is_del'=>1))){
                    $data=array();
                    $data['code']=0;
                    $data['msg']='success';
                    
                    echo json_encode($data);
                }else{
                    $data=array();
                    $data['code']=1;
                    $data['msg']='error';
                    
                    echo json_encode($data);
                }
            }
        }
    }


    //根据FID获取户型列表
    public function ajax_get_fang_relation_huxings(){

        $id=$_GET['id'];
        if($id==0){
            $list = array();
        }else{
            $list = M('Huxing')->where(array('fid'=>$id, 'is_del'=>0))->order('time desc')->select();
        }

        foreach ($list as $key => $value) {
            $list[$key]['time']=date('Y-m-d',$value['time']);
            $list[$key]['img']="http://".$_SERVER['HTTP_HOST']."/uoko/Uploads/".$value['img'];
        }

        

        echo json_encode($list);
    }

    

    //获取列表
    public function ajax_get_fang_list(){
        $map=array();
        $map['is_del']=0;
        // if($_GET['username']){
        //     $map['username']=array('like','%'.$_GET['username'].'%');
        // }
            
        // if($_GET['gid']>0){
        //     $map['gid']=$_GET['gid'];
        // }

        $d = D('Fang');
        $list = $d->where($map)->order('id desc')->relation(true)->select();

        foreach ($list as $key => $value) {
            $list[$key]['time']=date('Y-m-d',$value['time']);
            $list[$key]['img']="http://".$_SERVER['HTTP_HOST']."/uoko/Uploads/".$value['img'];
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

    //添加
    public function ajax_add_fang(){
        $_json=file_get_contents('php://input');
        $_arr=json_decode($_json,true);

        if($_arr){
            $data=array();
            $data['sn']=$_arr['sn'];
            $data['title']=$_arr['title'];
            $data['address']=$_arr['address'];
            $data['keywords']=$_arr['keywords'];
            $data['metro']=$_arr['metro'];
            $data['area']=$_arr['area'];
            $data['img']=$_arr['img'];
            $data['time']=time();

            if($id = D('Fang')->where($where)->add($data)){
                $row= D('Fang')->relation(true)->find($id);
                if($row){
                    $data=array();
                    $data['code']=0;
                    $data['msg']='success';
                    $data['data']=$row;
                }else{
                    $data=array();
                    $data['code']=1;
                    $data['msg']='error';
                }
            }else{
                $data=array();
                $data['code']=1;
                $data['msg']='error';
            }
            
            
        }else{
            $data=array();
            $data['code']=2;
            $data['msg']='error';
        }

        echo json_encode($data);
    }

   
    

}

?>