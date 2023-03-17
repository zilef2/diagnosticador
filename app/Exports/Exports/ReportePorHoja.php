<?php

namespace App\Exports\Exports;

use App\FactorClaveExito;
use App\FactorInterno;
use App\Preguntas;
use App\Sector_economico;
use App\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;

class ReportePorHoja implements FromView, WithTitle,ShouldAutoSize,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    private $year;
    private $nombre_tabla;

    public function __construct(int $year)
    {
        $this->year  = $year;
        if ($year==0) $this->nombre_tabla = "Usuarios";
        if ($year==1) $this->nombre_tabla = "Preguntas";
        if ($year==2) $this->nombre_tabla = "Factor Clave Exito";
        if ($year==3) $this->nombre_tabla = "Factor interno";
        if ($year==4) $this->nombre_tabla = "Sector economico";
        if ($year==5) $this->nombre_tabla = "Respuestas";

    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $tontion="";
        if ($this->year==0){
            $tontion= User::query()->where('is_admin', 0);
        }
        if ($this->year==1){
            $tontion= Preguntas::query()->where('peso','>',1);

        }
        if ($this->year==2){
            $tontion= FactorClaveExito::query()->where('id','>',0);
        }
        if ($this->year==3){
            $tontion= User::find(2)->respuestas();
            dd($tontion);
        }
        return $tontion;
    }

    /**
     * @return string
     */
    public function title(): string{return $this->nombre_tabla;}

    public function headings(): array{
        return [
            'Id',
            'creado en',
            'Department'
        ];
    }

    public function view(): View
    {
        if ($this->year==0) {
            $modelo_vista = view('admin.Exportar_DB.export', [
                'users' => User::all(),
//                'preguntas' => Preguntas::all(),
            ]);
        }

        if ($this->year==1) {
            $modelo_vista = view('admin.Exportar_DB.export', [
                    'preguntas' => Preguntas::all()
            ]);
        }

        if ($this->year==2) {
            $modelo_vista = view('admin.Exportar_DB.export', [
                'factor_clave_exito' => FactorClaveExito::all(),

            ]);
        }

        if ($this->year==3) {
            $modelo_vista = view('admin.Exportar_DB.export', [
                'factor_interno' => FactorInterno::all(),
            ]);
        }

        if ($this->year==4) {
            $modelo_vista = view('admin.Exportar_DB.export', [
                'Sector_economico' => Sector_economico::all(),

            ]);
        }

        if ($this->year==5) {
            $modelo_vista = view('admin.Exportar_DB.export', [
                'Respuestas' => DB::table('user_preguntas')->get(),

            ]);
        }




        return $modelo_vista;
    }
}
