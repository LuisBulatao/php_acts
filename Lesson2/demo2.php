<?php

// Array Functions


$ids = [10, 22, 15, 45, 67, 33];
$users = ['user2', 'user1', 'user3'];

// The count() function returns the number of elements in array

echo '<pre>';
var_dump(count($users));
echo '</pre>';

// The sort() function sorts on indexed array in ascending order
sort($users); 

echo '<pre>';
var_dump(sort($ids));
var_dump($users);

echo '</pre>';

// The sort() function sorts on indexed array in ascending order

rsort($ids);
rsort($users);

echo '<pre>';
    // var_dump($ids);
echo '</pre>';


// array_push The array_push() function inserts one or more elements to 
array_push($ids, 100);
array_push($users, 'user4');

echo '<pre>';
    // var_dump($users);
echo '</pre>';

array_pop($ids);
array_pop($users);

echo '<pre>';
    // var_dump($users);
echo '</pre>';


array_shift($ids);
array_shift($users);

echo '<pre>';
    // var_dump($users);
echo '</pre>';


$ids = [10, 22, 15, 45, 67, 33];
$users = ['user2', 'user1', 'user3'];

array_unshift($ids, 200);
array_unshift($users , 'user5');

echo '<pre>';
    // var_dump($ids);
echo '</pre>';


$ids = [10, 22, 15, 45, 67, 33];
$users = ['user2', 'user1', 'user3'];

$ids2 = array_slice($ids, 2, 4);

echo '<pre>';
    // var_dump($ids2);
echo '</pre>';

$output =  'Sum of IDs ' . array_sum($ids);
// echo $output;

$output =  'User 1 is at index: ' . array_search('user1', $users);
echo $output;

$tags = 'tech,code,programming';

$tagsArr = explode(',', $tags);
var_dump($tagsArr);

echo '<pre>';
    // var_dump($tagsArr);
echo '</pre>';

$output = implode(',', $users);

echo $output;


