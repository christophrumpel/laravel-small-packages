<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ExportPostsCommand extends Command
{
    protected $signature = 'export:posts';

    protected $description = 'Command description';

    public function handle(): void
    {
        info('Export all posts triggered');
    }
}
