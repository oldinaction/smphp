<?php
namespace Smalle\Controller;
use Think\Controller;
use TaoBaoSDK\SmTBK as SmTBK;

class CollectController extends Controller {
    
    public function index() {
        $id = I('id',0);
        
        if(IS_POST){
            $name           =   I('name','');
            $q              =   I('q');
            $cid            =   I('cid');
            //$cateId         =   I('cate_id') ? intval(I('cate_id')) : 0;
            $startPrice     =   I('start_price');
            $endPrice       =   I('end_price');
            $startTkRate    =   I("start_tk_rate");
            $endTkRate      =   I("end_tk_rate");
            $sort           =   I('sort');
            $pageNo         =   I('page_no') ? I('page_no') : 1;
            $pageSize       =   I('page_size') ? I('page_size') : 10;
            
            $smtbk = new SmTBK(C('APP_KEY'), C('APP_SECRET'));
            
            $result = $smtbk->getItemList($q,$cid,false,$startPrice,$endPrice,$startTkRate,$endTkRate,$sort,$pageNo,$pageSize);
            //config[PID]
            $Goods = M('Goods');
            //$CollectRules = M('CollectRules');
            if(is_array($result)) {
                foreach($result as $k => $v) {
                    //$result[$k]['cate_id'] = $cateId;
                    if($Goods->create($result[$k])) {
                        $result[$k]['id'] = $Goods->add();//add才是往数据库插入(新增)数据;create只能创建一条记录对象，并没有对数据库进行操作
                    }
                }
                /* $CollectRules->create();
                 if($id > 0) {
                $where['id'] = $id;
                $CollectRules->where($where)->save();
                } else {
                $CollectRules->add();
                } */
                
                $this->assign('_list',$result);
                $this->display();
            } else {
                echo C('APP_KEY');
                $this->error($smtbk->error());
            }
        } else {
            /* if($id > 0) {
                $where['id'] = $id;
                $rule = $CollectRules->where($where)->find();
                $this->assign('rule',$rule);
            } */
            //$category = D('GoodsCategory')->getTree();
             
            //$this->assign('category', $category);
            $this->display();
        }
    }
    
}

?>