<?php

// ||はorよりも優先度が高い。以下は、$a = (false || true) と同じ
$a = false || true;
echo $a;

$b = true && false;
echo $b;

$c = false && true;
echo $c;

?>