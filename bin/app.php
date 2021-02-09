<?php

require_once '../vendor/autoload.php';

use ConsoleCommander\Kernel  as CommandKernel;
use ConsoleCommander\OutputFormatter\ConsoleOutputFormatter;

$commandKernel = new CommandKernel(realpath(__DIR__ . '/../app/Commands'), 'App\commands', new ConsoleOutputFormatter());
$commandKernel->run($argv[1]??null, array_slice($argv, 2));
