<?php
$my_name = $_POST["my_name"];
$password = $_POST["password"];
$sex = $_POST["sex"];
$hidden_param = $_POST["hidden_param"];
$number = $_POST["number"];
?>

<p>私の名前は<?php echo $my_name; ?>です。</p>
<p>パスワードは<?php echo $password; ?>です。</p>
<p>性別は<?php echo $sex; ?>です。</p>
<p>性別は<?php echo $hidden_param; ?>です。</p>
<p>年齢は<?php echo $number; ?>歳です。</p>

<br>
<br>
<br>
<br>

<?php
$name = $_POST["name"];
$goods = $_POST["goods"];
$quantity = $_POST["quantity"];

?>

<p>お名前：<?php echo $name; ?></p>
<p>ご希望商品<?php echo $goods; ?></p>
<p>個数：<?php echo $quantity; ?></p>
