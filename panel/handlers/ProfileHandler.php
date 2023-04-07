<?php
include 'handler.php';
include USERPANEL_DIR . "view.class.php";
class profileHandler extends handler
{

    public function __construct()
    {

    }

    public function index()
    {
        global $wpdb;

        if (isset($_POST['update-user-form'])) {

            $id = get_current_user_id();
            $wpdb->update(
                $wpdb->prefix . 'users',

                array(
                    'ID' => $id ,
                    'display_name' => apply_filters('pre_user_display_name', $_POST['user_display_name'])
                ),

                array('ID' =>   $id),
            );

            $table =    $wpdb->prefix . 'dashboardproanotherdata';
            $data = array(
                'userId' =>  $id ,
                'user_country' => $_POST['user_country'],
                'user_city' => $_POST['user_city'],
                'user_image' => $_POST['user_image'],
                'user_address' => $_POST['user_address'],
                'user_phone' => $_POST['user_phone'],
                'user_website' => $_POST['user_website']
            );

            $result = $wpdb->update(
                $table ,
                $data  ,
                array('userId' =>   $id),
            );

            $checkIfExists = $wpdb->get_var("SELECT userId FROM {$wpdb->prefix}dashboardproanotherdata WHERE userId = '$id'");

            if ($checkIfExists == NULL) {
               $wpdb->insert($table, $data);

            }


        }


        $ID = get_current_user_id();
        $current_user1 = $wpdb->get_results("SELECT * FROM  {$wpdb->prefix}users WHERE id ='$ID'");
        $current_user_Another_data = $wpdb->get_results("SELECT * FROM  {$wpdb->prefix}dashboardproanotherdata WHERE userId ='$ID'");

        view::load('panel.profile.index', [
            'current_user' => $current_user1,
            'another_value' => $current_user_Another_data
        ]);




    }


}