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

echo "<hr>";
$a = 4;
$b = 7;
$a+= $b;

$b%=4;

echo "a=$a, b=$b";

echo "<hr>";

$a=5;
$b=2;
$c=$a + $b;
$b=3;


$d= $c % $b;
$a+=$b;

echo "$c $b $d";

echo "<hr>";

$a=5;
$b=2;
$c=$a+$b;

$b+=2;

$d=$c%$b;
$a+=$b;
echo "$a $b $c $d";

echo "<hr>";

$y=2;
$z=3;
$x = $y + $z % $y;

echo "x = $x";

echo "<hr>";

$a=10; $b=20; $c=30; $d=40;

$a+=50;

$e=($a<$b)&&($c<$d);
$f=!($a<$b)||!($c<$d);
$g=!($a<$b)&&($c<$d);
$h=!($a<$b)||($c<$d);


echo "A F é: $f <br>";
echo "A G é: $g <br>";
echo "A H é: $h <br>";

echo "<hr>";

$y=2;
$z=3;

$x = ($y + $z)% $y;

echo "x = $x";


$a=10; $b=20; $c=30; $d=40;

$c+=50;

$e=($a<$b)&&($c<$d);
$f=!($a<$b)||!($c<$d);
$g=!($a<$b)&&($c<$d);
$h=!($a<$b)||($c<$d);

echo "$e $g $h";













?>
