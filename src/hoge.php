<?php
  $lineseparator = "<br>";

  $hoge = "hogehoge";
  $fuga = 1234;

  //not -> echo '変数：{#hoge}';
  echo "変数$hoge：{$hoge}";

  echo $lineseparator;

  echo "変数$fuga：{$fuga}";

  echo $lineseparator;

  $hogearray = array('a', 'b', 'c');

  foreach ($hogearray as $value) {
    echo $value;
  }

?>