<?php

namespace App\Http\Livewire;

use App\FactorInterno;
use App\Preguntas;
use Illuminate\Pagination\Paginator;
use Livewire\Component;
use Livewire\WithPagination;
use App\User;
use Illuminate\Support\Facades\DB;

class Counter extends Component{
use WithPagination;

    protected $paginationTheme = 'bootstrap';
//    Parametros para FI
    public $search='';
    public $sortAsc;
    public $campoOrdenado="id";
    public $perpage=20;

//    Parametros para Preguntas
    public $searchP='';
    public $sortAscP;
    public $campoOrdenadoP="nombre";
    public $perpageP=10;

    //    editar variables
//    public $sector=session('');
    public $selected_id;
    public $nombre;
    public $updateMode = false;


    //funcion de la paginacion
    public function updatingSearch(){$this->resetPage();}

//
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

        //ordenar para los FI
    public function sortBy($atribute){
        if ($this->campoOrdenado===$atribute){
            $this->sortAsc = !$this->sortAsc;
        }else{
            $this->sortAsc=true;
        }
        $this->campoOrdenado=$atribute;
    }

    //ordenar LAS PREGUNTAS
    public function sortByp($atributep){
        if ($this->campoOrdenadoP===$atributep){
            $this->sortAscP = !$this->sortAscP;
        }else{
            $this->sortAscP=true;
        }
        $this->campoOrdenadoP=$atributep;
    }

    public function setpage($url){
        $this->perpage=explode('page=',$url)[0];
        Paginator::currentPageResolver(function (){
            return $this->perpage;
        });
    }

    //MIS FUNCIONES
    //FIN MIS FUNCIONES

    public function render(){
        $vector_FX=[];
        $vector_FX1=[];
        $sector=session('SE_id');
        //nuevos
        $los_FCE=DB::table('factor_clave_exito')
            ->where('se_id',$sector)
            ->get();

        //        obtenemos todas las respuestas
        $casi_respuestas=DB::table('user_preguntas')->get();

        //        comprobamos si hay almenos 1 pregunta en el SE
        $temp2=DB::table('preguntas')
            ->where('sector_economico_id',$sector)
            ->get()[0]->id; //la primera pregunta del SE
        $hay_respuestas=false;
        foreach ($casi_respuestas as $resp){
            if ($resp->pregunta_id==$temp2){
                $hay_respuestas=true;
                break;
            }
        }

        if ($hay_respuestas){
        foreach ($los_FCE as $vec_FCE){
            $temp=DB::table('factor_interno')
                ->where('factor_clave_exito_id',$vec_FCE->id)
                ->get();
            $los_FI[]=$temp;
            $n_FI[]=count($los_FI);
        }

        foreach ($los_FI as $i=>$vec_FI){
            foreach ($vec_FI as $j=>$mini_fis ){
                $temp=DB::table('preguntas')
                    ->where('factor_interno_id',$mini_fis->id)
                    ->get();
                $los_pregun[$i][$j]=$temp;

                //primero establesco todos los valores de la matriz en 0
                foreach ($los_pregun[$i][$j] as $los_pregu){
                        $los_proms_preguntas[$i][$j][]=0;
                        $cont_prom[$i][$j][]=0;
                }
                //luego sumamos los valores de todas las preguntas

                foreach ($los_pregun[$i][$j] as $k=>$los_pregu){
                    foreach ($casi_respuestas as $casi_respuesta) {
                        if ($casi_respuesta->pregunta_id == $los_pregu->id) {
                            $los_proms_preguntas[$i][$j][$k] += ($los_pregu->peso/100) * $casi_respuesta->value;
                            $cont_prom[$i][$j][$k] += 1;
                        }
                    }
                }

                //finalmente dividimos pa obtener promedio del FI
                foreach ($los_pregun[$i][$j] as $k=>$los_pregu){
                    $los_proms_preguntas[$i][$j][$k] /=$cont_prom[$i][$j][$k];
                }

                $prom_FI[$i][$j]=0;
                $contador_FI=0;

                foreach ($los_pregun[$i][$j] as $k=>$los_pregu) {
                    $prom_FI[$i][$j]+=$los_proms_preguntas[$i][$j][$k];
                    $contador_FI++;
                }
                $prom_FI[$i][$j]/=$contador_FI;
            }
        }
//            dd($prom_FI);



//
        //vector FX es para cada FI
//        foreach ($Calificacion_FI as $k => $vec) {
//            if($vec!=0){
//                if ($vec<=10){
//                    $vector_calificacion[$k]="DMy";
//                    $vector_FX[$k]=0;
//                    $vector_FX1[$k]=1-$vector_FX[$k];
//                }else{
//                    if ($vec<=20){
//                        $vector_calificacion[$k]="DMn";
//                        $vector_FX[$k]=(20-$vec)/10;
//                        $vector_FX1[$k]=1-$vector_FX[$k];
//                    }else{
//                        if ($vec<=30){
//                            $vector_calificacion[$k]="FMn";
//                            $vector_FX[$k]=(30-$vec)/10;
//                            $vector_FX1[$k]=1-$vector_FX[$k];
//                        }else{
//                            if ($vec<=40){
//                                $vector_calificacion[$k]="FMy";
//                                $vector_FX[$k]=(40-$vec)/10;
//                                $vector_FX1[$k]=1-$vector_FX[$k];
//                            }
//                        }
//                    }
//                }
//            }
//        }


//listo papa
//            dd($prom_FI);

                return view('livewire.counter',[
                        'FI'=>FactorInterno::query()->where('nombre','like','%'.$this->search.'%')

                            ->orderBy($this->campoOrdenado,$this->sortAsc ? 'asc':'desc')
                            ->paginate($this->perpage)
                ],[
                        'preguntas' => Preguntas::query()->where('nombre','like','%'.$this->searchP.'%')
                            ->where('sector_economico_id',session('SE_id'))
                            ->orderBy($this->campoOrdenadoP,$this->sortAscP ? 'asc':'desc')
                            ->paginate($this->perpageP),
                            'los_proms_preguntas' => $los_proms_preguntas, //solo los promedios de los usuarios
                            'los_pregun' => $los_pregun, //vector con nombre y peso
                            'los_FI' => $los_FI, //vector con nombre y peso
                            'los_FCE' => $los_FCE, //vector con nombre y peso
                            'prom_FI' => $prom_FI,

//                        'indices' => $indices,
//
//                        'vector_calificacion' => $vector_calificacion,//errorrrr
//                        'vector_FX' => $vector_FX,
//                        'vector_FX1' => $vector_FX1,
                            'hay_respuestas' => $hay_respuestas,
                ]);
            }else{
            return view('livewire.counter',[
                'hay_respuestas' => $hay_respuestas,
            ]);
        }
    }

    public function downloadready($file){return Storage::download($file);}
}
