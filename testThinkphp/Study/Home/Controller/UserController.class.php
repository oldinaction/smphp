<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;

class UserController extends Controller {
    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover,{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div>','utf-8');
    }
    
    //实例化模型
    public function model(){
    	//$user = M('User');
    	$user = D('User'); //相当于实例化\Home\Model\UserModel，如果UserModel不存在则示例化其父类即Model（此时相当于M方法）
    	var_dump($user->select());    	
    }
    
    //数据查询
    public function s(){
        $User = M('User');
        
        //数组方式查询
        $condition['user'] = 'smalle';
        $condition['pass'] = '12345';
        $condition['_logic'] = 'OR';
        var_dump($User->where($condition)->select());
     
        //快捷查询
        $map1['user&pass'] = array('smalle', '123456', '_multi'=>true);
        var_dump($User->where($map1)->select());
        
        //表达式查询
        $map2['user'] = array('like', array('%old','%sm%'), 'OR'); //找到以old结尾和含有sm的
        var_dump($User->where($map2)->select());
        
        //区间查询,gt、lt是表达式查询中的>和<
        $map3['id'] = array(array('gt',2), array('lt',4), 'and');
        var_dump($User->where($map3)->select());
        
        //统计查询
        echo '一共有用户：'.$User->count();
        
        //原生SQL查询
        $Model = new Model(); //实例化一个model对象 没有对应任何数据表
        var_dump($Model->query("SELECT * FROM think_user WHERE id=2"));
        $Model->execute("update think_user set pass='12345678' where id=4");//execute用于更新和写入数据的sql操作
    
        //动态查询
        $user = $User->getByUser('smalle');//通过user=smalle获取对应的条目
        var_dump($user);
        $userPass = $User->getFieldByUser('smalle', pass);//通过user=smalle获取对应的字段pass
        var_dump($userPass);
        
    }
    
    //命名范围、连贯操作
    public function scope(){
        $user = D('User');
        var_dump($user->scope('sql1')->select());
        var_dump($user->scope('sql2')->select());
        var_dump($user->scope('sql2')->field('user')->limit(2)->select());
    }
    
    
    
    
    
    
    
    
    
    
}