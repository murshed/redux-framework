<?php // phpcs:ignore WordPress.Files.FileName
/**
 * Redux page templates.
 *
 * @package     Redux_Templates
 * @subpackage  Core
 * @subpackage  Core
 * @author      Redux.io + Dovy Paukstys
 */

defined( 'ABSPATH' ) || exit;

// Define Physical Path.
define( 'REDUXTEMPLATES_DIR_PATH', trailingslashit( plugin_dir_path( __FILE__ ) ) );

// Version Check & Include Core.
//Redux_Functions_Ex::register_class_path( 'ReduxTemplates', REDUXTEMPLATES_DIR_PATH . 'classes/' );

require_once REDUXTEMPLATES_DIR_PATH . 'classes/class-init.php';
require_once REDUXTEMPLATES_DIR_PATH . 'classes/class-templates.php';
require_once REDUXTEMPLATES_DIR_PATH . 'classes/class-template-overrides.php';

new ReduxTemplates\Init();
