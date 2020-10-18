<?
$num = 50;
for ($i = 1; $i <= $num; $i++) {
    if ($i % 2 == 1){
    echo "Нечетные: " . $i . '<br>';
    }
}
$arr = array(5 => 1, 12 => 2);
$arr[]= 56;
$arr['x']= 10;

$a[] = 2;
$a['foo'] = 'rrr';
unset($arr[5]);
var_dump($a);
echo gettype($a);