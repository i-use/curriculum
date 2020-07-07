<?php
//名前がtoro・passwordがpass
$name = "taro";
$password = "pass";

//名前とパスワードが一致する時
if ($name = "taro" && $password = "pass") {
    echo "ログイン成功です。";
      //名前が合っている時（パスワードが×）
  } elseif ($name = "taro") {
      echo "パスワードが間違っています。";
      //パスワードが合っている時（名前が×）
  } elseif ($password = "pass") {
      
      echo "名前が間違っています。";
      //両方違う時
  } else {
      echo "入力情報が間違っています。";
    }

echo "<br>";
echo "<br>";

echo "【IDE(統合開発環境)】";
echo "<br>";
echo "プログラムを作るために必要な物が全部詰まった開発環境のこと。";
echo "<br>";
echo "ソフトウェア開発に必要なソフトウェアを一つに組み合わせ、同じ操作画面から統一的な操作法で利用できるようにしたソフトウェアパッケージ。テキストエディタ・コンパイラ・デバッガを一つにまとめた物。";
echo "<br>";
echo "<br>";

echo "【JOIN（データベースにおいて）】";
echo "<br>";
echo "複数のテーブルを合体させて一つのテーブルにすること（テーブル結合）。";
echo "<br>";
echo "<br>";

echo "【コンフリクト】";
echo "<br>";
echo "複数のプログラムが同じデータやファイルを同じタイミングで使おうとして取り合いの状態（競合状態）になっていること。";
echo "<br>";
echo "<br>";

?>
