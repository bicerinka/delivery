<?php
require_once(__DIR__ . '/FacadeDelivery.php');

$request = [
  [
    'base_url' => '/api',
    'sourceKladr' => 'Москва',
    'targetKladr' => 'Воронеж',
    'weight' => '2',
  ],
  [
    'base_url' => '/api',
    'sourceKladr' => 'Москва',
    'targetKladr' => 'Пермь',
    'weight' => '5',
  ]
];

$delivery = new FacadeDelivery($request, ['low', 'speed']);
$response = $delivery->get();
echo '<pre>';
print_r($response);
echo '</pre>';