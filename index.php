<?php
include_once 'config/init.php';
include_once 'config/config.php';?>

<?php
$results = new Result();

$template = new Template('templates/frontpage.php');
//$template->results = $results->getAllResults();
//$template->pagalba = $results->countPagalba();
//$template->kokybe = $results->countKokybe();
//$template->komun = $results->countKomun();


echo $template;
