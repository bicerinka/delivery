<?php
require_once(__DIR__ . '/Delivery.php');

class SpeedDelivery extends Delivery
{
  public function reformat($response)
  {
    $date = new DateTime();
    $days = $date->format('H') >= 18 ? $response->period + 1 : $response->period;
    $date->modify("+$days days");
    $response->date = !$response->error ? $date->format('Y-m-d') : "";
    unset($response->period);

    return $response;
  }

}