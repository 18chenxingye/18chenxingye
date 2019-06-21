<?php
class site{
	/*成员变量*/
	var$url;
	var$title;
	
	/*成员函数*/
	function setUrl($par){
		$this->url = $par;
	}
 function getUrl(){
 	echo $this->url.PHP_EOL;
 }
 function setTitle($par){
 	$this->title=$par;
 }
 function getTitle(){
 	echo $this->title.PHP_EOL;
 }
}

$runoob=new site;
$taobao=new site;
$google=new site;

//调用成员函数,设置标题和URL
$runoob->setTitle("菜鸟教程");
$taobao->setTitle("淘宝");
$google->setTitle("Google 搜索");

$runoob->seturl('wwww.runoob.com');
$taobao->seturl('www.taobao.com');
$google->seturl('www.Google.com');

//调用成员函数,获取标题和URL
$runoob->getTitle();
$taobao->getTitle();
$google->getTitle();

$runoob->geturl();
$taobao->geturl();
$google->geturl();
?>