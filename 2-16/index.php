<?php
$testFile = "test.txt";
$contents = "こんにちは！";

if (is_writable($testFile)) {
    // 書き込み可能なときの処理
    // 対象のファイルを開く
    $fp = fopen($testFile, "w");
    // 対象のファイルに書き込む
    fwrite($fp, $contents);
    // ファイルを閉じる
    fclose($fp);
    // 書き込みした旨の表示
    echo "finish writing!!";
} else {
    // 書き込み不可のときの処理
    echo "not writable!";
    exit;
}
echo "<br>";
?>

<?php
$test_file = "test2.txt";

if (is_readable($test_file)) {
    // 読み込み可能なときの処理
    // 対象のファイルを開く
    $fp = fopen($test_file, "r");
    // 開いたファイルから1行ずつ読み込む
    while ($line = fgets($fp)) {
        // 改行コード込みで1行ずつ出力
        echo $line."<br>";
    }
    // ファイルを閉じる
    fclose($fp);
} else {
    // 読み込み不可のときの処理
    echo "not readable!";
    exit;
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "【CakePHPの2系・3系の違い】";
echo "<br>";
echo "・フォルダ構成の違い";
echo "<br>";
echo "＊app → src";
echo "<br>";
echo "＊app/Test → tests";
echo "<br>";
echo "＊app/Plugin → plugins";
echo "<br>";
echo "＊app/tmp → tmp";
echo "<br>";
echo "＊app/view → src/template";
echo "<br>";
echo "<br>";
echo "・Controller";
echo "<br>";
echo "Modelオブジェクトの取得";
echo "<br>";
echo "・Model:Modelクラスではなく、TableとEnitityの各オブジェクトでORMを実現する。";
echo "<br>";
echo "・Table：単一行のデータ取得";
echo "<br>";
echo "・Enitity：TBD";
echo "<br>";
echo "・バリデーション：Modelクラスのvalidateプロパティではなく、Validateクラスで完全に独立している。";
echo "<br>";
echo "  TableクラスのvalidationDeaultメソッドの引数に渡されるValidatorクラスのオブジェクトに設定する。";
echo "<br>";
echo "   エラーはEnitity::errorsメソッドで取得可能。";
echo "<br>";
echo "・View：TBD";
echo "<br>";
echo "・シェルの実行：Console/cake【シェル名】 → bin/cake【シェル名】";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "【LAMP】";
echo "<br>";
echo "データベースを利用したWebアプリケーションを開発・運用するのに適した、人気の高いオープンソースソフトウェアの組み合わせの一つで";
echo "<br>";
echo "OSの「Linix」、Webサーバーの「Apache」、データベースの「MySQL」、プログラミング言語および実行環境の「PHP(Perl、Python)」の";
echo "<br>";
echo "いずれかの頭文字を繋いだもの。";
echo "<br>";
echo "各分野でもっとも普及しているソフトウェアの一つ。動的なWebサイトやWebサービスなどの構築に適している。";
echo "<br>";
echo "<br>";
echo "<br>";

echo "【AWS】";
echo "<br>";
echo "アマゾンウェブサービス(Amazon Web Services)のこと。";
echo "<br>";
echo "Amazonが経営しているサーバーやデータベースなど、インターネットを経由して使えるものを貸してくれるサービス。";
echo "<br>";
echo "<br>";
echo "<br>";

?>