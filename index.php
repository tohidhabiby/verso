<?php

use Tohid\Verso\Processor\LoopProcessor;

require __DIR__ . '/vendor/autoload.php';

$processor = new LoopProcessor();
for ($counter = 1; $counter <= 100; $counter++) {
    echo $processor->process($counter) . "\n\r";
}