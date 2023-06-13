<?php

//boolean型の練習
$tea = 'greentea';
if($tea == 'greentea'){
  //改行の\nは""の中に入れる
  echo "You like ". $tea. "!\n";
  //変数の後ろに改行を入れたい場合は、変数の後ろに"\n"を入れる。
  echo "Daniel\n"."like\n".$tea."\n"."!\n";
}

$is_tea = false;

if($is_tea){
  echo "You like ". $tea. " !";
}
else{
  echo "You do not prefer ". $tea. "!";
}
?>