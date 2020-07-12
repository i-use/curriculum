<?php
function getTriangleArea($base, $height) {
    $area = $base * $height / 2;
    print "三角形の面積は".$area."だよ。";
}

// 1) 底面10cm 高さ5cm
getTriangleArea(10,5);
// 2) 底面15cm 高さ8cm
getTriangleArea(15,8);
// 3) 底面8cm   高さ6cm
getTriangleArea(8,6);

echo "<br>";
echo "<br>";

$myname = "ruby";

function sayHi($name = "goto") {
    //関数の中で定義する変数 => ローカル変数
    $myname = "php";
    return "Hi! ".$name." from ".$myname;
}

echo sayHi();
echo "<br>";
echo $myname;

echo "<br>";
echo "<br>";

echo "【課題】";
echo "<br>";

//直方体（Rectangular）の面積の式  縦(vertical)*横(wide)*高さ(height)

function getRectangular($vertical, $wide, $height) {
    $area = $vertical * $wide * $height;
    echo $area;
}
getRectangular(5,10,8);


echo "<br>";
echo "<br>";

echo "【ハッシュ化】";
echo "<br>";
echo "値をハッシュ関数に入れて、ハッシュ値に変換すること。";
echo "<br>";
echo "元のデータから一定の計算手順に従って、ハッシュ値と呼ばれる規則性のない固定長の値を求め、その値によって元のデータを置き換えること。";
echo "<br>";
echo "関数：何かを入れると何かを計算して何かを返してくれるプログラムの部品(入力(引数)を受けて処理を行い、その結果として出力(戻り値)がある)";
echo "<br>";
echo "ハッシュ関数：適当な値を中に放り込むと適当な値を返してくれる関数(何の値が返ってくるかはわからないけど、同じ物を入れたら同じ値が返ってくる)。";
echo "<br>";
echo "ハッシュ値：ハッシュ関数から返ってくる値(戻り値)のこと。";
echo "<br>";
echo "(ハッシュ値から元のデータを特定するのは難しい。元のデータが同じなら生成されるハッシュ値も同じ。元のデータが変わると、生成されるハッシュ値は変わる。)";
echo "<br>";
echo "※パスワードの保管などでよく用いられる。";
echo "<br>";
echo "<br>";


echo "【総合テスト】";
echo "<br>";
echo "構築したシステムが、全体で予定通りの機能を満たしているか、また機能や性能が仕様書通りに構築できているかを検証すること。";
echo "<br>";
echo "単体テスト、結合テストの実行後に、本番とほぼ同じ環境でテストを実施する(開発環境でのテストでは、発見できない不具合を検出するため)。";
echo "<br>";
echo "開発の最終段階にシステム全体を対象に行われるテストのこと。";
echo "<br>";
echo "<br>";


echo "【デバッグ】";
echo "<br>";
echo "不具合の原因を探してなおすこと。";
echo "<br>";
echo "コンピュータープログラムに潜む欠陥(バグ)を探し出して、取り除くこと。";
echo "<br>";
echo "<br>";


?>
