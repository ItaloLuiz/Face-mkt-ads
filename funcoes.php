<?php 
require 'config.php';

function Get_id_account($token){
    $url = 'https://graph.facebook.com/v3.0/me/adaccounts?access_token='.$token.'';
    /*$post = [
        '' => '',
        '' => '',
        ''   => 1,
    ];*/
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, http_build;_query($post));
    $response = curl_exec($ch); 
    return $response;

}

echo Get_id_account($access_token);