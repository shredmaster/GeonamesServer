<?php

require __DIR__ . '/../../vendor/autoload.php';

use Symfony\Component\Console\Application;

require_once __DIR__ . '/CreateIndexCommand.php';
require_once __DIR__ . '/DeleteIndexCommand.php';
require_once __DIR__ . '/DoIndexCommand.php';
require_once __DIR__ . '/SetupIndexCommand.php';

$app = new Application('Geonames Indexer');

$app->addCommands(array(
    new CreateIndexCommand(),
    new DeleteIndexCommand(),
    new DoIndexCommand(),
    new SetupIndexCommand(),
));

exit($app->run());
