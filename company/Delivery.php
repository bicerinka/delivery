<?php
require_once(__DIR__ . '/../request/Curl.php');

abstract class Delivery
{
  public function __construct($json, $type)
  {
    $this->json = $json;
    $this->type = $type;
  }

  public function get(array $params)
  {
    $url = $_SERVER['SERVER_ADDR'] . $this->json[0]['base_url'] . '/' . $this->type . '.php';
    $request = new Curl();
    return $request->getData($url, $params);
  }

  public function view($price)
  {
    $result = [
      'price' => $price->price,
      'date' => $price->date,
      'error' => $price->error,
    ];
    return json_encode($result, JSON_UNESCAPED_UNICODE);
  }

  abstract function reformat($response);

  /**
   * Подготовка параметров для отправки
   */
  public function prepare($params)
  {
    return $params;
  }

  public function template(): array
  {
    $result = [];
    foreach ($this->json as $j) {
      $params = $this->prepare($j);
      $response = $this->get($params);
      $price = $this->reformat($response);
      $result[] = $this->view($price);
    }
    return $result;
  }
}