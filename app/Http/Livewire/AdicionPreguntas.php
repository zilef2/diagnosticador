<?php

namespace App\Http\Livewire;

use App\FactorClaveExito;
use App\FactorInterno;
use App\Sector_economico;
use Livewire\Component;
use Carbon\Carbon;

class AdicionPreguntas extends Component
{

//    recivo del form anterior
    public $FI_nombre;
    public $num_preguntas;

    //vista= Agregar_preguntas
    public $SE;
    public $FCE;
    public $num_FI;
    public $num_FCE;


    public function guardar_preguntas2(){
        foreach ($this->FCE as $j => $fces) {
            $factorC=FactorClaveExito::create([
                'nombre' => $fces,
            ]);

            $FI_peso = session('FI_peso');
//            dd($FI_peso);
            foreach ($FI_peso as $i => $fis) {
                FactorInterno::create([
                    'nombre' => $this->FI_nombre[$i],
                    'calificacion' => 0,
                    'peso' => $FI_peso[$i],
                    'factor_clave_exito_id' => $factorC->id
                ]);
            }
        }
    }

    public function render(){
        $Diahoy=Carbon::now()->setTimezone('-5')->format('d-m-Y');
        return view('livewire.adicion-preguntas',[
            'Diahoy'=>$Diahoy,
            'FI_nombre'=>$this->FI_nombre,
            'num_preguntas'=>$this->num_preguntas,
        ]);
    }
}
