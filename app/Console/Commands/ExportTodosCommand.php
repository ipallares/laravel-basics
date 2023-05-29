<?php

namespace App\Console\Commands;

use App\Services\TodosExporterInterface;
use Illuminate\Console\Command;

class ExportTodosCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:export-todos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gets all Todos in the system and exports them to an external service through a rest API';

    public function __construct(
        private TodosExporterInterface $todosExporter
    ){
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $exportedTodos = $this->todosExporter->export();

        $this->info("You have successfully exported the following todos:");
        $this->line($exportedTodos);

        return self::SUCCESS;
    }
}
