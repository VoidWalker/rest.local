<?php

class Api
{
    private $_apiPath = "http://ride-for-life.local/api/";

    public function sendRequest($targetPath, $content)
    {
        $content = json_encode($content);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->_apiPath . $targetPath);
        //curl_setopt($curl, CURLOPT_HEADER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
            array("Content-type: application/json"));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $content);
        $result = curl_exec($curl);
        curl_close($curl);
    }
}

$api = new Api();
$api->sendRequest("get", array());

