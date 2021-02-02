<?php

$nums = [
    '1' => ['1', '2'], 
    '2' => ['3', '4'], 
    '3' => ['5', '6', '7']
];

echo $nums['2'][1] . '<br>';
echo $nums['3'][2] . '<br>';
echo $nums['3'][1] . '<br>';
echo $nums['3'][0] . '<br>';
echo $nums['1'][0] . '<br>';
echo $nums['2'][0] . '<br>';
echo $nums['1'][1] . '<br>';