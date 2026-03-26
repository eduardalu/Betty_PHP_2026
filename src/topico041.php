<?php
$a=10; //a = 10
$b=2; //b = 2
$a+=$b; //$a + $b //$a = 10 + 2//$a = 12
$b-=5; //$b - 5//$b = -3
echo "a = ".$a; //$a = 12
echo "<br>b = ".$b; //$b = -3
$c=11;
$d=6;
$c%=$d;
$d+=$a;
echo "<br>c = ".$c;
echo "<br>d = ".$d;
echo "<br>";
$n= "cinco";
$n.=$c;
echo "<br>n = ".$n; 
?>

<hr>
<?php
$x = 100;
echo "x = ".++$x; //x =
echo "<br>x final = ".$x; //x final =
echo "<hr>";
$i = 10;
echo "<br>i = $i";

//$i++;
//$i++;
//++$i;
$i +=3;

echo "<br>i = $i";
$i--;
--$i;
echo "<br>i = $i";