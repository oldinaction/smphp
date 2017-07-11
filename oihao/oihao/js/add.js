//包含点击验证码刷新功能
window.onload = function (){
	var codeimg = document.getElementById('codeimg');//验证码
	codeimg.onclick = function(){
		this.src='code.php?tm='+Math.random();
	}
	
	//表单验证，能用JS验证就尽量用JS验证，而不是呀服务器验证
	var fm = document.getElementsByTagName('form')[1];//获取注册的form表单,注意上方有个百度搜索的form表单
	fm.onsubmit = function(){
		//网站标题验证
		if(fm.name.value.length < 1 || fm.name.value.length > 20){
			alert('用户名长度不能小于1或者大于20位哦！');
			fm.name.value = '';//清空
			fm.name.focus();//将焦点移至表中字段
			return false;
		}
		
		//url验证
		if(fm.url.value != '') {
			if(!sm_isUrl(fm.url.value)) {
				alert('URL地址不符合要求！');
				fm.url.value = '';//清空
				fm.url.focus();//将焦点移至表中字段
				return false;
			}
			if(fm.url.value.length < 3 || fm.url.value.length > 60){
				alert('网址太长或太短，本站不收录！');
				fm.url.value = '';//清空
				fm.url.focus();//将焦点移至表中字段
				return false;
			}
		} else {
			alert('URL地址不能为空！');
			return false;
		}
		
		//网站分类验证
		if(fm.site_class.value == 0){
			alert('请选择网站分类！');
			fm.parent_class.focus();
			return false;
		}
		
		//网站标签验证
//		if(!checktag()) {
//			return false;
//		}
		
		//网站描述验证
		if(fm.desc.value.length < 5 || fm.desc.value.length > 300) {
			alert('网站描述不能少于5个字符，且不能长于300个字符！');
			fm.desc.focus();//将焦点移至表中字段
			return false;
		}
		
		//验证省份
		if(fm.city.value < 1 || fm.city.value > 34) {
			alert('省份选择错误！');
			fm.city.focus();//将焦点移至表中字段
			return false;
		}
		
		邮箱验证
		if(!/^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/.test(fm.email.value)) {
			alert('邮件格式不正确！');
			fm.email.value = '';//清空
			fm.email.focus();//将焦点移至表中字段
			return false;
		}
		
		验证码验证
		if(fm.code.value.length != 4){
			alert('验证码必须是4位！');
			fm.code.value = '';//清空
			fm.code.focus();//将焦点移至表中字段
			return false;
		}
		
		return true;
	}
	
	
};//等待网页加载完毕后再执行,匿名函数后面要有个分号


function sm_isUrl(str_url){
    var strRegex = "^((https|http|ftp|rtsp|mms)?://)" 
    + "?(([0-9a-z_!~*'().&=+$%-]+: )?[0-9a-z_!~*'().&=+$%-]+@)?" //ftp的user@ 
          + "(([0-9]{1,3}\.){3}[0-9]{1,3}" // IP形式的URL- 199.194.52.184 
          + "|" // 允许IP和DOMAIN（域名）
          + "([0-9a-z_!~*'()-]+\.)*" // 域名- www. 
          + "([0-9a-z][0-9a-z-]{0,61})?[0-9a-z]\." // 二级域名 
          + "[a-z]{2,6})" // first level domain- .com or .museum 
          + "(:[0-9]{1,4})?" // 端口- :80 
          + "((/?)|" // a slash isn't required if there is no file name 
          + "(/[0-9a-z_!~*'().;?:@&=+$,%#-]+)+/?)$"; 
	var re = new RegExp(strRegex); 
	re.test();
	if (re.test(str_url)){
		return true; 
	}else{ 
		return false; 
	}
}

//******JS获取复选框的值******
function checktag() {
	var str = document.getElementsByName("tag[]");	
	var objarray = str.length;
	var chestr = "";
	for (i=0; i < objarray; i++) {
		if(str[i].checked == true) {
			chestr += str[i].value+",";
		}
	}
	if(chestr == "") {
		alert("请先选择一个标签！");
		return false; 
	} else {
		//alert("您先择的是：" + chestr);
		return true;
	}
}

/**
 * JS实现下拉菜单二级联动
 */
function getSel2(){
	var arraySel1 = new Array();
	var arraySel2 = new Array();
	var arraySel = new Array();
	var classStr1 = document.add.classStr.value;//获取放到隐藏框中的数据库中的数据
	var select1 = document.add.parent_class;//获得一级下拉框对象
	var select2 = document.add.site_class;//获得二级下拉框对象

	arraySel1 = classStr1.split('*');
    var classStr2 = arraySel1[select1.selectedIndex-1];//得到对应parent_class的site_class的内容
    arraySel2 = classStr2.split('|');
    select2.length=1;//清空select下拉框
	for(var i=0; i<arraySel2.length; i++){
		arraySel = arraySel2[i].split(',');
		select2[i+1] = new Option(arraySel[1], arraySel[0]); //填充下拉框
	}
}




