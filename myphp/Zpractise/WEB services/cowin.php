<h2>Enter your District Id Here </h2>
<form action="cowin2.php" method="get">
District Id <input type="text" id="name" name="name"><br>
<input type="submit">
</form>

</body>
</html>


<!--states-->
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
    $stateid=$_GET["name"];
    foreach($states as $row) {
    if( $stateid==$row->state_id){
        echo "<h2>Districts of $row->state_name</h2>";
        echo "<br/>";
    }
    }
}


$id=$_GET["name"];

$url="https://cdn-api.co-vin.in/api/v2/admin/location/districts/";
$webservice_url = $url.$id;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $webservice_url);
//curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1) ;

$response = curl_exec($ch);
$parse=json_decode($response);
formatDistricts($parse->districts);
if(curl_errno($ch)) {
echo "Curl error:".curl_error($ch);
}
curl_close($ch);

function formatDistricts($districts) {
//print_r($districts);
foreach($districts as $row) {
echo $row->district_id."   ".$row->district_name;
echo "<br/>";
}
}
?>