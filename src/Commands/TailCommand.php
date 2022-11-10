<?php

namespace Girishl\Tail\Commands;

use Illuminate\Console\Command;

class TailCommand extends Command
{
    public $signature = 'laravel-tail-clone';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
