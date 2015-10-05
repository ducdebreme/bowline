<?php

if ($git_branch = shell_exec("git rev-parse --abbrev-ref HEAD | sed -e 's/-/_/g'")) {
  $git_branch = trim($git_branch) . '_';
}

$username = $_ENV['MYSQL_ROOT_USER'];
$pwd = $_ENV['MYSQL_ROOT_PASSWORD'];
$db_host = $_ENV['DBHOST_PORT_3306_TCP_ADDR'];
// $username = 'root';
// $pwd = 'root';
// $git_branch = 'develop_';
// $db_host = '172.17.0.14';

$databases = array();
$databases['default']['default'] = array(
  'driver' => 'mysql',
  'database' => $git_branch . 'assist_current',
  'username' => $username,
  'password' => $pwd,
  'host' => $db_host,
  'prefix' => '',
);
$databases['local_copy']['default'] = array(
  'driver' => 'mysql',
  'database' => 'local_copy',
  'username' => $username,
  'password' => $pwd,
  'host' => $db_host,
  'prefix' => '',
);
$databases['master']['default'] = array(
  'driver' => 'mysql',
  'database' => 'master',
  'username' => $username,
  'password' => $pwd,
  'host' => $db_host,
  'prefix' => '',
);
 

// $conf['cron_key'] = 'CRON_KEY_TEST';

// # enable memcache
// // include_once('./includes/cache.inc');
// // include_once('./sites/all/modules/contrib/memcache/memcache.inc');
// // $conf['cache_default_class'] = 'MemCacheDrupal';
// // $conf['memcache_key_prefix'] = 'assist7';

// # uncomment to display error backtrace
// //$conf['devel_error_handlers'] = array( 2 => '2');
// $conf['error_level'] = '1';


$conf['ubs_sso_force_sso'] = FALSE;
$conf['ubs_sso_test_env'] = TRUE;
$conf['new_joiner_wizard_feature_process_on_cron'] = FALSE;

$conf['preprocess_js'] = TRUE;
$conf['preprocess_css'] = TRUE;


// $conf['environment_indicator_text'] = 'DEV SERVER';
// $conf['environment_indicator_color'] = '#c0c0c0';
// $conf['environment_indicator_enabled'] = TRUE;

// $conf['ubs_snow_server'] = 'https://snowuat.ubsdev.net';
// $conf['ubs_shared_ticket_mech_base_url'] = 'http://assist-uat-config.ubstest.net:8080/ticket-mech';

// $conf['proxy_server'] = 'inet-proxy-a.appl.swissbank.com';
// $conf['proxy_port'] = 8080;
// $conf['proxy_username'] = '00026898';
// $conf['proxy_password'] = 'ENTER_PASSWORD';
// $conf['proxy_user_agent'] = '';
// $conf['proxy_exceptions'] = array('127.0.0.1', 'localhost', $ENV['SOLR_PORT_8983_TCP_ADDR') ];

$conf['apachesolr_environments'] = array(
  'solr' => array('url' => 'http://'.$_ENV['SOLRHOST_PORT_8983_TCP_ADDR'] . ':' . $_ENV['SOLRHOST_PORT_8983_TCP_PORT'] .'/solr')
);

// //Uncomment to set the url of local docker solr for javascript searches
// $conf['local_docker_solr_port'] = 'http://'.$ENV['HTTP_HOST') . ':' . $ENV['SOLR_EXTERNAL_PORT') .'/solr];

//Uncomment to turn off css & js caching
//$conf['preprocess_js'] = FALSE;
//$conf['preprocess_css'] = FALSE;
//Uncomment to view ICNG debug messages
//$conf['icng_debug'] = TRUE;