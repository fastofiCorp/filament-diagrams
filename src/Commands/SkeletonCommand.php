<?php

namespace FastofiCorp\FilamentDiagrams\Commands;

use Illuminate\Console\Command;

class FilamentDiagramsCommand extends Command
{
    public $signature = 'FilamentDiagrams';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
