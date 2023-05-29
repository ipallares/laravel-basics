<?php

namespace App\Services;

interface TodosExporterInterface
{
    public function export(): string;
}
