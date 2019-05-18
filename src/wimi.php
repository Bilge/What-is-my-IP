<?php
declare(strict_types=1);

use Amp\Artax\DefaultClient;
use Amp\Artax\Response;
use Amp\Loop;

require_once 'vendor/autoload.php';

Loop::run(static function (): \Generator {
    $client = new DefaultClient();
    /** @var Response $response */
    $response = yield $client->request('https://api.ipify.org');
    $ip = yield $response->getBody();

    echo "$ip\n";
});
