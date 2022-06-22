<?php

$cars=array("Volvo","BMW","Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r(array_change_key_case($age,CASE_UPPER));
echo "<br>";
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,2));
echo "<br>";

// An array that represents a possible record set returned from a database
$a = array(
    array(
      'id' => 5698,
      'first_name' => 'Peter',
      'last_name' => 'Griffin',
    ),
    array(
      'id' => 4767,
      'first_name' => 'Ben',
      'last_name' => 'Smith',
    ),
    array(
      'id' => 3809,
      'first_name' => 'Joe',
      'last_name' => 'Doe',
    )
  );
  
  $last_names = array_column($a, 'last_name');
  print_r($last_names);

echo "<br>";
$fname=array("Azhar","Rafi","Sakib");
$age=array("24","25","26");

$c=array_combine($fname,$age);
print_r($c);
echo "<br>";
$a=array("Azhar","Sakib","Rafi","Azhar","Rafi");
print_r(array_count_values($a));
echo "<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);
echo "<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");

$result=array_diff_assoc($a1,$a2);
print_r($result);
echo "<br>";

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");

$result=array_diff_key($a1,$a2);
print_r($result);
echo "<br>";
function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("d"=>"red","b"=>"green","e"=>"blue");

$result=array_diff_uassoc($a1,$a2,"myfunction");
print_r($result);
echo "<br>";
$a1=array_fill(3,4,"blue");
print_r($a1);
echo "<br>";
$keys=array("a","b","c","d");
$a1=array_fill_keys($keys,"blue");
print_r($a1);
echo "<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c"=>"blue");

$result=array_intersect_assoc($a1,$a2);
print_r($result);
echo "<br>";
$a=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("Volvoo",$a))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }
echo "<br>";

$a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
print_r(array_keys($a));
echo "<br>";

function myfunction1($num)
{
  return($num+$num);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction1",$a));
echo "<br>";
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));
echo "<br>";
$a=array("Dog","Cat","Horse","Bear","Zebra");
array_multisort($a);
print_r($a);
echo "<br>";
$a=array("red","green");
print_r(array_pad($a,5,"blue"));
echo "<br>";
$a=array("red","green","blue");
array_pop($a);
print_r($a);
echo "<br>";
$a=array(5,5);
echo(array_product($a));
echo "<br>";
$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);
echo "<br>";
$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];
echo "<br>";