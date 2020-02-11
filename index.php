<?php
/* 欢迎使用TCShare v2！这是一个天翼云的目录列表程序。
   在下面填写你的网盘信息，然后授权使用吧！
   v1和v2版本配置文件不兼容，麻烦手动修改一下！
   配置文件依然在config.php里！
  */
use Firebase\JWT\JWT;
define("_LOCAL",dirname(__FILE__)."/_app");
ini_set("display_errors",1);
error_reporting(E_ALL ^ E_NOTICE);
date_default_timezone_set('PRC');
header("X-TCShare-Version: 2.0.0");
require 'config.php';
require _LOCAL.'/vendor/autoload.php';
require _LOCAL.'/sky.class.php';
require _LOCAL.'/TC.class.php';
require _LOCAL.'/routes.php';
Flight::set('flight.views.path', _LOCAL.'/views');
Flight::start();