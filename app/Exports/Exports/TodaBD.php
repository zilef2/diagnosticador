<?php

namespace App\Exports\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

use App\User;

class TodaBD implements FromCollection
{
    public function collection()
    {
        return User::all();
    }
}
