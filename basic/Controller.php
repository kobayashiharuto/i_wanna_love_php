<?php

declare(strict_types=1);

class Controller {
  public readonly int $id;

  public function __construct(int $id) {
    $this->id = $id;
  }

  public function hello(): void {
    $this->_hello();
  }

  private function _hello(): void {
    echo "hello, user{$this->id}";
  }
}

if (realpath($argv[0]) === __FILE__) {
  $test = new Controller(1);
  $test->hello();
}