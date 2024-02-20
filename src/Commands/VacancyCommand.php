<?php

namespace AdminKit\Vacancy\Commands;

use Illuminate\Console\Command;

class VacancyCommand extends Command
{
    public $signature = 'admin-kit-vacancy';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
