<?php
$data = [
  [
    'coefficient' => 3.2,
    'date' => '2023-03-15',
    'error' => '',
  ],
  [
    'coefficient' => 4.8,
    'date' => '2023-03-18',
    'error' => '',
  ],
  [
    'coefficient' => 0,
    'date' => '',
    'error' => 'Что-то пошло не так',
  ],  [
    'coefficient' => 2.5,
    'date' => '2023-03-25',
    'error' => '',
  ],
  [
    'coefficient' => 0,
    'date' => '',
    'error' => 'Слишком большой вес груза',
  ],  [
    'coefficient' => 1.7,
    'date' => '2023-03-12',
    'error' => '',
  ],
  [
    'coefficient' => 7.1,
    'date' => '2023-03-17',
    'error' => '',
  ],
  [
    'coefficient' => 0,
    'date' => '',
    'error' => 'Несуществующий адрес',
  ],
];

echo json_encode($data[random_int(0, 7)], JSON_UNESCAPED_UNICODE);