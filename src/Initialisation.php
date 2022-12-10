<?php


namespace PluginsTest;

require_once ABSPATH . "wp-admin/includes/upgrade.php";

final class Initialisation
{
    public static function setup()
    {
        self::init_table();
    }
    private static function init_table()
    {
        global $wpdb;
        $tableName = $wpdb->prefix . TABLE_NAME;
        $charset_collate = $wpdb->get_charset_collate();
        $sql = "CREATE TABLE IF NOT EXISTS $tableName (id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT, site_url VARCHAR(255) NOT NULL, xtor VARCHAR(10) NULL, PRIMARY KEY (id) ) ENGINE = InnoDB $charset_collate; ";
        dbDelta($sql);
    }
}
