<?php
// create a wordpress plugin header for the updater
/* 
 * Plugin Name: Test Updater
 * Description: Test plugin for the updater
 * Version: 0.1.0
 * Author: Your Name
 * Author URI: http://yourwebsite.com
 */


//  This is a test....

require 'plugin-update-checker/plugin-update-checker.php';

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
  'https://github.com/prolific-digital/test-updater/',
  __FILE__,
  'unique-plugin-or-theme-slug'
);

//Set the branch that contains the stable release.
// $myUpdateChecker->setBranch('main');
