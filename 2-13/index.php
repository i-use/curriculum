<?php
//index.php
//切り上げ
$x = 5.2;
echo ceil($x);
echo "<br>";
//切り捨て
$x = 5.2;
echo floor($x);
echo "<br>";
//四捨五入
$x = 5.2;
echo round($x);
echo "<br>";

//円周率
echo pi();

function circleArea($r) {
    $circle_area = $r * $r * pi();
    echo $circle_area;
}
echo "<br>";

//半径が2の円の面積
circleArea(2);
echo "<br>";

//乱数(ランダムに値を出す)
echo mt_rand(1, 100);
echo "<br>";

//文字列の長さ
$str = "hogehoge";
echo strlen($str);
echo "<br>";

//検索
$str = "yoneyama";
echo strpos($str, "a");
echo "<br>";

//文字列の切り取り
$str = "yoneyama";
echo substr($str, -2, 2);
echo "<br>";

//置換
$str = "yoneyama";
echo str_replace("neya", "NEYA", $str);
echo "<br>";

$str = "I am Yoneyama";
echo str_replace(" ", "", $str);
echo "<br>";

//日本語の文字数
$str = "あいうえお";
echo strlen($str);
echo "<br>";

$str = "あいうえお";
echo mb_strlen($str);
echo "<br>";

$name = "米山さん";
$limit_number = 40;
printf("%sの残り時間はあと%d時間です", $name, $limit_number);
echo "<br>";

$name = "米山さん";
$limit_time = 40;
$price = 4000;
printf("%sはあと%d時間で%d円の罰金です", $name, $limit_time, $price);
echo "<br>";

$limit_hour = 20;
$limit_minute = 10;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo "<br>";

$limit_hour = 4;
$limit_minute = 4;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo "<br>";

$limit_time  = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
echo $limit_time;
echo "<br>";
echo "<br>";
echo "<br>";

echo "【課題】";
echo "<br>";
//9.9の切り上げ・切り捨て・四捨五入
echo "<br>";
$x = 9.9;
echo ceil($x);
echo "<br>";
echo floor($x);
echo "<br>";
echo round($x);
echo "<br>";
echo "<br>";

//円周率
echo pi();

function circkeArea($r) {
    $circke_area = $r * $r * pi();
    echo $circle_area;
}
echo "<br>";
circleArea(5);
echo "<br>";

//乱数
echo mt_rand(1, 15);
echo "<br>";

//文字列の長さ
echo "<br>";
$str = "apple";
echo strlen($str);
echo "<br>";

//検索
$str = "proguram";
echo strpos($str, "u");
echo "<br>";

//文字の切り取り
echo "<br>";
$str = "proguram";
echo substr($str, -3,2);
echo "<br>";

//置換
$str = "proguram";
echo str_replace("r", "R", $str);
echo "<br>";
echo "<br>";
//文字列を出力
echo "<br>";
$name = "山田さん";
$time = 1;
$price = "5万円";
printf ("%sは%d時間で%sも使った", $name, $time, $price);
echo "<br>";
$limit_price = sprintf("%sは%02d時間で%sも使った", $name, $time, $price);
echo $limit_price;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


echo "【PostgreSQL・Oracle SQL】";
echo "<br>";
echo "PostgreSQL";
echo "オープンソースのリレーショナルデータベース管理システム(RDBMS)のこと。";
echo "<br>";
echo "すべてのソースは公開されており、用途を問わず無料で利用できる。";
echo "<br>";
echo "著作権の表示と免責事項を明記しておけば、再利用も再配布も自由におこなえる「BSDライセンス」を採用してる。";
echo "<br>";
echo "そのため、自由に機能を追加したり改修したり改修したりするなど、様々な場面で利用されている。";
echo "<br>";
echo "<br>";

echo "Oracle SQL";
echo "<br>";
echo "オラクル社が開発した関係データベース管理システムのこと。";
echo "<br>";
echo "特徴として、レベルロック、読み取り一貫性、堅牢性(災害時やデータ破損時などあらゆる障害からデータベースを保護し、サービスの継続を可能にするシステムが構築されている。)、移植性がある。";
echo "<br>";
echo "<br>";
echo "DMLを実行した場合、自動コミットは行われない。DML発行後にコミットしたいばあいは「COMMIT」、ロールバックさせる場合は「ROLLBACK」と明示的にコマンドを発行する必要がある。";
echo "<br>";
echo "<br>";

echo "【TortoiseGit・TortoiseSVN】";
echo "<br>";
echo "TortoiseGit：分散型バージョン管理システムであるGitのクライアントで、TortoiseSVNをもとに";
echo "<br>";
echo "Microsoft Windows シェル拡張として実装されている。GNU General Public Licenseのもとに配布されているフリーソフトウェアのこと。";
echo "<br>";
echo "<br>";
echo "TortoiseSVN";
echo "<br>";
echo "Windowsシェルに組み込まれており、ファイルエクスプローラーのコンテキストメニューに追加される。";
echo "<br>";
echo "自分自身のウィンドウでは動作しない上に、TortoiseTortoiseCVSは、スタンドアローンのアプリケーションを実行することなしに";
echo "<br>";
echo "CVSで管理された、ファイルとフォルダーのアイコンの上に追加情報を表示することができる。";
echo "<br>";
echo "<br>";

echo "【外部設計・内部設計】";
echo "<br>";
echo "外部設計";
echo "<br>";
echo "ソフトウェアや情報システムの開発工程の一つで、外部から見たシステムの仕様を定義する工程。";
echo "<br>";
echo "「基本設定」あるいは「概要設計」などと呼んだり、これらの一部に含める場合もある。";
echo "<br>";
echo "<br>";

echo "内部設計";
echo "<br>";
echo "全体の構成や行うべき処理の詳細など、実装に必要な仕様を定義する工程。";
echo "<br>";
echo "「機能設計」あるいは「詳細設計」と呼ぶ場合もある。";
echo "<br>";
echo "<br>";

?>
