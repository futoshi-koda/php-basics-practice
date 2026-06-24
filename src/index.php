<?php
// src/index.php
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>はじめてのPHP</title>
</head>
<body>
    <h1>PHPの世界へようこそ！</h1>
    <p>PHPを使って、動的なコンテンツを表示してみましょう。</p>
    <p>1 + 1 は、<?php echo 1 + 1; ?> です。</p>
    <p>現在の日時は、<?php echo date("Y年m月d日 H時i分s秒"); ?> です。</p>
    <p> <?php echo "Hello, World!";// この行は、画面に文字を出力します。?> </p>

<?php

// 文字列を直接出力
echo "Hello, PHP!";

echo '<p>HTMLタグも、そのまま出力できます。</p>';

// 数値や計算結果も出力可能
echo 123;
echo 10 + 5; // 結果の「15」が出力される
?>

<?php

echo "最初の文";
echo "次の文";// セミコロンを忘れると、エラーになる！

$today = "Monday";
echo $today;

?>
<p>
    <?php

// 変数 $name に、文字列 "山田太郎" を代入する
$name = "山田太郎";

// 変数 $age に、数値 30 を代入する
$age = 30;

// 変数の中身を echo で出力する
echo $name; // "山田太郎" が出力される
echo $age;  // "30" が出力される

// 変数の中身は、後から書き換えることができる
$age = 31;
echo $age; // "31" が出力される

  ?>
</p>
<p>
    <?php
// 配列の作成
$fruits = ['りんご', 'バナナ', 'みかん'];

// 配列の要素にアクセス（番号は0から始まる）
echo $fruits[0]; // "りんご" が出力される
echo $fruits[1]; // "バナナ" が出力される
echo $fruits[2]; // "みかん" が出力される

// 配列に要素を追加
$fruits[] = 'ぶどう'; // 末尾に追加される
echo $fruits[3]; // "ぶどう" が出力される
?>
</p>

<p>
<?php
// 連想配列の作成（キー => 値 の形式）
$scores = [
    '国語' => 80,
    '数学' => 95,
    '英語' => 72,
];

// キーを使って値にアクセス
echo $scores['国語']; // "80" が出力される
echo $scores['数学']; // "95" が出力される
echo $scores['英語']; // "72" が出力される

// 新しいキーと値を追加
$scores['理科'] = 88;
echo $scores['理科']; // "88" が出力される

?>
</p>
<p>
    <?php
    $last_name = '山田';
$first_name = '太郎';

// ピリオドで連結
$full_name = $last_name . $first_name;
echo $full_name; // "山田太郎" が出力される

echo '私の名前は、' . $full_name . 'です。';
?>
</p>
<p>
    <?php

// 偶数・奇数の判定
$number = 7;

if ($number % 2 == 0) {
    echo "$number は偶数です";
} else {
    echo "$number は奇数です";  // こちらが出力される
}

// 3の倍数かどうかの判定
$value = 15;

if ($value % 3 == 0) {
    echo "$value は3の倍数です";  // こちらが出力される
}
?>
</p>


</body>
</html>
