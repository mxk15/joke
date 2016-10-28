<?php
	$url = "http://apis.haoservice.com/lifeservice/news/words";
	//服务器代理 后端
	$data = file_get_contents($url);
	echo $_GET['callback']."(".$data.")";
?>