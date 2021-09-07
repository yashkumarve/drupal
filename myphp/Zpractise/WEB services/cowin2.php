<?php
$id=$_GET["name"];
$url="https://cdn-api.co-vin.in/api/v2/appointment/sessions/public/findByDistrict";
$webservice_url = $url.$id;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $webservice_url);
//curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1) ;

$response = curl_exec($ch);
$parse=json_decode($response);
formatStates($parse->states);
if(curl_errno($ch)) {
echo "Curl error:".curl_error($ch);
}
curl_close($ch);


function formatStates($states) {
    foreach($states as $row) {
    if( $stateid==$row->state_id){
        echo "<h2>Districts of $row->state_name</h2>";
        echo "<br/>";
    }
    }
}
?>