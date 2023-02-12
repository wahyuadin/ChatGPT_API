<?php

// POST
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.fonnte.com/send',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array(
'target' => '085711115140',
'message' => 'Semangat Sayangkuu taniaa!!!',
),
  CURLOPT_HTTPHEADER => array(
    'Authorization: SaIXwu_JTki18Dx8nUY5'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>