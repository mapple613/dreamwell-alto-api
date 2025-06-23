<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$username = "DreamW052BHxml";
$password = "hZRGf0B0N2G9mOy";
$datafeedID = "DreamwellAPI";

$url = "https://api.alto.vebra.com/export/$datafeedID/v10/property";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Accept: application/json"]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if (curl_errno($ch)) {
    echo "CURL error: " . curl_error($ch);
} else {
    header('Content-Type: application/json');
    echo $response;
}

curl_close($ch);
?>
