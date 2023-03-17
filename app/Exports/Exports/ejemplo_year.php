<?php

namespace App\Exports\Exports;

use App\User;
use DB;
use Illuminate\Database\Query\Builder;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;

class ejemplo_year implements FromQuery
{

    private $year;
    private $m;
    public function __construct($year,$m){
        $this->year=$year;
        $this->m=$m;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function query()
    {
        $exe=DB::table('users')
//            ->WhereYear('created_at',$this->year)
//            ->WhereMonth('created_at',$this->m)
            ->get()
        ;
        dd($exe);
        return $exe;
    }
}
