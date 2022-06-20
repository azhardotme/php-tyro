<?php
#The addcslashes() function returns a string with backslashes in front of the specified characters.
$str = addcslashes("Hell Doniya","D");
echo ($str) ."<br>";
$str2 = "Welcome to Ubuntu!";
echo addcslashes($str2,'A..Z')."<br>";
echo addcslashes($str2,'a..z')."<br>";

#addslashes()
$str1 = addslashes('What does "you" mean?');
echo ($str1)."<br>";

#bin2hex()
$str = bin2hex("Hello Doniya!");
echo ($str) ."<br>";

#chop()
$str = "Padma Bridge!";
echo $str . "<br>";
echo chop($str,"Bridge!")."<br>";

echo "<br>";
$str2 = "Hello world!";
echo chunk_split($str2,2,".");
echo "<br>";
$str3 = "Hello World!";
echo count_chars($str3,3);
echo "<br>";
echo chr(54) . "<br>"; 
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));
echo "<br>";
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr);
echo "<br>";
$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr);
echo "<br>";
echo number_format("1000000")."<br>";
echo number_format("1000000",2)."<br>";
echo number_format("1000000",2,",",".");
echo "<br>";
/*
$number = 1234.56;
setlocale(LC_MONETARY,"bdt");
echo money_format("The price is %i", $number);
*/
echo str_replace("world","Peter","Hello world!");
echo "<br>";
echo str_word_count("Hello world!");
echo "<br>";
echo strcmp("Hello world!","Hello world!");
echo "<br>";
echo strlen("Pondit");
echo "<br>";
$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"Hed!");
echo "<br>";
echo ucfirst("hello world!");
echo "<br>";
echo ucwords("hello world");
echo "<br>";
echo substr_replace("Hello","world",0);