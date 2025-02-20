<?php
/*
 Challenge 2: Get the sum of the numbers in an array by using a foreach loop and for loop. 
*/

//foreach loop
echo 'Challenge 2 <br>';
$numbers = [1, 2, 3, 4, 5]; 
$total = 0;

foreach($numbers as $number){
    $total += $number;
}

echo "Sum array using foreach loop <br>";
echo $total;



//for loop
$total2 = 0;
$numbers2 = [1, 2, 3, 4, 5,6,7,8,9,19];  
for($i = 0; $i < count($numbers2); $i++){
    $total2 += $numbers2[$i];
}

echo '<br/>';
echo "Sum array using for loop <br>";
echo $total2;


/* sample output
Sum array using foreach loop
15
Sum array using for loop
64

*/

?>