<?php
declare(strict_types=1);

namespace Szemul\Router;

use Slim\App;

interface RouterInterface
{
    public function __invoke(App $app): void;
}
