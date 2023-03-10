<?php
require_once(__DIR__ . '/Request.php');

class Curl implements Request
{
  public function getData($url, $params)
  {
    $request = json_encode($params, JSON_UNESCAPED_UNICODE);
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_ENCODING ,"");
    curl_setopt($ch, CURLOPT_POSTFIELDS, "request=$request");
    curl_setopt($ch,CURLOPT_HTTPHEADER, array("Accept-Charset: UTF-8"));
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response);
  }

}

