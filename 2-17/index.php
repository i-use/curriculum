<?php
$sum = 0; // 合計
$i = 0; // ループカウンタ
while($sum < 40) {
  $i++;
  // ①サイコロの出目を計算
  $x = rand(1, 6);
  // ②回数とサイコロの出目を出力
  $sum = $sum + $x;
  // ③サイコロの出目を$sumに加算
  echo "$i 回目 = $x";
  echo "<br>";
}
// ④サイコロを振った回数を出力
  echo "合計 $i 回でゴールしました";
  echo "<br>";

  echo "<br>";
  echo "<br>";
   
?>

<?php
//時間帯($time) 
//5時〜10時  おはようございます
//11時〜18時 こんにちは
//19時〜4時  こんばんは

$time = intval(date("H"));
if(5 <= $time && $time <=10) {
   echo "今 $time 時台です";
   echo "<br>";
   echo  "おはようございます";
} elseif(11 <= $time && $time <= 18) {
    echo "今 $time 時台です";
    echo "<br>";
    echo "こんにちは";
} else {
    echo "今 $time 時台です";
    echo "<br>";
    echo "こんばんは";
}

?>










