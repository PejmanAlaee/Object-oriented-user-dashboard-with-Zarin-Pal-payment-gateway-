<?php

include "handler.php";
include USERPANEL_DIR . "utility/class.toConvert.php";
include USERPANEL_DIR . "view.class.php" ;

class dashboardHandler extends handler
{

    public function __construct()
    {


    }

    public function index()
    {
        global $wpdb ;
        $transOne = $wpdb->get_results("SELECT SQL_CALC_FOUND_ROWS * FROM  {$wpdb->prefix}TRANSTable  WHERE status = 1 ");
        $transS = $wpdb->get_var("SELECT FOUND_ROWS()");

        $transTwo = $wpdb->get_results("SELECT SQL_CALC_FOUND_ROWS * FROM  {$wpdb->prefix}TRANSTable  WHERE status = 0 ");
        $transF = $wpdb->get_var("SELECT FOUND_ROWS()");

        $current_user = wp_get_current_user(); 
        $current_user100 = get_current_user_id();

        $value = (int) get_user_meta($current_user100, 'walletUser', true);
        $toConvert = new toConvert();
        $user_wallet = $toConvert->toConvertToman($value);

        $profile = $wpdb->get_results("SELECT * FROM  {$wpdb->prefix}users WHERE id ='$current_user100'");


        view::load ('panel.dashboard.index' , [
            'current_user' => $current_user,
            'transS' => $transS,
            'transF' => $transF , 
            'user_wallet' => $user_wallet ,
            'profile' =>  $profile[0]->user_email


        ]);
        exit;
    }


}