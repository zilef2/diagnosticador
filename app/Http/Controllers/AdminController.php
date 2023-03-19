<?php

namespace App\Http\Controllers;

use App\Exports\Exports\TodaBD;
use App\Exports\TBD;
use App\FactorClaveExito;
use App\FactorInterno;
use App\Http\Requests\Validacion_pesos;
use App\Preguntas;
use App\Rules\cien;
use App\Sector_economico;
use App\User;
use Illuminate\Http\Request;
use App\Exports\CalificacionesExport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    public function reporte2(){
        $SE=Sector_economico::all();
        return view('/admin.reporte2')->with('SE',$SE);
    }

    public function reporte3(Request $request){
        $users=User::all();
        $SE_seleccionado=$request->SE;
        session(['SE_id' => $SE_seleccionado]);
        $SE_seleccionado=Sector_economico::find($SE_seleccionado)->nombre;
        session(['SE_nombre' => $SE_seleccionado]);

        return view('/admin.reporte3')->with([
            'users',$users
        ]);
    }

    public function Agregar_items(){return view('/admin.Nuevos_items.Agregar_FI');}

    public function Agregar_item2(Request $request){
        session(['SE' => $request->SE]);
        session(['num_FCE' => $request->num_FCE]);

        return view('/admin.Nuevos_items.Agregar_FIs')->with([
            'SE'=>$request->SE,
            'num_FCE'=>$request->num_FCE,
            ]);
    }

    public function Agregar_item3(Request $request){
        //vectores
        $FCE=$request->FCE;
        $num_FI=$request->num_FI;

        $sugerencia=0;
        for ($i=0;$i<count($num_FI);$i++){
            $sugerencia+=$num_FI[$i];
        }


        //hidden
        session(['FCE' => $request->FCE]);
        session(['num_FI' => $request->num_FI]);
        session(['sugerencia' => $sugerencia]);


        return view('/admin.Nuevos_items.Agregar_FIs2')->with([
            'FCE'=>$FCE,
            'num_FI'=>$num_FI,

        ]);
    }
    public function Agregar_item4(Request $request){
        //vectores
        $FI_nombre=$request->FI_nombre;
        $FI_peso=$request->FI_peso;
        $num_preguntas=$request->num_preguntas;

        session(['FI_peso' => $request->FI_peso]);
        session(['FI_nombre' => $request->FI_nombre]);
        session(['num_preguntas' => $request->num_preguntas]);

        $num_FCE=session('num_FCE');
        $num_FIs=session('num_FI');
        $FCE=session('FCE');

        //validacion de pesos
        //suman el total de pesos de cada FI
        $contador=0;
        $val=[];
        for ($k = 0; $k < ($num_FCE); $k++){
            $val[$k]=0;
        }
        $debe_ser_cien=array_sum($FI_peso);

        //no puede haber pesos de 100
        $estaMalo = false;
        if(count($FI_peso) > 1){
            foreach ($FI_peso as $key => $value) {
                if($value > 100)
                    $estaMalo=true;
            }
        }
            

        if ($debe_ser_cien == 100) {
            if ($estaMalo) {
                return view('/admin.Nuevos_items.Agregar_FIs2')->with([
                    'FCE'=>$FCE,
                    'num_FI'=>$num_FIs,
                    'message2'=>"Los pesos de las Factores Internos deben ser menores a 100"
                ]);
            } else {
                return view('/admin.Nuevos_items.Agregar_preguntas')->with([
                    'FI_nombre' => $FI_nombre,
                    'FI_peso' => $FI_peso,
                    'num_preguntas' => $num_preguntas,

                    'num_FCE' => $num_FCE,
                    'num_FI' => $num_FIs,
                    'FCE' => $FCE,
                ]);
            }
        }else{
            return view('/admin.Nuevos_items.Agregar_FIs2')->with([
                'FCE'=>$FCE,
                'num_FI'=>$num_FIs,
                'message2'=>"Los pesos de las Factores Internos deben sumar 100"
            ]);
        }
    }

    public function Agregar_preguntaf(Validacion_pesos $request){
        $num_FIs=session('num_FI');
        $SE=session('SE');

        $FI_peso = session('FI_peso');
        $FI_nombre = session('FI_nombre');
        $FCE = session('FCE');

        $num_FCE = session('num_FCE');
        $num_FI = session('num_FI');
        $num_preguntas = session('num_preguntas');

        $contador_preg=0; //el vector nombre[] tiene un rango mayor al de $i, por eso tiene q ser un contador independiente
        $contador_fi=0; //mismo caso para vector de los FI
        $valorescien=[];

        //    valores del request
        $nombresin=$request->nombre;
        $pesosin=$request->peso;
        //(1)primero validamos
        for ($k = 0; $k < ($num_FCE); $k++) {
            for ($j = 0; $j < $num_FI[$k]; $j++) {
                $valorescien[]=0;
            }
        }

        for ($k = 0; $k < ($num_FCE); $k++) {
            for ($j = 0; $j < $num_FI[$k]; $j++) {
                for ($i = 0; $i < $num_preguntas[$contador_fi]; $i++) {
                    $valorescien[$contador_fi]+=$pesosin[$contador_preg];
                    $contador_preg++;
                }
                $contador_fi++;
            }
        }
        // dd($valorescien);
        $val2=true;
        
        //Con un solo valor que sea distinto de cien, no se ingresan datos
        $contador_error=0;
        $debe_ser_cien = 0;
        foreach ($valorescien as $vals){
            $contador_error++;
            $debe_ser_cien += intval($vals);
        }
        $val2 = $debe_ser_cien == 100;
        $contador_preg=0;
        $contador_fi=0;

        //(1)luego insertamos en la DB
        if ($val2){

            $sectorE = Sector_economico::create(['nombre' => $SE]);
            for ($k = 0; $k < ($num_FCE); $k++) {
                $factorC = FactorClaveExito::create([
                    'nombre' => $FCE[$k],
                    'se_id' => $sectorE->id,
                ]);

                for ($j = 0; $j < $num_FI[$k]; $j++) {
                    $FACINT = FactorInterno::create([
                        'nombre' => $FI_nombre[$contador_fi],
                        'calificacion' => 0,
                        'peso' => $FI_peso[$contador_fi],
                        'final' => 0,
                        'factor_clave_exito_id' => $factorC->id
                    ]);
                    for ($i = 0; $i < $num_preguntas[$contador_fi]; $i++) {
                        Preguntas::create([
                            'nombre' => $nombresin[$contador_preg],
                            'peso' => $pesosin[$contador_preg],
                            'sector_economico_id' => $sectorE->id,
                            'factor_interno_id' => $FACINT->id,
                        ]);
                        $contador_preg++;
                    }
                    $contador_fi++;
                }
            }
            return view('home')->with(['message' => "Variables agregadas correctamente"]);
        } else{
            return view('/admin.Nuevos_items.Agregar_preguntas')->with([
                'FI_nombre'=>$FI_nombre,
                'FI_peso'=>$FI_peso,
                'num_preguntas'=>$num_preguntas,

                'num_FCE'=>$num_FCE,
                'num_FI'=>$num_FIs,
                'FCE'=>$FCE,
                'message2'=>"Los pesos de las preguntas deben sumar 100. Por favor, revise el Factor externo #".$contador_error
            ]);
        }
    }


    public function Listar_preguntas(){return view('/admin.listar.Listar_preguntas');}

    public function export(){
        Excel::store(new CalificacionesExport, 'users.xlsx','public');
    //    Excel::store(new CalificacionesExport, 'users.csv','public');
        return Excel::download(new CalificacionesExport, 'Reporte.xlsx');
    }
    public function export2(){
    //    return Excel::download(new TodaBD, 'users.xlsx');
        return (new TBD(2020))->download('TODA_LA_BD.xlsx');
    }

    public function pregunta_update(Request $request){
        return view('admin.listar.edit_pregunta')->with([
            'id'=>$request->id
        ]);
    }


    public function permisos()
    {
        $user=User::query()->where('is_admin',0)->get();
        $user_admin=User::query()->where('is_admin',1)->get();
        return view('admin.Superadmin.permisos')->with([
            'users'=>$user,
            'users_admin'=>$user_admin
        ]);
    }
}
