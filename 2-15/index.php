<?php
echo time();
echo "<br>";
var_dump(time());
echo "<br>";
echo  "<br>";

//現在時刻を取得
echo date("Y-m-d H:i:s", time());
echo "<br>";

//2017/4/12 16:00:00のタイムスタンプ
echo date("Y-m-d H:i:s", 1491980400);
echo "<br>";
echo "<br>";

//strtotime
echo strtotime("2017/2/16 11:25:00");
echo "<br>";

//先週の日曜日
echo strtotime("last Sunday");
echo "<br>";

//2日後
echo strtotime("+2 day");
echo "<br>";
echo "<br>";

echo "【課題】";
echo "<br>";
echo strtotime("2017/12/31 23:59:59");
echo "<br>";
echo date("Y-m-d H:i:s", 1514732399);
echo "<br>";
echo "<br>";
echo "<br>";

echo "【ログ(意味・確認の仕方)】";
echo "<br>";
echo "起こった出来事についての情報などを一定の形式で時系列に記録・蓄積したデータのこと。";
echo "<br>";
echo "いつ、誰が、何をやったのか(起こったのか)、補足を記録することが多い。";
echo "<br>";
echo "<br>";
echo "確認の仕方：Windows OSの操作ログは「イベントビューアー」で確認できる。";
echo "<br>";
echo "確認したいイベントを選択し、右クリックメニューから「すべてのイベントに名前」をつけて保存を選ぶことでログを保存・確認できる。";
echo "<br>";
echo "<br>";


echo "【クラウドサーバー、レンタルサーバー、VPSの違い】";
echo "<br>";
echo "クラウドサーバー";
echo "<br>";
echo "直訳すると雲の中のサーバーという意味。実際には専門の会社が管理している物理サーバーが存在している。";
echo "<br>";
echo "これらの機器をインターネット経由で利用できる仕組みのこと。そこでは、全て自前で揃えるコスト(費用。手間ひま)削減と、セキュリティ技術の進展がある。";
echo "<br>";
echo "・Saas　・Paas　・IaaS　がある。";
echo "<br>";
echo "<br>";
echo "レンタルサーバー";
echo "<br>";
echo "賃貸サーバー。レンタルサーバー会社と契約することによって、主にインターネット経由で使わせてもらえるサーバーのこと。";
echo "<br>";
echo "維持管理のコストはいいけど、柔軟性・自由度は低い。";
echo "<br>";
echo "<br>";
echo "VPS";
echo "<br>";
echo "レンタルサーバーのサービス品目の一つで、物理的には一台のサーバーを複数顧客で共用するが、仮想化技術により専門サーバーと同等の環境を提供すること。";
echo "<br>";
echo "コストも自由度もクラウドサーバーとレンタルサーバーの中間くらい。";
echo "<br>";
echo "<br>";
echo "<br>";

echo "【PHPのFWの種類と特徴】";
echo "<br>";
echo "CakePHP：非常に有名で歴史がある。";
echo "<br>";
echo "フレームワークの性能自体はそこまで高くないので、重いと思われがちだが、機能が豊富で開発しやすいことと";
echo "<br>";
echo "日本語ドキュメントやコミュニティが非常に充実している。";
echo "<br>";
echo "<br>";

echo "Zend Framework";
echo "<br>";
echo "豊富なライブラリを含んでおり、そのライブラリを単体で使用することができる。";
echo "<br>";
echo "フレームワークの構成は非常にオーソドックスでPHPフレームワークのお手本のようなものとなっている。";
echo "<br>";
echo "性能自体はCakePHPより優れているが、機能が豊富であるため、最近流行している軽量フレームワークには及ばない。";
echo "<br>";
echo "日本語のドキュメントやコミュニティの充実度は若干見劣りしてしまう。";
echo "<br>";
echo "<br>";

echo "Symfony";
echo "<br>";
echo "設計思想として、Ruby On Railsの流れを組むフレームワーク。";
echo "<br>";
echo "高速に動作することが利点で、PHPのフレームワークを使う際に、速度を重視するような場合に使われる。";
echo "<br>";
echo "プラグインシステムが優秀なため、比較的機能追加もしやすくなっている。";
echo "<br>";
echo "<br>";

echo "Code Igniter";
echo "<br>";
echo "昨日は少なめだが、軽量で高速に動作することが売りになっている。";
echo "<br>";
echo "構成も単純でわかりやすいため、フレームワークの学習用に最適。";
echo "<br>";
echo "<br>";

echo "Fuel PHP";
echo "<br>";
echo "Code Igniterを改良して開発されたフレームワークのこと。";
echo "<br>";
echo "軽量かつ高速で単純なため、学習用に最適なフレームワーク。";
echo "<br>";
echo "<br>";

echo "Ethna";
echo "<br>";
echo "システムを効率よく開発することをコンセプトにしているため、細かい処理についてはフレームワーク側がサポートしてくれる。";
echo "<br>";
echo "そのため、実際に利用する開発者はメイン機能に集中することができ、質の高いシステムを作ることができる。";
echo "<br>";
echo "日本の開発者が開発したことから、日本語のドキュメントも充実している。";
echo "<br>";
echo "<br>";

echo "Laravel";
echo "<br>";
echo "作られたのも非常に最近のため、わかりやすさ、書きやすさだけでなく、コード自体も非常にきれいに書かれている。";
echo "<br>";
echo "<br>";
echo "<br>";

?>