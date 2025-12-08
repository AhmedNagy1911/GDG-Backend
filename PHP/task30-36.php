<?php 
$a = 100;
$b = 200;
$c = 100;
if($a<$b && $a===$c && ($a+$c)===$b){
    echo "Yes";
}
echo '<br>';

$a = 100;
$b = 200;
$c = 300;
if($a>$b){
    echo "A Is Larger Than B";
}elseif($a>$c){
    echo "A Is Larger Than C";
}else{
    echo "A Is Not Larger Than B Or C";
}
$a = 30;
$b = 20;
$c = 10;
echo ($a + $b === $c) ? "A + B = C" : (($a + $c === $b) ? "A + C = B" : (($b + $c === $a) ? "B + C = A" : "The End"));


?>