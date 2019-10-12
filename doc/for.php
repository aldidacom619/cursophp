<?php
$num = 20;

$a[0] = 1;
$a[1] = 3;
$a[2] = 5;

var_dump(count($a));

for($i = 1; $i <= $num; $i++)
{
	echo $i."<br>";
}

for($i = 0; $i < count($a); $i++)
{
	echo $a[$i]."<br>";
}
?>