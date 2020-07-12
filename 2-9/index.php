<?php
for($i=1; $i<=100; $i++){
     if($i % 3 === 0 && $i % 5 ===0){
        echo "FizzBuzz!";
    }elseif($i % 5 === 0){
        echo "Buzz!";
    }elseif($i % 3 === 0){
        echo "Fizz!";
    }else{
        echo $i;
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";

echo "【パフォーマンス】";
echo "<br>";
echo "性能のこと。パフォーマンスが落ちてるは性能が落ちている（悪い）ということ。";
echo "<br>";
echo "コンピューターなどの機器やソフトウェア、システムなどの処理性能や実行速度、通信回線・ネットワークなどの";
echo "<br>";
echo "伝送速度・容量などのことを指すことが多い。";
echo "<br>";
echo "<br>";
echo "<br>";

echo "【スロークエリ】";
echo "<br>";
echo "データベースにおいて、時間のかかっているSQLのこと（実行が遅いクエリ（Query））。";
echo "<br>";
echo "<br>";


echo "【クエリログ】";
echo "<br>";
echo "クライアントからMySQL Serverへの接続・接続解除の情報、及びクライアントから実行された";
echo "<br>";
echo "全てのSQLクエリを出力してくれるログのこと。";
echo "<br>";
echo "SQL実行エラーが発生した際に、どのようなSQLが実行されたのかを正確に把握するのに役に立つ。";
echo "<br>";
echo "<br>";
echo "<br>";








?>
