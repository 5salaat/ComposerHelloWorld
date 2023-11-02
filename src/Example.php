<?php

/**
 * This file is part of 5salaat/hello-world
 *
 * @copyright Copyright (c) mmcinteemasud3 <mcinteemasud@yahoo.com>
 * @license https://opensource.org/license/mit/ MIT License
 */

declare(strict_types=1);

namespace Salaat\Hello\World;

/**
 * An example class to act as a starting point for developing your library
 */
class Example
{
    /**
     * Returns a greeting statement using the provided name
     */
    public function greet(string $name = 'World'): string
    {
        return "Hello, {$name}!";
    }
}
