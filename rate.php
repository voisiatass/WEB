<?php
include_once 'config/init.php';
include_once 'config/config.php';

$result = new Result();

/*if(isset($_POST['submit'])){

    $data= array();
    $data['Komunikabilumas'] = $_POST['Komunikabilumas'];
    $data['RysioKokybe'] = $_POST['kokybe'];
    $data['Pagalba'] = $_POST['pagalba'];

    if($result->create($data)){
        redirect('index.php', 'Thank you for your time', 'success');
    } else {
        redirect('rate.php', 'Something went wrong', 'error');
    }


}*/
if(isset($_POST['submit'])) {
    redirect('index.php', 'Thank you for your time', 'success');
}

$template = new Template('templates/ratePage.php');

echo $template;




