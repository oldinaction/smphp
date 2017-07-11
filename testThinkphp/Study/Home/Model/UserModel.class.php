<?php
namespace Home\Model;
use Think\Model;

class UserModel extends Model {
    //命名范围
    protected $_scope = array(
    	'sql1' => array(
    	    'where'=>array('id'=>1)
    	),
        'sql2' => array('field'=>'user,pass,date')
    );
    
	public function __construct(){
		parent::__construct();
		echo 'UserModel';
	}
    
}

?>