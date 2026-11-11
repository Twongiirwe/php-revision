<?php


//parametless functions
 function greet(){
    echo "Hello, World!". PHP_EOL;
}

function age($age){
    echo "I am $age years old". PHP_EOL;
} 

function country($country = "USA"){
    echo "I am from $country". PHP_EOL;
}

//named arguments

function getNames($susanAddress, $rinahAddress){
    echo "Susan lives at $susanAddress and Rinah lives at $rinahAddress". PHP_EOL;
}

country("Uganda");


greet();

age(25);

getNames("Ibanda", "kabale");
//named arguments
getNames(rinahAddress: "Kabale", susanAddress: "Ibanda");


