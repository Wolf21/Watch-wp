<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
// Include user custom function
require(WSLU_LOGIN_PLUGIN.'/inc/admin-custom-function.php');

require(WSLU_LOGIN_PLUGIN.'/inc/admin-setting.php');

require(WSLU_LOGIN_PLUGIN.'/inc/admin-social-button.php');

require(WSLU_LOGIN_PLUGIN.'/inc/admin-social-enque-script.php');

require(WSLU_LOGIN_PLUGIN.'/inc/admin-create-widget.php');

require(WSLU_LOGIN_PLUGIN.'/inc/admin-create-shortcode.php');

require(WSLU_LOGIN_PLUGIN.'/inc/admin-rest-api.php');

require( WSLU_LOGIN_PLUGIN.'lib/vendor/autoload.php');