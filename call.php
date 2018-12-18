<?php include_once 'config/init.php';
include_once 'config/config.php';

require __DIR__ .'/vendor/autoload.php';
use Twilio\Rest\Client;

if(isset($_POST['submit'])){

    $account_sid = 'AC13c73f5034ff6efd77d6263c8f1d6cf2';
    $auth_token = '03cbcbd9c7b5bec15d6daf816fd4df49';

    $twilio_number = '+37052141627';

    $to_number = $_POST['phone'];

    $client = new Client($account_sid, $auth_token);
    if($client->account->calls->create(
        $to_number,
        $twilio_number,
        array(
            "url" => "http://demo.twilio.com/docs/voice.xml"
        )
    )){
        redirect('rate.php', 'Bandome skambinti!', 'success');
    } else {
        redirect('call.php', 'Something went wrong', 'error');
    }



}


$template = new Template('templates/callPage.php');

echo $template;
