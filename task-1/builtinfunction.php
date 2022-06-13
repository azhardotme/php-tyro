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
