<?php

$data = [
  [
    'price' => 900,
    'period' => 5,
    'error' => '',
  ],
  [
    'price' => 700,
    'period' => 3,
    'error' => '',
  ],
  [
    'price' => 0,
    'period' => 0,
    'error' => 'Несуществующий адрес',
  ], 
  [
    'price' => 750,
    'period' => 10,
    'error' => '',
  ],
  [
    'price' => 0,
    'period' => 0,
    'error' => 'Слишком большой вес груза',
  ],
  [
    'price' => 800,
    'period' => 7,
    'error' => '',
  ],
  [
    'price' => 0,
    'period' => 0,
    'error' => 'Что-то пошло не так',
  ],
  [
    'price' => 500,
    'period' => 4,
    'error' => '',
  ],
  [
    'price' => 550,
    'period' => 5,
    'error' => '',
  ],
];
echo json_encode($data[random_int(0, 7)], JSON_UNESCAPED_UNICODE);
