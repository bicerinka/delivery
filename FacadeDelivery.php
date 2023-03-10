<?php
require_once(__DIR__ . '/company/LowDelivery.php');
require_once(__DIR__ . '/company/SpeedDelivery.php');
class FacadeDelivery
{
  const LOW_DELIVERY = 'low';
  const SPEED_DELIVERY = 'speed';
  const ALL_DELIVERY = [self::LOW_DELIVERY, self::SPEED_DELIVERY];

  public function __construct($json, array $type = self::ALL_DELIVERY)
  {
    foreach ($type as $t) {
      $delivery = ucfirst($t) . 'Delivery';
      $this->$t = new $delivery($json, $t);
    }
  }

  public function get(): array
  {
    $result = [];
    foreach (self::ALL_DELIVERY as $t) {
      if ($this->$t) {
        $result[$t] = $this->$t->template();
      }
    }

    return $result;
  }

}