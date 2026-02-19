<?php

declare(strict_types = 1);

namespace CrudForge\Generators;

use CrudForge\IO\Filesystem;

final class CrudGenerator
{
    public function __construct(
        private Filesystem $fs = new Filesystem()
    ){}

    public function generate(string $modelName, array $options = []): void
    {
        $studly = $this->toStudly($modelName);
        $snake = $this->toSnake($modelName);
        $basePath = getcwd() . '/generated';

        $this->fs->ensureDir("{$basePath}/Models");
        $this->fs->ensureDir("{$basePath}/Controllers");
        $this->fs->ensureDir("{$basePath}/routes");
        $this->fs->ensureDir("{$basePath}/migrations");

        //* Generate Model
        // $this->fs->put("", $this->generateModel($studly));
    }

    private function generateModel(string $studly): string
    {
        return "<?php\n\ndeclare(strict_types=1);\n\nclass {$studly}\n{\n    public function __construct(\n        public int \$id,\n        public string \$name,\n        public string \$email,\n        public ?string \$created_at = null,\n        public ?string \$updated_at = null\n    ) {}\n}";
    }

    // private function generateController(): string{}

    private function toStudly(string $name): string
    {
        return str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', $name)));
    }

    private function toSnake(string $name): string
    {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $name));
    }
}