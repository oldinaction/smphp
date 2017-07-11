<?php
namespace Smalle\Controller;//命名空间(包)。类的真正路径：ThinkPHP/Library(系统的类库目录) + 命名空间 + 类名。系统类库目录可以自己定义
use Think\Controller;//导入Think命名空间下的Controller类

class IndexController extends Controller {
        
    //访问http://127.0.0.1/mayiteam[/index.php]/Admin/Index/index即可
    public function index(){
        echo 'Smalle';
    }
}