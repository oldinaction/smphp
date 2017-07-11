<?php
//xml就相当于一个小型数据库

    //复杂式字符串(单引号、双引号、复杂式)，里面可以换行，可以放单双引号等特殊字符，可以解析变量
    //格式：以<<<开头，<<<的后面紧跟一个任意标记字符串，且此字符串要和结尾的标记字符串相同，这两个标记字符串与字符串中的第一个字符和最后一个字符间不能有空格
    $_xml = <<<_xml
<?xml version="1.0" encoding="utf-8"?>       
<root>
    <version>1.0</version>

    <user>
        <username id="1" sex="男">smalle</username>
    </user>
        
    <user>
        <username>小易</username>
        <job>程序员</job>
    </user>
</root>
_xml;
    
    //创建simplexml对象
    $_simplexml = new SimpleXMLElement($_xml);
    //生成xml文件
    $_simplexml->asXML('simplexml.xml');
    
    //读取xml文件
    //simplexml_load_file返回的是一个对象型数组，用echo $_xmlfile;打印结果不返回Array，但是有具有数组的性质，可以用下表取值
    $_xmlfile = simplexml_load_file('simplexml.xml');
        //print_r($_xmlfile);
        //echo $_simplexml->asXML();
        //var_dump($_xmlfile);//
        //Reflection::export(new ReflectionClass($_simplexml));//利用反射机制查看信息
    
    //(1)法一：读取节点的值
    //读取某个节点的值
    echo $_xmlfile->version;
    echo $_xmlfile->user[1]->username;
    
    //获取某个节点属性的值
    echo $_simplexml->user[0]->username->attributes()[1];
    
    //遍历某个节点
    foreach ($_xmlfile->user as $_value){
    	echo $_value->username;
    }
echo "<br/>";
    
    //(2)法二：利用xpath读取节点的值
    echo $_simplexml->xpath('/root/version')[0];
    $_username = $_simplexml->xpath('/root/user/username');
    echo $_username[1];
    echo $_username[0]->attributes()[1];
    foreach ($_simplexml->xpath('/root/user/username') as $_value){
        echo $_value;
    }
    
    
    
 
 
 
?>