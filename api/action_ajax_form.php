<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
include 'Api.php';

if(isset($_POST) && !empty($_POST))
{
   // $city = ['city' => $_POST['city']];
    $city =  $_POST['city'];
    $getCityData = new Api();
    $getCityData->getCity($city);

    //echo json_encode(['city'=>$response]);


}