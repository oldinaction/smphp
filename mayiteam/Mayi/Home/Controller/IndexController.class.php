<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index(){
        $Goods = M('Goods');
        
        $goodList = $Goods->select();
        $this->assign('goods',$goodList);
        
        $this->display();
    }
}