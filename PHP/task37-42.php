<?php 
$index = 10;
for(;$index>0;$index--){
    echo "{$index} " ."<br>";
}
echo "<br>";
echo "<br>";
$index = 0;
while ($index < 20) {
    $index++;
    if ($index % 2 === 0) {
        echo $index . "<br>";
    }
}
echo "<br>";
$start = 10;
$end = 0;
$stop = 3;
for ($i = $start; $i >= $stop; $i = $i - ($start / $start)) {
    echo ($i < $start ? '0' : '') . $i . "<br>";
}
echo "<br>";
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];
for ($i = $start; $i < count($mix); $i++){
    if(is_int($mix[$i]) && $mix[$i] > $mix[$start]){
        echo $mix[$i] . "<br>";
    }
}

?>