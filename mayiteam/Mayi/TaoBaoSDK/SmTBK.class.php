<?php
namespace TaoBaoSDK;
include 'TopSdk.php';

class SmTBK {
    private $appkey ;
    private $secretkey;
    private $error ='';
    
    public function __construct($appkey,$secret){
        $this->c = new \TopClient();
        $this->c->appkey = $appkey;
        $this->c->secretKey = $secret;
        if(empty($this->c->appkey)){
            $this->error.='appkey不能为空';
        }
        if(empty($this->c->secretKey)){
            $this->error.='secretkey不能为空';
        }
    }
    
    public function getItemList($q,$cat = '', $isTmall = FALSE, $startPrice ='', $endPrice ='',$startTkRate = '', $endTkRate ='' ,$sort ='tk_rate_des', $pageNO =1, $pageSize = 20,$platForm = 1 , $loc=''){
        if(empty($q) && empty($cat)){
            $this->error .= "查询词和分类id不能同时为空";
            return false;     
        }

        $req = new \TbkItemGetRequest;
        $req->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,click_url,nick,seller_id,volume");//设置需要返回的字段
        if(!empty($q)) 
            $req->setQ($q);
        if(!empty($cat)) 
            $req->setCat($cat);
        if(!empty($loc)) 
            $req->setItemloc($loc);
        $req->setSort($sort);
        $req->setIsOverseas("false");
        if(!empty($startPrice)) 
            $req->setStartPrice($startPrice);
        if(!empty($endPrice)) 
            $req->setEndPrice($endPrice);
        if(!empty($startTkRate)) 
            $req->setStartTkRate($startTkRate);
        if(!empty($endTkRate)) 
            $req->setEndTkRate($endTkRate);
        $req->setPageNo($pageNO);
        $req->setPageSize($pageSize);
        
        $resp = $this->c->execute($req);
   
        if(isset($resp->code)){
            $this->error.=$resp->code.':'.$resp->msg;
            return false;
        }
        
        $goodsList = '';
        if(!empty($resp->results->n_tbk_item)){
            $items = $resp->results->n_tbk_item;
            foreach ($items as $row){
                $goods['num_iid'] = (String) $row->num_iid;//将返回的数据进行强制转化成字符串，以便插入数据中
                $goods['title'] = (String) $row->title;
                $goods['pic_url']  = (String) $row->pict_url;
                $goods['small_images']  = implode(';' ,(array) $row->small_images->string);//将数组转成字符串用";"进行连接，还可以使用explode将字符串转成数组
                $goods['reserve_price']  = (String) $row->reserve_price;
                $goods['price'] = (String) $row->zk_final_price;
                $goods['user_type'] = (String) $row->user_type;
                $goods['provcity'] = (String) $row->provcity;
                $goods['item_url'] = (String) $row->item_url;
                $goods['click_url'] = (String) $row->click_url;
                $goods['nick'] = (String) $row->nick;
                $goods['seller_id'] = (String) $row->seller_id;
                $goods['volume'] = (String) $row->volume;
                if($goods['price'] == 0){
                    $goods['price'] = $goods['reserve_price'];
                }
                $goodsList[] = $goods;
            }
        }
        
        return $goodsList;
    }
    
