<?php

require 'src/config.php';
require 'vendor/autoload.php';


if ($security['status'] == 1) {
  if ( $_SERVER['REMOTE_ADDR'] != $security['ip'] || $_POST['apikey'] != $security['apikey']) {
    print 'Authentication failed';
    die();
  }
}

//load templating system
$templates = new League\Plates\Engine('src/template');
$template = new League\Plates\Template\Template($templates, 'tm1');



//fetch feed with required data, accepting JSON only
$cURL = curl_init();
  curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($cURL, CURLOPT_URL, $feed_url);
  curl_setopt($cURL, CURLOPT_FRESH_CONNECT, TRUE);
  curl_setopt($cURL, CURLOPT_HTTPGET, true);
  curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Accept: application/json'
  ));


  $headers = array(
    "Cache-Control: no-cache",
  );

  curl_setopt($cURL, CURLOPT_HTTPHEADER, $headers);
  $result = curl_exec($cURL);
  curl_close($cURL);

  $json = json_decode($result, true);



$result = $templates->render('profile', array('feed' => $json, 'meeting' => $meeting));

$dates = explode('.', $json['invitations'][0]['invitation']['event_date']);

file_put_contents('history/'.$dates[2].'_'.$dates[1].'_'.$dates[0].'.html', $result);
file_put_contents('index.html', $result);

print 'success';