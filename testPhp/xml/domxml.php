<?php
//xml就相当于一个小型数据库

//使用DOM解析xml文件
    //创建DOM对象
    $_domxml = new DOMDocument();
    //加载文件
    $_domxml->load('simplexml.xml');
    //获取节点
    $_username = $_domxml->getElementsByTagName('username');
    //打印对应节点的值
    echo $_username->item(0)->nodeValue;

    
//使用DOM创建xml文件
    //创建对象
    $_dom = new DOMDocument('1.0', 'utf-8');
    
    //按照一般格式往文件中添加节点
    $_dom->formatOutput = true;
    
    //创建标签
    $_root = $_dom->createElement('root');
    $_vesion = $_dom->createElement('vesion');
    
    //添加值
    $_vesionTextNode = $_dom->createTextNode('1.0');
    $_vesion->appendChild($_vesionTextNode);
    
    //添加标签
    $_root->appendChild($_vesion);
    $_dom->appendChild($_root);
    
    //生产xml文件
    $_dom->save('dom.xml');
 
 
?>