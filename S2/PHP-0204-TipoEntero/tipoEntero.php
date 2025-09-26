<?php
$num = 12345678;
print $num."<br>";
$num = -12345678;
print $num."<br>";
$num = 0123456; //octal 0-7
print $num."<br>";
$num = 0xFFAADD; //hexadecimal 0-9 a-f
echo "Octal: " . decoct($num) . "<br>";
print $num."<br>";
$num = 0b1010101; //Binario 0-1
print $num."<br>";

$num = 2147483647;

print $num."<br>";

$num = 2147483648;
print $num."<br>";


$num = 2147483647*2;
print $num."<br>";

?>