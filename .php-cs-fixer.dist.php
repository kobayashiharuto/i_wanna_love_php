<?php declare(strict_types=1);

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->in(__DIR__);

$config = new PhpCsFixer\Config();

return $config
  ->setIndent("  ")
  ->setRules([
        '@PhpCsFixer:risky' => true,
        '@PSR2'=> true,
        'declare_strict_types' => true,
        'braces' => [
            'allow_single_line_closure' => true,
            'position_after_functions_and_oop_constructs' => 'same'],
])
    ->setFinder($finder);
