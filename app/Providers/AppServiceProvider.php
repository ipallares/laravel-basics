<?php

namespace App\Providers;

use App\Services\TodoCustomService;
use App\Services\TodoServiceInterface;
use App\Services\TodosExporterInterface;
use App\Services\TodosJsonExporter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TodoServiceInterface::class, TodoCustomService::class);
        $this->app->bind(TodosExporterInterface::class, TodosJsonExporter::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
