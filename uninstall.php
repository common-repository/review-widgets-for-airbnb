<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
die;
}
require_once plugin_dir_path( __FILE__ ) . 'trustindex-plugin.class.php';
$trustindex_pm_airbnb = new TrustindexPlugin_airbnb("airbnb", __FILE__, "12.4.1", "Widgets for Airbnb Reviews", "Airbnb");
$trustindex_pm_airbnb->uninstall();
?>