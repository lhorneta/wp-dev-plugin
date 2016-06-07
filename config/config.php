<?php
 
 define( 'WP_PLUGINS', '/wp-content/plugins' );
 define( 'WP_PLIGIN_DEV', '/dev' );
 define ('WP_PATH_PLUGINS', ABSPATH . WP_PLUGINS);
 define ('WP_DEV_PATH', site_url().WP_PLUGINS.WP_PLIGIN_DEV);

 define( 'DEV_PREFIX', 'dev_' );

 define('SYSTEM_PATH', 'system');
 define('ADMIN', 'admin');
 define('FRONTEND', 'frontend');
 define('CONTROLLER', 'controller');
 define('MODEL', 'model');
 define('VIEW', 'view');
 define('TEMPLATE_PATH', 'templates');
 define('JS', WP_DEV_PATH.'/js');
 define('CSS', WP_DEV_PATH.'/css');
 define('IMG', WP_DEV_PATH.'/img');
 define('LIBRARIES', WP_DEV_PATH.'/libraries');
 define('HELPERS_PATH', WP_DEV_PATH.'/helpers');
 define('TPL', '.tpl');
 define('HTML', '.html');
 define('MODULES', WP_DEV_PATH.'/modules');
 define('ERRORS', TRUE);
 define('DS', DIRECTORY_SEPARATOR);
 define('CATEGORY', 'category');
