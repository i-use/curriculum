<?php
$countries = ["America", "Japan", "China", "Korea"];

echo $countries[0];
echo "<br>";
echo $countries[1];
echo "<br>";
echo $countries[2];
echo "<br>";
echo $countries[3];
echo "<br>";
$countries = ["America", "Japan", "China", "Korea"];
var_dump($countries);
echo "<br>";
echo "<br>";

$fruits = ["りんご", "みかん", "ぶどう"];
echo $fruits[0];
echo "<br>";

echo $fruits[1];
echo "<br>";

echo $fruits[2];
echo "<br>";

var_dump($fruits);
echo "<br>";
echo "<br>";

$fruits = ["apple" => "りんご", "orange" => "みかん", "grape" => "ぶどう"];
echo $fruits["apple"];
echo "<br>";

echo $fruits["orange"];
echo "<br>";

echo $fruits["grape"];
echo "<br>";

var_dump($fruits);
echo "<br>";
echo "<br>";

//配列の場合
$fruits = ["りんご", "みかん", "ぶどう"];
$fruits[] = "もも";
echo "<br>";
var_dump($fruits);
echo "<br>";
echo "<br>";

//連想配列の場合
$fruits = ["apple" => "りんご", "orange" => "みかん", "grape" => "ぶどう"];
$fruits["peach"] = "もも";
var_dump($fruits);
echo "<br>";
echo "<br>";

echo "【課題】";
echo "<br>";

$colors = ["red" => "赤", "blue" => "青", "green" => "緑"];
var_dump($colors);
echo "<br>";

$colors = ["red" => "赤", "blue" => "青", "green" => "緑"];
$colors["yellow"] = "黄色";
var_dump($colors);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "【プルリクエスト（マージリクエスト）】";
echo "<br>";
echo "開発者のローカルリポジトリでの変更を他の開発者に通知する機能のこと。";
echo "<br>";
echo "・機能追加や改修など、作業内容をレビュー・マージ担当者やその他関係者に通知する";
echo "<br>";
echo "・ソースコードの変更箇所をわかりやすく表示する";
echo "<br>";
echo "・ソースコードに関するコミュニケーションの場を提供する";
echo "<br>";
echo "GitHubにおける、Gitの一つのブランチを別のブランチにマージするための前準備としての開発者同士のやりとりの起点となる要望のこと、及びそのやりとりをWebサービス上で支援するための機能。";
echo "<br>";
echo "<br>";

echo "【Git Flow】";
echo "<br>";
echo "チームでGitを使う際に役立つ、運用ルールをまとめたツールのこと。";
echo "<br>";
echo "Gitは分散型バージョン管理システムで、複数名でプロジェクト・ファイルを共有できる特徴がある。";
echo "<br>";
echo "開発スピードの向上やミスの低減などメリットがある一方、開発スタート時にルールを定めておかないと、プロジェクトがまとまらないというデメリットがある。";
echo "<br>";
echo "<br>";
echo "Git機能の一つにブランチ（branch）というものがある。ブランチは枝分かれのことを意味して、開発中のソフトに新しい機能を加えたい時などに使われる。";
echo "<br>";
echo "誰でも簡単に作成できることもあり、運用ルールがないとブランチが乱立する恐れがある。";
echo "<br>";
echo "そこで考え出されたのがGit Flowというもので、マスターとデベロップという2本の柱を軸に、3本の補助柱を設けてブランチの運用をスマートにする。";
echo "<br>";
echo "(master:マスター)本番に反映するファイルで、基本的にこちらにはコミットしない。";
echo "<br>";
echo "(develop/デベロップ)開発を行うブランチのこと。";
echo "<br>";
echo "この2つのブランチは消滅することなくプロジェクトと共に存続する。";
echo "<br>";
echo "<br>";
echo "補助柱①機能ブランチ(Feature branches)";
echo "<br>";
echo "ブランチ元/develop マージ先/develop   追加機能などはこちらで作業される。";
echo "<br>";
echo "<br>";
echo "補助柱②リリースブランチ(Release branches)";
echo "<br>";
echo "ブランチ元/develop マージ先/developとmaster   リリース前の微調整を行うブランチで、小さなバグ修正などが行われる。";
echo "<br>";
echo "<br>";
echo "補助柱③Hotfixブランチ(HOtfix branches)";
echo "<br>";
echo"ブランチ元/master マージ先/developとmaster   トラブルが発生した際、緊急を要する場合に使用される。";
echo "<br>";
echo "<br>";
echo "2本の主軸と3本の補助柱を設けることで、プロジェクトのコア部分は安定し、有限的な3本の補助柱で開発（プログラミング）が行われる。";
echo "<br>";
echo "<br>";

echo "【CRON】";
echo "<br>";
echo "UNIX系のOSに入っているプログラムの一つ。";
echo "<br>";
echo "事前に「いついつになったら、このプログラムを動かしてね」と指示しておくと、その時間になったときに指定しておいたプログラムを動かしてくれるもの。";
echo "<br>";
echo "指示するときは、「crontab」というコマンドを使う。";
echo "<br>";
echo "いつプログラムを動かすかの指示は、「分・時・日・月・曜日」を指定する。";
echo "<br>";
echo "（例）「10   8,14,19   *   *   *   /hoge/piyota.exe」→ 「毎日8時10分、14時10分、19時10分にプログラム(/hoge/piyora.exe)」を動かしてくれる。";
echo "<br>";
echo "ただし、パソコンの電源をつけておかないと、プログラムを実行しない。";
echo "<br>";
echo "<br>";




?>
