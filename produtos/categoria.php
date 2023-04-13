<?php include('../config/database_config.php');?>
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.mercadolibre.com/sites/MLB/categories/all',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer '.$access_token,
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);



$resultado = json_decode($response);


foreach ($resultado as $listagem_categorias) {
    echo $listagem_categorias->id.' - '.$listagem_categorias->name.'<br>';
}

curl_close($curl);

?>








