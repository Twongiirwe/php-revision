<?php

//multidimensional arrays
$students = [
    ["John", 20, "A"],
    ["Jane", 22, "B"],
    ["Bob", 21, "C"]
];

print_r($students);

// removing an element from a multidimensional array
unset($students[1]);
print_r($students);


//accessing elements in a multidimensional array
$students = [
    ["John", 20, "A"],
    ["Jane", 22, "B"],
    ["Bob", 21, "C"]
];
foreach ($students as $student) {
    foreach ($student as $studentinfo) {
        echo $studentinfo . PHP_EOL;
    }
}

//prepending an element to a multidimensional array
$students = [
    ["John", 20, "A"],
    ["Jane", 22, "B"],
    ["Bob", 21, "C"]
];
array_unshift($students, ["Alice", 19, "A"]);
print_r($students);

//array_push() 
$numbers = [2, 4, 6];
array_push($numbers, 8, 10);
print_r($numbers);

//