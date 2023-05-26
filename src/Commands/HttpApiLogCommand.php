<?php

namespace GoCPA\HttpApiLog\Commands;

use Illuminate\Console\Command;

class HttpApiLogCommand extends Command
{
    public $signature = 'http-api-log';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
