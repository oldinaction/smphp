<?php
/**
 * OIHAO Version1.0
 * ================================================
 * Copy 2014-2015 AEZO
 * Web: http://www.aezo.cn http://www.oihao.com
 * ================================================
 * Author: 小易Smalle
 * Date: 2015-1-21
 */
session_start();//开启session才可以往session中读写数据
//定义常量IN_TG,用以授权调用includes里的文件(common.inc.php)
define('IN_TG', true);
//引入公共文件（__DIR__不包含/）
require __DIR__.'/includes/common.inc.php'; //使用硬路径访问速度更快
//定义一个常量用来指本页内容
define('SCRIPT', 'add');

//判断是否提交了
if($_GET['action'] == 'add'){//视频上不提示错误
    //判断验证码，防止恶意注册
    _check_code($_SESSION['code'], $_POST['code']);
 
    //引入验证函数库
    include ROOT_PATH.'includes/add.func.php';
    
    $_clean = array();
    $_clean['name'] = _check_name($_POST['name'], 1, 20);
    $_clean['url'] = _check_url($_POST['url'], 3, 60);
    //判断下拉列表，博客分类
    $_clean['classid'] = _check_class($_POST['site_class']);
    
    //由于checkbox属性，我们必须把checkbox复选择框的名字设置为如tag[]，这样php才能读取，以数据形式,否则不能正确的读取checkbox复选框的值
//     $_tag_arr = array();
//     $_tag_arr = $_POST['tag'];  
//     $_clean['tag'] = _check_tag($_tag_arr);
    
    $_clean['desc'] = _check_desc($_POST['desc'], 5, 300);
    $_clean['city'] = _check_city($_POST['city']);
    $_clean['email'] = _check_email($_POST['email'], 6, 60);
//print_r($_clean);
    //写入到数据库
    _query("INSERT INTO blog_sites
                (
                    name,
                    url,
                    description,
                    class_id,
                    city_id,
                    email,
                    add_time
                ) 
            VALUES
                (
                    '{$_clean['name']}',
                    '{$_clean['url']}',
                    '{$_clean['desc']}',
                    '{$_clean['classid']}',
                    '{$_clean['city']}',
                    '{$_clean['email']}',
                    NOW() 
                )"
    );
    
    if(_affected_rows() == 1) {
        //关闭数据库
        _close();
        //注册成功，跳转页面
        _location('index.php','您已经申请成功，请耐心等待审核！');
    } else {
        _close();
        _location('add.php','申请失败！');
    }
     
}

?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>OI主页 - 网站提交</title>
	
	<?php require ROOT_PATH.'includes/title.inc.php';?>
	<script type="text/javascript" src="js/add.js"></script>
	
</head>
<body>
    <?php 
        require ROOT_PATH.'includes/header.inc.php';
    ?>
    
    <div id="add">
        <h2>网站提交</h2>
        <form method="post" action="add.php?action=add" name="add">
            <dl>
                <dt>请认真填写以下信息</dt>
                <dd>网站名称：<input type="text" name="name" class="text" placeholder="不能超过20个字符"/>&nbsp;(*必填)</dd>
                <dd>网站 URL：<input type="text" name="url" class="text" value="http://"/>&nbsp;(*必填)</dd>
                <?php
                    //获取博客站点分类 
                    $_result_class = _query("SELECT * FROM oihao_blog_class");
                    $_classStr1 = $_classStr2 = $_classStr3 = $_classStr4 = $_classStr5 = '';
                    while(@$_class = mysql_fetch_array($_result_class)){
                        switch($_class['parent_id']){
                        	case 1 : $_classStr1 .= $_class['id'] . ',' . $_class['classname'] . '|';
                                break;
                            case 2 : $_classStr2 .= $_class['id'] . ',' . $_class['classname'] . '|';
                                break;
                            case 3 : $_classStr3 .= $_class['id'] . ',' . $_class['classname'] . '|';
                                break;
                            case 4 : $_classStr4 .= $_class['id'] . ',' . $_class['classname'] . '|';
                                break;
                            case 5 : $_classStr5 .= $_class['id'] . ',' . $_class['classname'] . '|';
                                break;
                            default :
                                break;
                        }
                    }
                    $_classStr1 = substr($_classStr1, 0, strlen($_classStr1)-1);
                    $_classStr2 = substr($_classStr2, 0, strlen($_classStr2)-1);
                    $_classStr3 = substr($_classStr3, 0, strlen($_classStr3)-1);
                    $_classStr4 = substr($_classStr4, 0, strlen($_classStr4)-1);
                    $_classStr5 = substr($_classStr5, 0, strlen($_classStr5)-1);
                    $GLOBALS['classStr'] = $_classStr1 . '*' . $_classStr2 . '*' . $_classStr3 . '*' . $_classStr4 . '*' . $_classStr5;
                    //$GLOBALS['classStr'] = '['.$_classStr1.'],' . '['.$_classStr2.'],' . '['.$_classStr3.'],' . '['.$_classStr4.'],' . '['.$_classStr5.']';
                ?>
             <input type="hidden" name="classStr" value='<?php echo $GLOBALS["classStr"];?>'/>
             <dd>网站分类：
                 <select name="parent_class" id="parent_class" onChange="getSel2()">
                    <option value="0">请选择 </option>
                    <option value="1">IT综合</option>
                    <option value="2">开发设计</option>
                    <option value="3">网站建设</option>
                    <option value="4">休闲娱乐</option>
                    <option value="5">公司机构</option>
                  </select>&nbsp;
                  <select name="site_class" id="site_class">
                    <option value="0">请选择</option>
                  </select>
                  &nbsp;(*必选)
              </dd>
<!--                 <dd id="tags"><span>网站标签：</span> -->
<!--                             <label><input type="checkbox" name="tag[]" value="综合"/>综合</label> -->
<!--                             <label><input type="checkbox" name="tag[]" value="建站技术"/>建站技术</label> -->
<!--                             <label><input type="checkbox" name="tag[]" value="网站优化"/>网站优化</label> -->
<!--                             <label class="tag"><input type="checkbox" name="tag[]" value="编程语言"/>编程语言</label> -->
<!--                             <label><input type="checkbox" name="tag[]" value="移动APP"/>移动APP</label> -->
<!--                             <label><input type="checkbox" name="tag[]" value="互联网营销"/>互联网营销</label> -->
<!--                 </dd> -->
                <dd>网站描述：<input type="text" name="desc" class="desc" placeholder="请尽量详细描述，让更多人了解贵站！"/>&nbsp;(*必填)</dd>
                <dd>省&nbsp;&nbsp;&nbsp;&nbsp;份：
                    <select name="city">
<!--                         <option value="1">北京</option> -->
<!--                         <option value="2">天津</option> -->
                         <option value="0">请选择省份</option>
                        <?php
                             $_result = _query("SELECT * FROM city ORDER BY id");
                             while(@$_citys = mysql_fetch_array($_result)) {
                                echo '<option value="'.$_citys['id'].'">'.$_citys['name'].'</option>'; 
                             }
                             //_close();//不能要
                        ?>
                    </select>
                    &nbsp;(*必选)
                </dd>
                <dd>电子邮件：<input type="text" name="email" class="text"/>&nbsp;(*,请填常用邮箱)</dd>
                <dd>验证码&nbsp;&nbsp;：<input type="text" name="code" class="text code"/><img src="code.php" alt="验证码" id="codeimg" /></dd>
                <dd><input type="submit" value="提交" class="add"/></dd>
            </dl>
        </form>
    </div>
     
    <?php
        require ROOT_PATH.'includes/footer.inc.php';
    ?>
    
</body>
</html>