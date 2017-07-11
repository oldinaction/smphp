$(function(){
	//header-section节点
	$("#search li").each(function(){  
	    $(this).click(function(){
	    	if($(this).hasClass("on")){
	    		return true;
	    	} else {
	    		$("#search .on").removeClass("on");
	    		$(this).addClass("on");
		        return false;//防止页面跳转 
	    	}
	    });  
	});
	
});

/**
 * gowhere() 百度搜索引擎，注意输入文字的input要id=word name=word
 * @param formname	某个form节点，调用：在form标签中加上onsubmit="return gowhere(this)"
 * @returns {Boolean}
 */
function gowhere(formname){	
	var data;//要搜索的数据类型，名字不能取成data-cate，有冲突
	var url;
	/***JS获取节点***/
	var li = document.querySelectorAll("#search li");
	for(i=0; i<li.length; i++){
		if(li[i].getAttribute("class") == "on"){
			data = li[i].getAttribute("data-cate");
		}
	}
	
    if (data == "webpage"){
		url = "http://www.baidu.com/baidu";
		document.search_form.tn.value = "baidu";
		formname.method = "get";
    }
    if (data == "news"){
		document.search_form.tn.value = "news";
		document.search_form.cl.value = "2";
		document.search_form.rn.value = "20";
		url = "http://news.baidu.com/ns";
	}
	if (data == "video"){
		url = "http://mp3.baidu.com/m";
		document.search_form.tn.value = "baidump3";
		document.search_form.ct.value = "134217728";
		document.search_form.lm.value = "-1";
	} 
	if (data == "image"){
		document.search_form.tn.value = "baiduiamge";
		document.search_form.ct.value = "201326592";
		document.search_form.cl.value = "2";
		document.search_form.lm.value = "-1";
		url = "http://image.baidu.com/i";
	}
	if (data == "tieba"){
		url = "http://post.baidu.com/f";
		document.search_form.tn.value = "baiduPostSearch";
		document.search_form.ct.value = "352321536";
		document.search_form.rn.value = "10";
		document.search_form.lm.value = "65536";
	}

	formname.action = url;
	return true;
}
