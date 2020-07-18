<?php
$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
echo count($members);
echo "<br>";

$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
sort($members);
var_dump($members);
echo "<br>";

$numbers = [26, 35, 17, 67, 45];
sort($numbers);
var_dump($numbers);
echo "<br>";

$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
var_dump(in_array("tanaka", $members));
echo "<br>";

$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
if(in_array("tanaka", $members)) {
    echo "田中さんがいるよ！";
} else {
    echo "田中さんはいないよ！";
}
echo "<br>";

$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("@", $members);
var_dump($atstr);
echo "<br>";

$members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("@", $members);
var_dump($atstr);
echo "<br>";
$re_members = explode("@", $atstr);
var_dump($re_members);
echo "<br>";

$str = "1,2,3,4,5";
$array = explode(",", $str);
var_dump($array);
echo "<br>";
echo "<br>";
echo "<br>";

echo "【課題】";
echo "<br>";
//count
$fruits = ["orange", "apple", "peach", "strawberry", "meron"];
echo count($fruits);
echo "<br>";

//sort
$fruits = ["orange", "apple", "peach", "strawberry", "meron"];
sort($fruits);
var_dump($fruits);
echo "<br>";

//in_array
$fruits = ["orange", "apple", "peach", "strawberry", "meron"];
var_dump(in_array("peach", $fruits));
echo "<br>";

//if
$fruits = ["orange", "apple", "peach", "strawberry", "meron"];
if(in_array("mango", $fruits)) {
    echo "マンゴーがあります";
} else {
    echo "マンゴーはないです";
}
echo "<br>";

//inplode
$fruits = ["orange", "apple", "peach", "strawberry", "meron"];
$atstr = implode(",", $fruits);
var_dump($atstr);
echo "<br>";

//explode
$fruits = ["orange", "apple", "peach", "strawberry", "meron"];
$atstr = implode("@", $fruits);
var_dump($atstr);
echo "<br>";
$re_fruits = explode("@", $atstr);
var_dump($re_fruits);
echo "<br>";

echo "<br>";
echo "<br>";


echo "【要件定義(要求仕様書)】";
echo "<br>";
echo "実装すべき機能や満たすべき性能などを明確にしていく作業のこと。";
echo "<br>";
echo "上流工程の一部で、実際の開発・実装作業を行う前に行う作業の一つ。";
echo "<br>";
echo "お客様の「何をやりたいのか」をまとめる工程。";
echo "<br>";
echo "<br>";
echo "<br>";


echo "【単体テスト・結合テスト】";
echo "<br>";
echo "単体テスト：システム開発における工程の一つで、部品がそれぞれきちんと動くかテストすること。";
echo "<br>";
echo "結合テスト：システム開発における工程の一つで、部品を合体させても、それぞれの部品がきちんと動くかをテストすること。";
echo "<br>";
echo "<br>";
echo "<br>";

echo "【テスト仕様書(どのようなもの、項目)】";
echo "<br>";
echo "どんな条件の元で、どんなテストをするのかを洗い出してまとめたものをファイルや紙にした資料のこと。";
echo "<br>";
echo "結合テストや総合テストの工程で、どの機能を、どのテスト技法をつかってテストするのかを記されている。";
echo "<br>";
echo "<br>";

echo "・テストすべき機能を全て洗い出す";
echo "<br>";
echo "要件定義書からテストすべき機能を洗い出し、テストを行う機能を大項目に分類。機能のサイズに合わせて、中項目、小項目とカテゴライズする。";
echo "<br>";
echo "<br>";
echo "・テストの道筋をテスト観点でわかりやすく示す";
echo "<br>";
echo "機能をテストするための切り口をまとめたものを、テスト観点と呼ぶ。";
echo "<br>";
echo "検索機能であれば、「正しくデータを取得できているか確認する」「検索結果が0だった場合の挙動を確認する」などがテスト観点になる。";
echo "<br>";
echo "<br>";
echo "・テスト観点をレビューする」";
echo "<br>";
echo "レビューを行うことで、テストを行うべき機能の漏れを防ぐことができる。";
echo "<br>";
echo "<br>";
echo "・テスト観点に注釈をつける";
echo "<br>";
echo "誰でも、確認する必要がなくテストケースを作れるテスト仕様書を作成するポイントは、表現の一つひとつに注釈をつけるイメージで記述する。";
echo "<br>";
echo "<br>";





?>