<!-- 1．配列の概念について学ぼう -->

<?php
/* --------------------------------------------
 * 　配列とは
* -------------------------------------------- */
// 今までは変数にそれぞれ値を入れていた
$math = '数学';
$english = '英語';
$history = '歴史';

// 配列
$subjects = array('数学', '英語', '歴史');
echo $subjects[0];
echo '<br>';
echo $subjects[1];
echo '<br>';
echo $subjects[2];
echo '<br>';
echo '<br>';

// print_r：指定した変数の情報を表示する
print_r($subjects);

// データが複雑になればなるほど、配列を使ってコードをわかりやすくまとめることができます
// また、列から値の一覧、今回の場合ですと、科目一覧を一気に表示するようなプログラムもできます
// その方法もforeach構文のところで解説をします

// 配列の作り方は２通りあります。
$subjects = array('数学', '英語', '歴史'); //昔からある
$subjects2 = ['数学', '英語', '歴史']; //短縮構文
echo $subjects2[0];
echo '<br>';
echo $subjects2[1];
echo '<br>';
echo $subjects2[2];
?>
