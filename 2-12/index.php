<form action="result.php" method="post">

    <!-- この中にinputタグを記述していきます。 --> 
    私の名前:<input type="text" name="my_name" /><br>
    <input type="password" name="password" /> <br>
    性別：
    <input type="radio" name="sex" value="男性">男性
    <input type="radio" name="sex" value="女性">女性
    <br>
    <input type="hidden" name="hidden_param" value="隠しパラメーターから" /><br>
    年齢：
    <select name = "number">
        <?php for($i=1;$i<=10; $i++){ ?>
            <option value="<?php echo $i;?>">
                <?php echo $i ?>
            </option>
        <?php } ?>
    </select><br>
    <input type="submit" value="送信するよ！" />
</form>


<br>
<br>
<br>
<br>
<p>【課題】</p>

<br>
<br>

<form action="result.php" method="post">
    お名前：<input type="text" name="name" /><br>
    ご希望商品：
    <input type="radio" name="goods" value="A賞">A賞
    <input type="radio" name="goods" value="B賞">B賞
    <input type="radio" name="goods" value="C賞">C賞
    <br>
    個数：
    <select name="quantity">
        <?php for($i=1; $i<=10; $i++){ ?>
            <option value="<?php echo $i;?>">
                <?php echo $i ?>
        </option>
        <?php } ?>
    </select><br>
    <input type="submit" value="申込" />
     
</form>

<br>
<br>
<br>
<br>

<?php
echo "【モジュール】";
echo "<br>";
echo "ハードウェアやソフトウェアにおける、ひとまとまりの機能・要素のこと。";
echo "<br>";
echo "部品のこと。単独でも機能としては成立するけど、普通は他のものと組み合わせて使う。";
echo "<br>";
echo "システム中核部や他の部品への接合部(インターフェース)の仕様が明確に定義され、容易に追加や交換ができるようなものを指す。";
echo "<br>";
echo "<br>";

echo "【バージョン管理システム】";
echo "<br>";
echo "ファイルの変更履歴を管理してくれるシステムのこと。";
echo "<br>";
echo "管理するファイルの内容をいつ誰がどのように変更したのか、時系列で記録に残し、過去のある時点の内容を参照したり";
echo "<br>";
echo "現在のものを破棄してその時点の状態にもどしたり、別の時点のものとの違いを調べたりすることができる。";
echo "<br>";
echo "<br>";

echo "【サブクエリ】";
echo "<br>";
echo "データベースなどの問合せ(クエリ)分の内部に含まれる、別の問合せのこと。";
echo "<br>";
echo "SQL文の中に入れ子になってSQL文が書かれていること。";
echo "<br>";
echo "データベースにデータを入れるときに「データを入れておいて」とか取り出すときは「データを取り出して」という命令をするときに使う言語。";
echo "<br>";
echo "<br>";

?>