<?php
include 'handler.php';
include USERPANEL_DIR . "view.class.php";
include USERPANEL_DIR . "utility/class.toConvert.php";
include USERPANEL_DIR . "sevices/payClass.php";


class TransactionHandler extends handler
{

    public function __construct()
    {



    }

    public function index()
    {


        if ($this->checkAction()) {

            $this->showActionPage();
            return;
        }
        $currentUser = get_current_user_id() ;

        global $wpdb ;
        $transAtions = $wpdb->get_results("SELECT * FROM  {$wpdb->prefix}TRANSTable WHERE user_id ='$currentUser'");
 

        view::load('panel.transaction.index' , ['transAtions' => $transAtions ]);

    }





}