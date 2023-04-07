<?php
include 'handler.php';
include USERPANEL_DIR . "view.class.php";
include USERPANEL_DIR . "utility/class.toConvert.php";
include USERPANEL_DIR . "sevices/payClass.php";


class WalletHandler extends handler
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

        $current_user = get_current_user_id();

        $value = (int) get_user_meta($current_user, 'walletUser', true);
        $toConvert = new toConvert();


        $user_wallet = $toConvert->toConvertToman($value);
        view::load('panel.wallet.index', compact('user_wallet'));

    }
    public function walletPardakht()
    {
        $current_user = get_current_user_id();
        if (isset($_POST['startPayMent'])) {

            $pamentService = new pay();
            $amount = intval($_POST['paIt']);
            $callBackFn = home_url('/dashboard/wallet?action=verifyPament');

            global $wpdb;
            $table = $wpdb->prefix . 'TRANSTable';

            $data = array(
                'user_id' => $current_user,
                'amount' => $amount,
                'reserve' => intval(microtime(true)) . $current_user,
            );
            $trans = $wpdb->insert($table, $data);

            if (intval($trans > 0)) {
                session_start();
                $_SESSION['transId'] = $wpdb->insert_id;

                $pamentService->requestPayment([
                    'amount' => $amount,
                    'callBack' => $callBackFn,
                    'description' => sprintf('افزایش موجودی حساب کاربری به مبلغ $s', $amount)

                ]);

            }


        }
        view::load('panel.wallet.walletPardakht');



    }


    public function TransactionHandler()
    {

        view::load('panel.wallet.transaction');

    }

    public function verifyPament()
    {
        $pamentService = new pay();
        [$status, $result] = $pamentService->verifyPament();
        $current_user = get_current_user_id();
        $lastValue = (int) get_user_meta($current_user, 'walletUser', true);
        $newValue = (int) $_SESSION['AM'];

     
        global $wpdb;
        if ($status == 'true') {

            $wpdb->update(
                $wpdb->prefix . 'TRANSTable',

                array(
                    'ref_num' =>$result ,
                    'paid_at' => date('Y-m-d H:i:s'),
                    'status' => 1,
                ),

                array('id' => $_SESSION['transId']),

            );

            $updateValue = $lastValue + $newValue;
            update_user_meta($current_user, 'walletUser', $updateValue);

        }

        $toConvert = new toConvert();

        view::load('panel.wallet.verifyPament', compact('status', 'result'));


    }


}