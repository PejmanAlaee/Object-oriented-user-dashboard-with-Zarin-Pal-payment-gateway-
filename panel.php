<?php
/*
Plugin Name: userPanelPro
Plugin URI: www.pejmanalaee.ir
Description: provide a panel to wordpress users
Author: pejman
Author URI: /
Text Domain: wordpress-auth
Domain Path: /languages/
Version: 5.6.1
*/
class panelPro
{

    public function __construct()
    {

        $this->define_constants();
        $this->init();

    }

    public function init()
    {


        register_activation_hook(__FILE__, [$this, 'activation']);
        register_deactivation_hook(__FILE__, [$this, 'deactivation']);
        $this->start_router();
    }




    public function define_constants()
    {

        define('USERPANEL_DIR', plugin_dir_path(__FILE__));
        define('USERPANEL_URL', plugin_dir_url(__FILE__));
        define('UPP_VIEWS', USERPANEL_DIR . '/views/');
        define('ASSETS_URL', USERPANEL_URL . '/assets/');


    }

    public function activation()
    {

            global $wpdb;

            $table = $wpdb->prefix . 'dashboardProAnotherData';

            $charset_collate = $wpdb->get_charset_collate();

            // Write creating query
            $query = "CREATE TABLE IF NOT EXISTS  " . $table . " (
                id DOUBLE AUTO_INCREMENT,
                userId VARCHAR(255),
                country VARCHAR(255),
                city VARCHAR(255),
                address VARCHAR(255),
                image VARCHAR(255),
                phone VARCHAR(255),
                website VARCHAR(255),
                PRIMARY KEY(id)
                )$charset_collate;";

            $wpdb->query($query);




            global $wpdb;

            $table = $wpdb->prefix . 'TRANSTable';

            $charset_collate = $wpdb->get_charset_collate();

            // Write creating query
            $query = "CREATE TABLE IF NOT EXISTS  " . $table . " (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `user_id` int(11) NOT NULL,
                `amount` int(11) NOT NULL,
                `reserve` varchar(100) NOT NULL,
                `ref_num` varchar(100) DEFAULT NULL,
                `create_at` datetime NOT NULL DEFAULT current_timestamp(),
                `paid_at` datetime ,
                `status` tinyint(4) NOT NULL,
                PRIMARY KEY (`id`)
              ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci
                  
              ";

            $wpdb->query($query);















    }
    private function start_router()
    {
        include 'router.php';
        new router;
    }

    public function deactivation()
    {


    }


}

new panelPro;