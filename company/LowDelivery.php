<?php
require_once(__DIR__ . '/Delivery.php');

class LowDelivery extends Delivery
{
  public function reformat($response)
  {
    $response->price = 150 * $response->coefficient;
    unset($response->coefficient);

    return $response;
  }
}