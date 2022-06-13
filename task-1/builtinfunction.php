<?php
echo "<h2>PHP Built in functions!</h2><br>";

#boolval()
echo '0:    ' . (boolval(0)  ? 'true' : 'false') . "<br>";
echo '1:    ' . (boolval(1)  ? 'true' : 'false') . "<br>";
echo '0.0:    ' . (boolval(0.0)  ? 'true' : 'false') . "<br>";
echo '"Hello": ' . (boolval("Hello") ? 'true' : 'false') . "<br>";

#debug_zval_dump()
$x = "Hello World!";
echo debug_zval_dump($x) . "<br>";

#doubleval()
$x = "123.2321";
echo doubleval($x) . "<br>";

$y = "234.3232Hello";
echo doubleval($y) . "<br>";

$z = "Hello154.3232";
echo doubleval($z) . "<br>";

#empty()
$x = 0;
if (empty($x)) {
    echo "Variable 'x' is empty.<br>";
}
#isset()
if (isset($x)) {
    echo "Variable 'x' is set.<br>";
}

#floatval()
$a = "12123.2321";
echo floatval($a) . "<br>";

$b = "3232.433Hello";
echo floatval($b) . "<br>";

#get_debug_type() --Gets the type name of a variable in a way that is suitable for debugging
echo get_debug_type(null) . "<br>";
echo get_debug_type(0) . "<br>";
echo get_debug_type(1) . "<br>";
echo get_debug_type("HEllo") . "<br>";
echo get_debug_type(2.3) . "<br>";
echo get_debug_type("") . "<br>";
echo get_debug_type([]) . "<br>";

#get_defined_vars — Returns an array of all defined variables 
$x = array("red", "green", "blue");
$arr = get_defined_vars();
print_r($arr["x"]);

#get_resource_id — Returns an integer identifier for the given resource 
$x = fopen('test.txt', 'rb');
echo get_resource_id($x) . "<br>";

#gettype - Return the type of different variables
$x1 = 6;
echo gettype($x1) . "<br>";
$x2 = 6.5;
echo gettype($x2) . "<br>";
$x3 = "Pondit";
echo gettype($x3) . "<br>";
$x4 = array();
echo gettype($x4) . "<br>";
$x5 = array("BMW", "Volvo", "Corolla");
echo gettype($x5) . "<br>";
$x6 = null;
echo gettype($x6) . "<br>";
$x7 = true;
echo gettype($x7) . "<br>";

#intval
echo intval(5.6) . "<br>";
echo intval(+56) . "<br>";
echo intval(-56) . "<br>";
echo intval(true) . "<br>";

#is_array()
$a1 = "Hello";
echo "a is " . is_array($a1) . "<br>";
$a2 = array("egg", "potato");
echo "a2 is " . is_array($a2) . "<br>";

#is_bool()
$a = 1;
echo "a is " . is_bool($a) . "<br>";
$a = true;
echo "a is " . is_bool($a) . "<br>";

#is_callable()
function test1()
{
}
echo "test1 is callable: " . is_callable("test1") . "<br>";
echo "test2 is callable: " . is_callable("test2") . "<br>";

#is_countable()
$x = "Hello";
echo "x is " . is_countable($x) . "<br>";

#is_double
$a = 23;
echo "a is " . is_double($a) . "<br>";
$a1 = 33.2;
echo "a1 is " . is_double($a1) . "<br>";
$a1 = false;
echo "a1 is " . is_double($a1) . "<br>";

#is_float
$a1 = 33.2;
echo "a1 is " . is_float($a1) . "<br>";
$a1 = 'abc';
echo "a1 is " . is_float($a1) . "<br>";

#is_int
$a1 = 33.2;
echo "a1 is " . is_int($a1) . "<br>";
$a1 = 33;
echo "a1 is " . is_int($a1) . "<br>";

#is_iterable
$it = "Hello";
echo "it is  " . is_iterable($it) . "<br>";
$it1 = [1, 2, 3];
echo "it1 is  " . is_iterable($it1) . "<br>";

#is_long()
$a = 33;
echo "a is " . is_long($a) . "<br>";
$a5 = 33.5;
echo "a5 is " . is_long($a5) . "<br>";
$e = true;
echo "e is " . is_long($e) . "<br>";
$cc = 0;
echo "cc is " . is_long($cc) . "<br>";

#is_null()
$p = 0;
echo "p is " . is_null($p) . "<br>";
$p1 = null;
echo "p1 is " . is_null($p1) . "<br>";
$p2 = NULL;
echo "p2 is " . is_null($p2) . "<br>";
$p2 = "NULL";
echo "p2 is " . is_null($p2) . "<br>";

#is_numeric()
$n = 23;
echo " n is " . is_numeric($n) . "<br>";
$n1 = 23.6;
echo " n1 is " . is_numeric($n1) . "<br>";
$n2 = null;
echo " n2 is " . is_numeric($n2) . "<br>";
$n3 = true;
echo " n3 is " . is_numeric($n3) . "<br>";

#print_r()
$arr = array("red", "green", "blue");
print_r($arr) . "<br>";

#var_dump()
$z = 44;
echo var_dump($z) . "<br>";
$z1 = 1.4;
echo var_dump($z1) . "<br>";
$z2 = "Good Bye";
echo var_dump($z2) . "<br>";
