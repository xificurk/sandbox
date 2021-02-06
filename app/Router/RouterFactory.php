<?php

declare(strict_types=1);

namespace App\Router;

use Nette;
use Nette\Application\Routers\SimpleRouter;

final class RouterFactory
{
	use Nette\StaticClass;

	public static function createRouter(): SimpleRouter
	{
		return new SimpleRouter([
            'presenter' => 'Nette:Micro',
            'callback' => function () {echo 'OK';},
        ]);
	}
}
