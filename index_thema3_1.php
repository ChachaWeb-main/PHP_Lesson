<!-- テーマ３　[PHPの基礎] 関数 -->

<!-- 1．関数の概念と組み込み関数 -->
<?php

/* --------------------------------------------
 * 　組み込み関数
 * -------------------------------------------- */
// ----- 例：文字列の文字数を返す関数

echo mb_strlen('こんにちは！');
echo '<br>';
echo mb_strlen(123);
echo '<br>';
$hello = 'hello';
echo mb_strlen($hello);

// ----- 引数がない関数もある
echo '<br>';
echo time();  //1970年1月1日0時0分0秒からの通算秒
?>
