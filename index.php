<?php 
/**
 * @package Developing Plugin
 * @version 1.0
 */
/*
Plugin Name: Dev Plugin
Description: Plugin for developing WP plugins
Author: Suranov Alexey
Version: 1.0
*/



add_action('admin_menu', 'CreatePluginMenu'); 

function CreatePluginMenu()
{
    if (function_exists('add_options_page'))
    {
        add_menu_page('Dev Plugin', 'Dev Plugin', 'manage_options', 'dev-plugin', 'DevOptions');
    }
}

function DevOptions()
{

    $site_url = plugin_dir_path(__FILE__) . "config/";
    $plugin_path = plugin_dir_path(__FILE__);

    if (is_dir($site_url)) {
            if ($dh = opendir($site_url)) {
                while (($config = readdir($dh)) !== false) {

                    $filename = $site_url .  $config;
                    
                    if ($config !== '.' && $config !== '..') {

                        require_once($filename);
                    }
                }
                closedir($dh);
            }
        }

    $dir = array(SYSTEM_PATH, CONTROLLER, MODEL, VIEW);
    foreach ($dir as $folder) {
        $dh = opendir($plugin_path.$folder);

        if (is_dir($plugin_path.$folder)) {
            if ($dh = opendir($plugin_path.$folder)) {
                while (($file = readdir($dh)) !== false) {

                    $filename = $plugin_path.$folder . '/' . $file;


                    if ($file !== '.' && $file !== '..') {
                        require_once($filename);
                    }
                }
                closedir($dh);
            }
        }
    }

    if(ERRORS){
    ini_set("display_errors",1);
    error_reporting(E_ALL);
    }  else {
    ini_set("display_errors",0);
    error_reporting(0);
    }

    $r = new Router();
    $r->action_index();
    $r->getUrlParameters();

}