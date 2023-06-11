<?php

error_reporting(E_ALL || ~E_NOTICE);     //禁止显示PHP错误信息

$qq=@$_GET['qq'];

$agent = strtolower($_SERVER['HTTP_USER_AGENT']);

 //var_dump($agent );

$is_pc = (strpos($agent, 'windows nt')) ? true : false;  

$is_iphone = (strpos($agent, 'iphone')) ? true : false;  

$is_ipad = (strpos($agent, 'ipad')) ? true : false;  

$is_android = (strpos($agent, 'android')) ? true : false;  

if ($qq !=''){

$url='tencent://Message/?uin='.$qq;

header("Location:{$url}");

if($is_pc){

$url='tencent://Message/?uin='.$qq;

header("Location:{$url}");

}

if($is_iphone){

$url='mqq://im/chat?chat_type=wpa&uin='.$qq.'&version=1&src_type=web';

header("Location:{$url}");

}

if($is_android){

$url='mqqwpa://im/chat?chat_type=wpa&uin='.$qq;

header("Location:{$url}");

}

}else{

    $Json = array(

        'code' => 201,

        'msg' => "请输入QQ号",

    );

$Json = json_encode($Json,JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);

echo stripslashes($Json);

return $Json;

}

?>
