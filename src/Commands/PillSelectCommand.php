<?php

namespace SolutionForest\PillSelect\Commands;

use Illuminate\Console\Command;

class PillSelectCommand extends Command
{
    public $signature = 'filament-pill-select';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
