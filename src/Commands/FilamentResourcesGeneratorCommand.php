<?php

namespace HanzoAlpha\FilamentResourcesGenerator\Commands;

use Illuminate\Console\Command;

class FilamentResourcesGeneratorCommand extends Command
{
    public $signature = 'filament-resources-generator';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
