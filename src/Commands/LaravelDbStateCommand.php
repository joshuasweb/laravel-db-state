<?php

namespace Joshuasweb\LaravelDbState\Commands;

use Illuminate\Console\Command;

class LaravelDbStateCommand extends Command
{
    public $signature = 'laravel-db-state';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
