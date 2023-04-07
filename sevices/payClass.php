<?php
class pay
{

    private $merchandId;

    private $client;

    public function __construct()
    {
        $this->merchandId = '7be19d86-dc93-11e9-b584-000c295ef8ff';

        $this->client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);


    }
    public function verifyPament()
    {
        session_start();

        $Authority = $_GET['Authority'];

        if ($_GET['Status'] == 'OK') {
            $result = $this->client->PaymentVerification([
                'MerchantID' => $this->merchandId,
                'Authority' => $Authority,
                'Amount' => $_SESSION['AM'],
            ]);

            if ($result->Status == 100) {

                return ['true', $result->RefID];

            } else {

                return ['false', $result->Status];

            }

        } else {

            return ['false', 'cancelsed by user'];
        }



    }



    public function requestPayment($params)
    {
        $amount = $params['amount'];
        $description = $params['description'];
        $callBack = $params['callBack'];

        $result = $this->client->PaymentRequest([
            'MerchantID' => $this->merchandId,
            'Amount' => $amount,
            'Description' => $description,
            'CallbackURL' => $callBack,
        ]);

        session_start();

        $_SESSION['AM'] = $amount;

  


        if ($result->Status == 100) {
            wp_redirect('https://sandbox.zarinpal.com/pg/StartPay/' . $result->Authority);
            exit;

        }

    }
}