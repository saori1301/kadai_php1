<?php

// ファイルを開く
$file=fopen('data/data.txt','r');

// ファイル内容を1行ずつ読み込んで出力 while=データの数だけ処理を繰り返す
while($str=fgets($file)){
    echo nl2br($str);
}

// ファイルを閉じる
fclose($file);


?>