    /*
    public function getItemLists($q,$cat = '', $isTmall = FALSE, $startPrice ='', $endPrice ='',$startTkRate = '', $endTkRate ='' ,$sort ='tk_rate_des', $pageNO =1, $pageSize = 30,$platForm = 1 , $loc=''){
        if(empty($q) && empty($cat)){
            $this->error .= "查询词和分类id不能同为空";
            return false;
        }
        $req = new TbkItemsGetRequest();
        $req->setFields("num_iid,seller_id,nick,title,price,volume,pic_url,item_url,shop_url");
        if(!empty($q)){
            $req->setKeyword($q);
        }
        if(!empty($cat)){
            $req->setCid($cat);
        }
        if(!empty($loc)){
            $req->setArea($loc);
        }
        $req->setSort($sort);
        $req->setMallItem($isTmall);
        $req->setOverseasItem("false");
        if(!empty($startPrice)){
            $req->setStartPrice($startPrice);
        }
        if(!empty($endPrice)){
            $req->setEndPrice($endPrice);
        }
        if(!empty($startTkRate)){
            $req->setStartCommissionRate($startTkRate);
        }
        if(!empty($endTkRate)){
            $req->setEndCommissionRate($endTkRate);
        }
    
    
         
      
        $req->setPageNo($pageNO);
        $req->setPageSize($pageSize);
         
    
        $goodsList = '';
        $resp = $this->c->execute($req);
         var_dump($resp);
        if(!empty($resp->tbk_items->tbk_item)){
            $items = $resp->tbk_items->tbk_item;
            foreach ($items as $row){
           
                $goods['item_url'] = $row->item_url;
                $goods['pic_url']  = $row->pic_url;
                $goods['market_price']  = $row->price;
                $goods['price'] = $row->discount_price;
                if($goods['price'] ==0){
                    $goods['price'] = $goods['market_price'];
                }
                $goods['click_url'] = $row->click_url;
                $goods['name']     = $row->title;
                $goods['num_iid']   = $row->num_iid;
                $goods['volume']   = $row->volume;
                if($isTmall){
                    $goods['goods_type'] = 'tmall';
                }else{
                    $goods['goods_type'] = 'taobao';
                }
                $goodsList[] = $goods;
        
            }
        }
         
        return $goodsList;
    }
    
    public function getItemInfo($num_iid){
        if(empty($num_iid) ){
            $this->error='非法的num_iid';
            return false;
        }
        $req = new TbkItemInfoGetRequest();
        $req->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,volume");
        $req->setNumIids($num_iid);
        $resp = $this->c->execute($req);
        if(!empty($resp->results->n_tbk_item)){
            $items = $resp->results->n_tbk_item;
            foreach ($items as $row){
                $goods['item_url'] = $row->item_url;
                $goods['pic_url']  = $row->pict_url;
                $goods['market_price']  = $row->reserve_price;
                $goods['price'] = $row->zk_final_price;
                if($goods['price'] ==0){
                    $goods['price'] = $goods['market_price'];
                }
                $goods['click_url'] = $row->click_url;
                $goods['title']     = $row->title;
                $goods['num_iid']   = $row->num_iid;
                $goods['volume']   = $row->volume;
                $goodsList[] = $goods;
            }
        }else{
            if(isset($resp->code)){
                $this->error.=$resp->code.':'.$resp->msg;
                return false;
            }
            
        }
        return $goodsList;
    }
    public function getItemsInfo($num_iid){
        if(empty($num_iid) ){
            $this->error='非法的num_iid';
            return false;
        }
        $req = new TbkItemsDetailGetRequest();
        $req->setFields("num_iid,seller_id,nick,title,price,volume,pic_url,item_url,shop_url");
        $req->setNumIids($num_iid);
        $resp = $this->c->execute($req);
      
        if(!empty($resp->tbk_items->tbk_item)){
            $items = $resp->tbk_items->tbk_item;
            foreach ($items as $row){
                $goods['item_url'] = $row->item_url;
                $goods['pic_url']  = $row->pic_url;
                $goods['market_price']  = $row->price;
                $goods['price'] = $row->discount_price;
                if(empty($goods['price'])||$goods['price'] ==0){
                    $goods['price'] = $goods['market_price'];
                }
                $goods['click_url'] = $row->click_url;
                $goods['name']     = $row->title;
                $goods['num_iid']   = $row->num_iid;
                $goods['volume']   = $row->volume;
                $goods['nick']   = $row->nick;

                $goodsList[] = $goods;
            }
        }else{
            if(isset($resp->code)){
                $this->error.=$resp->code.':'.$resp->msg;
                return false;
            }
    
        }
        return $goodsList;
    } */
    
    
    public function error(){
        return $this->error;
    }
    
}

?>