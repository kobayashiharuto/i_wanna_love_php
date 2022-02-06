<?php

declare(strict_types=1);

class Controller {
  public readonly string $name;
  public readonly string $color;

  public function __construct(string $color, string $name) {
    $this->name = $name;
    $this->color = $color;
  }
        
  public function copyWith(?string $color = null, ?string $name = null): self {
    $new = new self(
      $color ?? $this->color,
      $name ?? $this->name,
    );
    return $new;
  }
}


if (realpath($argv[0]) === __FILE__) {
  function main(): void {
    $test = new Controller("test", "test");
    $hoge = $test->copyWith(name: "hoge");
    echo $test->name;
    echo $test->color;
    echo $hoge->name;
    echo $hoge->color;
  }

  main();
}