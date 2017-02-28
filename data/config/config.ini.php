<?php
defined('InShopNC') or exit('Access Invalid!');
$config = array();
$config['shop_site_url'] 		= 'http://localhost:8080/shopnc2/shop';
$config['cms_site_url'] 		= 'http://localhost:8080/shopnc2/cms';
$config['microshop_site_url'] 	= 'http://localhost:8080/shopnc2/microshop';
$config['circle_site_url'] 		= 'http://localhost:8080/shopnc2/circle';
$config['admin_site_url'] 		= 'http://localhost:8080/shopnc2/admin';
$config['mobile_site_url'] 		= 'http://localhost:8080/shopnc2/mobile';
$config['wap_site_url'] 		= 'http://localhost:8080/shopnc2/wap';
$config['upload_site_url']		= 'http://localhost:8080/shopnc2/data/upload';
$config['resource_site_url']	= 'http://localhost:8080/shopnc2/data/resource';
$config['version'] 		= '201401162490';
$config['setup_date'] 	= '2017-02-27 19:46:07';
$config['gip'] 			= 0;
$config['dbdriver'] 	= 'mysqli';
$config['tablepre']		= 'shopnc_';
$config['db'][1]['dbhost']  	= 'localhost';
$config['db'][1]['dbport']		= '3306';
$config['db'][1]['dbuser']  	= 'root';
$config['db'][1]['dbpwd'] 	 	= 'admin1234';
$config['db'][1]['dbname']  	= 'shopnc';
$config['db'][1]['dbcharset']   = 'UTF-8';
$config['db']['slave'] 		= array();
$config['session_expire'] 	= 3600;
$config['lang_type'] 		= 'zh_cn';
$config['cookie_pre'] 		= '71B2_';
$config['tpl_name'] 		= 'default';
$config['thumb']['cut_type'] = 'gd';
$config['thumb']['impath'] = '';
$config['cache']['type'] 			= 'file';
//$config['memcache']['prefix']      	= 'nc_';
//$config['memcache'][1]['port']     	= 11211;
//$config['memcache'][1]['host']     	= '127.0.0.1';
//$config['memcache'][1]['pconnect'] 	= 0;
//$config['redis']['prefix']      	= 'nc_';
//$config['redis']['master']['port']     	= 6379;
//$config['redis']['master']['host']     	= '127.0.0.1';
//$config['redis']['master']['pconnect'] 	= 0;
//$config['redis']['slave']      	    = array();
//$config['fullindexer']['open']      = false;
//$config['fullindexer']['appname']   = 'shopnc';
$config['debug'] 			= false;
$config['default_store_id'] = '0';
// 是否开启伪静态
$config['url_model'] = false;
// 二级域名后缀
$config['subdomain_suffix'] = '';