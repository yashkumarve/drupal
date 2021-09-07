<h1>Give State Id here</h1>
<html>
<body>

<form action="cowin.php" method="get">
State Id: <input type="text" id="name" name="name"><br>
<input type="submit">
</form>

</body>
</html>
<?php
$url="https://cdn-api.co-vin.in/api/v2/admin/location/states";
$webservice_url = $url;
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
    //print_r($districts);
    foreach($states as $row) {
    echo "$row->state_id"."  "."$row->state_name";
    echo "<br/>";
    }
}
?>