<?php

namespace App\Exports;

use App\Exports\Exports\ReportePorHoja;
use App\Preguntas;
use App\User;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class TBD implements WithMultipleSheets
{
    use Exportable;

    /**
     * @var int
     */
    private $year;

    public function __construct(int $year)
    {
        $this->year = $year;
    }
    public function query()
    {
        return User::query()->whereYear('created_at', $this->year);
    }

    public function sheets(): array
    {
        $sheets = [];
        $nombres=['users',];

        for ($this->year = 0; $this->year <= 5; $this->year++) {
            $sheets[] = new ReportePorHoja($this->year);
        }
//        $sheets[] = User::query()->where('is_admin',0);
//        $sheets[] = Preguntas::query()->where('peso','>',1);

        return $sheets;
    }
}
