<?php

namespace App\Exports;
//namespace App\Http\Livewire;

use App\Exports\Exports\ReportePorHoja;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class CalificacionesExport implements WithMultipleSheets
{
    use Exportable;

    protected $year;

    public function __construct(int $year)
    {
        $this->year = $year;
    }

    /**
     * @return array
     */
    public function sheets(): array
    {
        $sheets = [];

        for ($month = 1; $month <= 12; $month++) {
            $sheets[] = new ReportePorHoja($this->year, $month);
        }
        return $sheets;
    }
}
