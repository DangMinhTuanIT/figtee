<?php 
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://figtee.com/insert-product/?tuandm=tuan74123",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,

  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Cookie: PHPSESSID=k7tkrm53ohkpdldigdt63khhc1"
  ),
));
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($curl);
curl_close($curl);
