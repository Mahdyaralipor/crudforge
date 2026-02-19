<?php

declare(strict_types = 1);

namespace CrudForge\IO;

final class Filesystem
{
    public function ensureDir(string $path): void
    {
        if(!is_dir($path))
            mkdir($path, 0777, true);
    }

    public function put(string $path, string $content): void
    {
        $this->ensureDir(dirname($path));
        file_put_contents($path, $content);
        echo "  📄 {$path}\n";
    }
}