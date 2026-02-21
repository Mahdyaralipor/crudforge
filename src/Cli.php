<?php
declare(strict_types=1);

namespace CrudForge;

use CrudForge\Generators\CrudGenerator;

final class Cli
{
    public function run(): void
    {
        echo "🚀 CrudForge v1.0 - Zero-Dep CRUD Generator\n\n";
        
        global $argv;
        $args = $argv;
        array_shift($args);
        
        if (empty($args)) {
            $this->showHelp();
            return;
        }
        
        $command = $args[0] ?? '';
        
        match($command) {
            'make:crud' => $this->handleMakeCrud(array_slice($args, 1)),
            default => $this->showHelp("Unknown command: {$command}")
        };
    }
    
    private function handleMakeCrud(array $args): void
    {
        $modelName = $args[0] ?? null;
        if (!$modelName) {
            $this->showHelp('Model name required');
            return;
        }
        
        $generator = new CrudGenerator();
        $generator->generate($modelName);
        
        echo "✅ Generated to ./generated/ 🎉\n";
    }
    
    private function showHelp(string $error = ''): void
    {
        if ($error) echo "❌ {$error}\n\n";
        echo "Usage: ./bin/crudforge make:crud User\n\n";
    }
}
