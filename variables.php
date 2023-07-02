<?php

$odd = 1;
$whatever = &$odd;

$whatever = "I like $whatever\n";

// echo $whatever;
// echo $odd;

/*これの出力結果は
I like 1I like 1 となり、$oddの内容も変更された。
*/


/*PHPには定義済みの変数がある。詳細はこちら https://www.php.net/manual/ja/reserved.variables.php
以下はスーパーグローバル変数
$GLOBALS
$_SERVER
$_GET
$_POST
$_FILES
$_COOKIE
$_SESSION
$_REQUEST
$_ENV
*/


//変数のスコープについて
$name = "mikan"; //$nameはグローバルスコープ

function ageCount(){

  global $name; //グローバルスコープの関数を用いる時は、ローカルスコープ内で定義してあげる

  $age = 13;
  // echo "$name is $age years old";
}

//static変数について
//static変数とは、再帰関数を実現する時に用いられる
function countUp(){

  static $count = 0;

    $count++;
    // echo $count;
    if ($count < 10) {
        countUp();
    }
    $count--;

}

//可変変数: 変数名を動的にセットして使用できる。
//これは一般的なもの。aという変数に、文字型のhelloという文字が入っている。
$a = 'hello';

//$aの前に$を1つ追加すると、元々aに入っていたhelloという文字列が変数名に変わる。
//つまり、下の$$aというのは、$helloと同義である。
$$a = 'world';

// hello worldと出力されるはず
// echo "$a {$$a}\n";
// echo "$$a $hello";

?>