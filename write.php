<?php


// inputフォームから送られたデータを受け取る
$name=$_POST['name'];
$mail=$_POST['mail'];
$phone = $_POST['phone'];
$address = $_POST['address'];

// 日付を取得
$time=date("Y-m-d H:i:s");




// データを一覧表に
$str =  '<tr>' . 
        '<td>' . $time . '</td>' . 
        '<td>' . $name . '</td>' .
        '<td>' . $mail . '</td>' . 
        '<td>' . $phone . '</td>' .
        '<td>' . $address . '</td>' .
        '</tr>';


// File開く
$file=fopen('data/data.txt','a'); 
// Fileへの書き込み
fwrite($file,$str."\n");
// File閉じる
fclose($file);




?>


<html>
<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>
<body>

<table border="2" style="border-collapse: collapse; border-color: blue">
    <tr>
        <th>送信日時</th>
        <th>名前</th>
        <th>メールアドレス</th>
        <th>電話番号</th>
        <th>住所</th>
    </tr>
    <?php
    $file=fopen('data/data.txt','r');
    while ($data = fgets($file)) {
        echo $data;
    };
    ?>
</table>
<ul>
    <li><a href="index.php">目次画面に戻る</a></li>
</ul>

</body>
</html>