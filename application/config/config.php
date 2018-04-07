<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['base_url'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http"); 
$config['base_url'] .= "://".$_SERVER['HTTP_HOST']; 
$config['base_url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);  
$config['base_login'] = "";
$config['index_page'] = "index.php";
$config['uri_protocol']	= "AUTO";
$config['url_suffix'] = "";
$config['language']	= "english";
//$config['charset'] = "utf8_unicode_ci";
$config['charset'] = "UTF-8";
$config['enable_hooks'] = FALSE;
$config['subclass_prefix'] = 'MY_';
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';
$config['enable_query_strings'] = FALSE;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';
$config['log_threshold'] = 0;
$config['log_path'] = '';
$config['log_date_format'] = 'Y-m-d H:i:s';
$config['cache_path'] = '';
$config['encryption_key'] = "";
$config['sess_cookie_name'] = 'app-ses';
$config['sess_expiration'] = 7200;
$config['sess_encrypt_cookie'] = TRUE;
$config['sess_use_database'] = FALSE;
$config['sess_table_name'] = 'app-sess';
$config['sess_match_ip'] = TRUE;
$config['sess_match_useragent'] = TRUE;
$config['sess_time_to_update'] = 300;
$config['cookie_prefix'] = "";
$config['cookie_domain'] = "";
$config['cookie_path'] = "/";
$config['global_xss_filtering'] = FALSE;
$config['compress_output'] = FALSE;
$config['time_reference'] = 'local';
$config['rewrite_short_tags'] = FALSE;
$config['proxy_ips'] = '';