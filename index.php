<?php

$str = '';

$arr = array('か', 'ず', 'き', 'ち');

$num = 10;

if($num < 20){

  $str = 'うぇぶかつ';

}

for( $i = 0; $i < 2; $i++){

  $str = $str . $arr[$i];

}

function combine($str){

  $str = 'じぇーえす';

  return $str . 'ぴーえいちぴー';

}

combine($str);

echo $str;

?>
