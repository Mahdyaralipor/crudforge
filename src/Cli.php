<?php

declare(strict_types = 1);

namespace CrudForge;

final class Cli
{
    public function run(): void
    {
        echo "🚀 CrudForge - Zero-dependency CRUD Generator\n\n";

        global $argv;
        $args = $argv;
        array_shift($args);

    }
}