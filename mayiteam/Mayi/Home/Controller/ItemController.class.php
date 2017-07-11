<?php
namespace Home\Controller;
use Think\Controller;

class ItemController extends Controller {
    public function index(){
        echo "item detail";
    }
    
    //跳转到淘点金页面
    public function jump(){
        $itemId = I('id');
        $itemUrl = I('url');
        $this->assign('item_id',$itemId);
        $this->assign('item_url',$itemUrl);
        
        echo $itemId . $itemUrl;
        
        $this->display();
    }
    
    
}