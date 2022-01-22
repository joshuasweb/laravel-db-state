<?php

namespace Joshuasweb\LaravelDbState\Commands;

use Illuminate\Console\Command;

class LaravelDbStateCommand extends Command
{
    public $signature = 'db-state';

    public $description = 'Ensures the correct database state is loaded';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
