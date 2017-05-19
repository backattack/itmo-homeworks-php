<?

// Отсортировать массив по 'price'

$arr = [
'1'=> [
       'price' => 10,
        'count' => 2
        ],
    
'2'=> [
        'price' => 5,
        'count' => 5
        ],
    
'3'=> [
        'price' => 8,
        'count' => 5
        ],
    
'4'=> [
        'price' => 12,
       'count' => 4
     ],
    
'5'=> [
        'price' => 7,
        'count' => 4
        ],
];


foreach ($arr as $val => $key): $price[] = $key['price'];
endforeach;
array_multisort($price, SORT_ASC, $arr);
var_dump($price);