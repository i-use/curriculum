<?php
$num = 0;
while($num < 10) {
    echo $num;
    $num++;
}
echo "<br>";

$num = 0;
do {
    echo $num;
    $num++;
} while($num < 10);

echo "<br>";
$num = 0;
while($num < 10) {
    echo $num;
    $num++;
    if($num == 5) {
        break;
    }
}

echo "<br>";
$num = 0;
while($num < 101) {
    echo $num;
    echo "<br>";
    $num++;
    if($num == 101) {
        break;
    }

}



echo "<br>";
echo "<br>";

echo "【サブクエリ】";
echo "<br>";
echo "データベースなどの問合せ（クエリ）分の内部に含まれる、別の問い合わせ文のこと。サブクエリの結果を反映したクエリを実行することができる。";
echo "<br>";
echo "SQL文を入れ子にする（SQL文の結果を使ったSQL文にする）こと。";
echo "<br>";
echo "<br>";

echo "【Bootstrap】";
echo "<br>";
echo "CSSのフレームワーク。よく使われるスタイルがあらかじめ定義してあるので、ルールに沿って利用するだけで整った
デザインページを作成できるので、どんな人でも簡単に扱えるように設計されている。";
echo "<br>";
echo "レスポンシブWebデザイン(1つのWebページでPC・スマートフォン・タブレットなどに対応することを指す←PC用スマートフォン用と2つ作らんでOK)、
汎用性の高さ(WebサイトやWebアプリの規模を問わず利用することができる)がメリットとしてあげられる。";
echo "<br>";
echo "<br>";

echo "【ライブラリ・フレームワーク】";
echo "<br>";   
echo "どちらも、一般的なソフトウェアの機能を比較的簡単な方法で実装できるように、他の誰かが書いたコードの集まりのこと。";   
echo "<br>";
echo "ライブラリ：プログラマが必要なときに、必要なライブラリを呼び出す。";
echo "<br>";
echo "フレームワーク：プログラムの制御を反転する。必要な情報を開発者に尋ねてくる。";     
echo "<br>";   

?>