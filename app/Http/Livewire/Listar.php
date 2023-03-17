<?php

namespace App\Http\Livewire;

use App\FactorClaveExito;
use App\FactorInterno;
use App\Preguntas;
use App\Sector_economico;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Listar extends Component
{
    /**
     * @var mixed
     */
    public $nombre;
    public $selected_id;

    /**
     * @var bool
     */
    public $updateMode = false;

    public function edit($id)
    {
        $record = Preguntas::findOrFail($id);
        $this->selected_id = $id;
        $this->nombre = $record->nombre;
        $this->updateMode = true;
    }

    public function update(){
        $this->validate([
            'selected_id' => 'required|numeric',
            'nombre' => 'required|min:5',
        ]);
        if ($this->selected_id) {
            $record = Preguntas::find($this->selected_id);
            $record->update([
                'nombre' => $this->nombre,
            ]);
            $this->nombre = null;
            $this->updateMode = false;
        }
    }

    public function render()
    {
        $sector=DB::table('sector_economico')->get();

        foreach ($sector as $secto){
            $los_FCE[]=DB::table('factor_clave_exito')
                ->where('se_id',$secto->id)
                ->get();
        }


        foreach ($los_FCE as $i=>$vec_FCE){
            foreach ($vec_FCE as $vec_FC){
                $los_FI[$i][]=DB::table('factor_interno')
                    ->where('factor_clave_exito_id',$vec_FC->id)
                    ->get();
            }
        }

        foreach ($los_FI as $i=>$vec_FI){
            foreach ($vec_FI as $j=>$mini_fis ){
                foreach ($mini_fis as $k=>$mini_fi ){
                    $los_pregun[$i][$j][]=DB::table('preguntas')
                        ->where('factor_interno_id',$mini_fi->id)
                        ->get();
                }
            }
        }

        return view('livewire.listar',[
            'sector' => $sector,
            'los_FCE' => $los_FCE,
            'los_FI' => $los_FI,
            'los_pregun' => $los_pregun,
        ]);
    }
}
