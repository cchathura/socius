<?PHP
$string_val = 'a b ubunutu unix';

$parts = explode(' ', $string_val);

#print_r($parts);
foreach ($parts as $tag){
echo $tag;
}


echo "<\br>";
$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
var_dump($array);

echo $data;

?>
