<!DOCTYPE html>
<html>
<body>
<?php
function my_array_diff($a, $b) {
    $map = $out = array();
    foreach($a as $val) $map[$val] = 1;
    foreach($b as $val) if(isset($map[$val])) $map[$val] = 0;
    foreach($map as $val => $ok) if($ok) $out[] = $val;
    return $out;
}
$a = array("-3", "-2", "1", "4");
$b = array("0", "1", "2", "-3", "4");
echo "A-B=";
foreach(my_array_diff($a, $b) as $value)
{
echo ",". $value ;
}
echo "<br>";
echo "B-A=";
foreach(my_array_diff($b, $a) as $value)
{
echo ",". $value;
}
?>
</body>
</html>