<?php declare(strict_types=1);

$fiber = new Fiber(function (string $arg): void {
  echo "fiber: 処理1を始めます。与えられた値は: $arg", "\n";
  // 何らかの処理1
  echo "fiber: 処理1完了", "\n";
  $value = Fiber::suspend('result1');
  echo "fiber: 処理2を始めます。与えられた値は: $value", "\n";
  // 何らかの処理2
  echo "fiber: 処理2完了", "\n";
  Fiber::suspend('result2');
});

echo "main: fiber を起動します\n";
$result1 = $fiber->start("arg1");
echo "main: 処理1が完了したようです。返ってきた値は: $result1 \n";
echo "main: fiber を再開します\n";
$result2 = $fiber->resume('arg2');
echo "main: 処理2が完了したようです。返ってきた値は: $result2 \n";
