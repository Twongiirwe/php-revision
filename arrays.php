<?php
$score = array(10, 20, 30, 40, 50);
echo $score[0] . PHP_EOL;


//removing an element from an array
$fruits = array("apple", "banana", "orange", "grape");
unset($fruits[1]);
print_r($fruits);


$age = [10, 20, 30, 40, 50];
unset($age[3]);
print_r($age);

//getting size of an array
$fruits = array("apple", "banana", "orange", "grape");
echo count($fruits) . PHP_EOL;

//accessing array elements using foreach loop
$fruits = array("apple", "banana", "orange", "grape");
foreach ($fruits as $fruit) {
    echo $fruit . PHP_EOL;
}


//associative arrays
$person = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York"
);
echo $person["name"] . PHP_EOL;


 //array_shift() - prepending an element to an array
$fruits = array("apple", "banana", "orange");
array_unshift($fruits, "grape");
print_r($fruits);

$fruits = array("apple", "banana", "orange");
array_shift($fruits);
print_r($fruits);



//in_array()

$students = [
    'John',
    'Jane',
];

$result = in_array('John', $students);

$return = in_array('Alice', $students);

var_dump($return);



//array_reverse()
$numbers = [1, 2, 3, 4, 5];
$reverse = array_reverse($numbers);
print_r($reverse);

print_r($numbers);
