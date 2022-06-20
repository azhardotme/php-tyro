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
echo chop($str,"Bridge!");

#chr()--Return characters from different ASCII values.
echo char(52) . "<br>";
echo char('A') . "<br>";


