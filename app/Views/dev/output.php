<?php

$inputs = array(
                  $email,
                  $result,
                  $url
                );

foreach ($inputs as $key => $value) {
  if(isset($value)){
    print '<p>'.$key.'</p>';
    dumpOut($value);
  }
}


function showOutput($text){
  print '<p>'.$text.'</p>';
}

function dumpOut($var){
  print '<p>';
  var_dump($var);
  print '</p>';
}

?>
