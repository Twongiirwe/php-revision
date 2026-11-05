
<?php
$name = "Susan";
$age = 23;
$home = "Ibanda";

echo $name . PHP_EOL;
echo $age . PHP_EOL;
echo $home . PHP_EOL;




//is_int() function returns true if a value (or variable) is an integer.
$amount = 1000;
echo is_int($amount) . PHP_EOL;



$total = 0.1 + 0.1 + 0.1;
echo $total == 0.3; // returns false because of floating point precision issues


//php string
$name = 'Susan';
echo 'hello ' . $name . PHP_EOL;

// using double quotes
$name = "Sue";
echo "hello $name" . PHP_EOL; 


//length of string
$title = "PHP is awesome";
echo strlen($title) . PHP_EOL;


$he = 'Bob';
$her = 'Alice';
echo $he . ' and ' . $her . ' are friends' . PHP_EOL;





$str = <<<IDENTIFIER
    invalid
    IDENTIFIER;

echo $str . PHP_EOL;





$title = 'My site';

$header = <<<HEADER
<header>
    <h1>$title</h1>
</header>
HEADER;

echo $header . PHP_EOL;

//Null
$email = null;
var_dump($email); // NULL 

//PHP NULL and case sensitivity
$email = null;
$fname = null;
$lname = null;

// int operator casting float to int

echo (int)12.5 . PHP_EOL; // 12
echo (int)12.1 . PHP_EOL; // 12
echo (int)-12.9 . PHP_EOL; // -12


$massage = 'Hi';
$num = (int) $massage;
echo $num . PHP_EOL; // 0


//additon operator
$x = 10;
$y = 20;
$z = $x + $y;
echo $z . PHP_EOL; 


$x = 10;
$y = 0.2;
$z = $x + $y;
echo $z . PHP_EOL;

$x = 0.1 + 0.2 + 0.3;
echo $x . PHP_EOL; 


$x = 10 + '2';
echo $x . PHP_EOL; 


//subtraction operator
$x = 10;
$y = 5;
$z = $x - $y;
echo $z . PHP_EOL;

//multiplication operator
$x = 10;
$y = 5;
$z = $x * $y;
echo $z . PHP_EOL;

//division operator
$x = 10;
$y = 5;
$z = $x / $y;
echo $z . PHP_EOL;

//modulus operator
$x = 10;
$y = 3;
$z = $x % $y;
echo $z . PHP_EOL;

//exponentiation operator
$x = 2;
$y = 3;
$z = $x ** $y;
echo $z . PHP_EOL; 



// . concatenation operator
$firstName = 'Susan';
$lastName = 'Nabukenya';
$fullName = $firstName . ' ' . $lastName;
echo $fullName . PHP_EOL;

// == comparison operator
$x = 10;
$y = '10';
echo ($x == $y) . PHP_EOL;

// != comparison operator
$x = 20;
$y = 10;

var_dump($x != $y) . PHP_EOL;



//and operator
$price = 100;
$qty = 5;
$discounted = $discounted = $qty > 3 && $price > 99;
var_dump($discounted) . PHP_EOL;

$price = 100;
$qty = 2;
$discounted = $discounted = $qty > 3 && $price > 99;
var_dump($discounted) . PHP_EOL;


//or operator
$price = 100;
$qty = 5;
$discounted = $qty > 3 || $price > 99;
var_dump($discounted) . PHP_EOL;


//not operator
$priority = 'high';
var_dump(!($priority == 'high')) . PHP_EOL;


//if statement
$is_admin = true;
if ($is_admin) {
    echo 'You are an admin' . PHP_EOL;
}


$can_edit = false;
$is_admin = true;

if ( $is_admin ) {
   echo 'Welcome, admin!'. PHP_EOL;
   $can_edit = true;
}

//if nested statement
$is_admin = true;
$can_approve = true;
if ($is_admin) {
    echo 'Welcome, admin!';
    if ($can_approve) {
        echo 'Please approve the pending items.' . PHP_EOL;
    }
}




//if else statement
$x = 10;
$y = 20;
if ($x > $y) {
    echo '$x is greater than $y' . PHP_EOL;
} else if ($x < $y) {
    echo '$x is less than $y' . PHP_EOL;
} else {
    echo '$x is equal to $y' . PHP_EOL;
}



//switch statement
$role = 'subscriber';
$message = '';

if ('admin' === $role) {
	$message = 'Welcome, admin!';
} elseif ('editor' === $role) {
	$message = 'Welcome! You have some pending articles to edit';
} elseif ('author' === $role) {
	$message = 'Welcome! Do you want to publish the draft article?';
} elseif ('subscriber' === $role) {
	$message = 'Welcome! Check out some new articles.';
} else {
	$message = 'Sorry! You are not authorized to access this page';
}

echo $message . PHP_EOL;




//foreach statement
$fruits = ['apple', 'banana', 'orange'];
foreach ($fruits as $fruit) {
    echo $fruit . PHP_EOL;
}


$capitals = [
	'Japan' => 'Tokyo',
	'France' => 'Paris',
	'Germany' => 'Berlin',
	'United Kingdom' => 'London',
	'United States' => 'Washington D.C.'
];

foreach ($capitals as $country => $capital) {
	echo "The capital city of $country is $capital" . PHP_EOL;
}


//function
function welcome_user($username)
{
	echo 'Welcome ' . $username . PHP_EOL;
}

welcome_user('Guest');



//function parameters
$counter = 1;
function increment_counter($counter)
{
	$counter++;
	return $counter;
}
echo increment_counter($counter) . PHP_EOL; 



