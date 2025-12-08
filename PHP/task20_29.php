<?php 
//1--------------------------
$a = "10";
echo $a;
echo '<br>';
echo gettype((int)$a);
echo '<br>';
$b =$a +0;
echo $b;
echo '<br>';
echo gettype($b);
$b =$a *1;
echo '<br>';
echo $b;
echo '<br>';
echo gettype($b);
//2-------------------------
$a = 10;
$b = 20;
  
echo '<br>';
echo $a <=> $b;
echo '<br>';
//3-------------------
$a = 10;
$b = 20;
$c = 15;

var_dump($a <=> $b); // True
var_dump($c <=> $a); // True
var_dump($a <=> $b); // True
var_dump($a <=> $b); // True
var_dump($a <=> $c); // True
var_dump($a <=> $c); // True
var_dump(gettype($a) <=> gettype($b)); // True
var_dump(gettype($a) <=> gettype($b)); // True
var_dump(gettype((float) $a) <=> gettype($b)); // True
//--------4---------------------------
echo '<br>';

$points = 10;
$points++;
$points++;
$points++;
echo $points; // 13
echo '<br>';
$points--;
$points--;
$points--;
$points--;
$points--;
echo $points; // 8;
echo '<br>';
//5-------------------------------------
$a = "Elzero";
$b = "Web";
$c = "School";
//1
$d = $a . " " . $b . " " . $c;
//2
$d = ($a . " ") . ($b . " ") . $c;
echo $d;

?>