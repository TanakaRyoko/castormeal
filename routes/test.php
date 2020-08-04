<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request('GET', 'http://www.ekmtc.com/CCIT100/searchContainerList.do?
hid_bl_no=&bk_no=&dt_knd=BL&own_yn=N&vsl_cd=&voy_no=&pod=&pol=&cntr_no=&hiddenKnd=&hiddenSearchNo=&
flag=&pus_no=&condition=BL&bl_no=KMTCMUN0188030');

echo $response->getBody();