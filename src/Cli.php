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

        if(empty($args)) {
            $this->showHelp();
            return;
        }

        $command = $args[0] ?? "";

        match($command) {
            'make:crud' => $this->handleMakeCrud(array_slice($args, 1)),
            default => $this->showHelp("Unknown command: {$command}")
        };
    }

    private function handleMakeCrud(array $args): void
    {
        $modelName = $args[0] ?? null;
        
        if(!$modelName) {
            $this->showHelp('Model name required: crudforge make:crud User');
            return;
        }

        $options = array_slice($args,1);
        $hasApi = in_array('--api', $options);
        $hasTests = in_array('--tests', $options);

        echo "📦 Generating CRUD for: {$modelName}\n";

        $generator = new CrudGenerator();
        $generator->generate($modelName, [
            "api" => $hasApi,
            'tests' => $hasTests           
        ]);

        echo "✅ Generated to ./generated/ 🎉\n";
    }

    private function showHelp(string $error = ''): void
    {
        if ($error) echo "❌ {$error}\n\n";

        echo "Usage:\n";
        echo "  crudforge make:crud User                 # Basic CRUD\n";
        echo "  crudforge make:crud User --api          # + REST API\n";
        echo "  crudforge make:crud User --tests        # + Tests\n";
        echo "  crudforge make:crud User --api --tests  # Full stack\n\n";
    }
}