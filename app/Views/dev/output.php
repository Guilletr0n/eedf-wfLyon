<?php
var_dump($user);
$inputs = array(
                  $user,
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
