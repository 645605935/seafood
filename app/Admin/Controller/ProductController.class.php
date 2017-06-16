<?php
namespace Admin\Controller;
use Common\Controller\AuthController;

class ProductController extends AuthController {
    
    public function _initialize() {
        parent::_initialize();
        global $user;
        $user=session('auth');
        $this->user=$user;
        $this->cur_c='Product';

        $group=M('auth_group')->where(array('pid'=>0))->select();
        foreach ($group as $key => $value) {
            $group[$key]['_child']=M('auth_group')->where(array('pid'=>$value['id']))->select();
        }
        $this->group=$group;
    }

    //列表
    public function index(){
        global $user;
        $this->cur_v='Product-index';

        $group=M('auth_group')->where(array('pid'=>0))->select();
        foreach ($group as $key => $value) {
            $group[$key]['_child']=M('auth_group')->where(array('pid'=>$value['id']))->select();
        }
        $this->group=$group;


        //区域
        $this->area=M('type')->where(array('pid'=>1240))->select();
        //地铁
        $this->metro=M('type')->where(array('pid'=>1263))->select();


        $page="Product/index";
        $page_buttons=M('PageButtons')->where(array('page'=>$page))->select();
        $this->page_buttons=$page_buttons;
        $this->page=$page;
        
        $this->display();
    }

    // 添加
    public function add(){
        global $user;

        if(IS_POST){
            if(!$_POST['title']){$this->error('名称不能为空');exit;};
            $d=D('Product');
            $data=$d->create();
            $data['time']  =NOW_TIME;


            if($id=$d->add($data)){
                if($_FILES['img']['size']>0){
                    $image=new \Common\Extend\Image();
                    $img=$image->upload($_FILES['img'],filePath($user['uid'],'Product'),'thumb');
                    $update['img']      =$img['origin_'];
                    $update['id']=$id;
                    $d->save($update);
                }
                $this->success('添加成功',U('Admin/Product/index'));
            }else{
                $this->error('添加失败');
            }
        }else{
            $type=A('Communal/Type');
            $this->types=$type->getSon(1239);

            $this->display();
        }
    }

    // 编辑
    public function edit(){
        global $user;

        if(IS_POST){
            if(!$_POST['title']){$this->error('名称不能为空');exit;};
            $d=D('Product');        
            $data=$d->create();

            if($_FILES['img']['size']>0){
                $image=new \Common\Extend\Image();
                $img=$image->upload($_FILES['img'],filePath($user['uid'],'Product'),'thumb');
                $data['img']    =$img['origin_'];
            }else{
                unset($data['img']);
            }
            $d->save($data)?$this->success('编辑成功',U('Admin/Product/index')):$this->error('编辑失败');

        }else{
            $type=A('Communal/Type');
            $row=M('Product')->where('id='.$_GET['id'])->find();
            $row['text']=htmlspecialchars_decode($row['text']);

            $this->row=$row;
            $this->types=$type->getSon(1239);

            $this->display();
        }
    }

    //删除
    public function ajax_del(){
        $_json=file_get_contents('php://input');
        $_arr=json_decode($_json,true);


        $ids=$_arr['ids']; 

        $ids_arr=explode(',', $ids);

        if(is_array($ids_arr)){
            foreach ($ids_arr as $key => $value) {
                $fid=$value;
                $_product_info=M('Product')->where(array('id'=>$fid))->find();
                unlink('./Uploads'.$_fang_info['img']);

                if($res = $res = M('Product')->where(array('id'=>$fid))->save(array('is_del'=>1))){
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

    

    //获取列表
    public function ajax_get_product_list(){
        $map=array();
        $map['is_del']=0;
        // if($_GET['username']){
        //     $map['username']=array('like','%'.$_GET['username'].'%');
        // }
            
        // if($_GET['gid']>0){
        //     $map['gid']=$_GET['gid'];
        // }

        $d = D('Product');
        $list = $d->where($map)->order('id desc')->relation(true)->select();

        foreach ($list as $key => $value) {
            $list[$key]['time']=date('Y-m-d',$value['time']);
            $list[$key]['img']="http://".$_SERVER['HTTP_HOST']."/Uploads/".$value['img'];
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
    public function ajax_add_product(){
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

            if($id = D('Product')->where($where)->add($data)){
                $row= D('Product')->relation(true)->find($id);
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