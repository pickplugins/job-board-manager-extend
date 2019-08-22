<?php
/*
Plugin Name: Job Board Manager - Extend
Plugin URI: http://pickplugins.com/
Description: Dummy add-on for Job Board Manager to extend code
Version: 1.0.0
Author: pickplugins
Author URI: http://pickplugins.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Copyright: 	2016 pickplugins

*/

if ( ! defined('ABSPATH')) exit;  // if direct access 


define('job_bm_extend_plugin_url', plugins_url('/', __FILE__)  );
define('job_bm_extend_plugin_dir', plugin_dir_path( __FILE__ ) );


require_once( job_bm_extend_plugin_dir . 'functions/functions-main.php');
