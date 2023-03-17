<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //Sector economicos
        DB::table('sector_economico')->insert(['nombre' => 'Comunicacion']);

        //Factor Clave de Exito
        DB::table('factor_clave_exito')->insert([
            'nombre' => "PLANEAMIENTO ESTRATÉGICO",
            'se_id'=>1
        ]);
        DB::table('factor_clave_exito')->insert([
            'nombre' => "LOGÍSTICA Y OPERACIONES",
            'se_id'=>1
        ]);

        //Factores Internos
        DB::table('factor_interno')->insert([
            'nombre' => "PROCESO DE PLANEAMIENTO ESTRATÉGICO",
            'peso' => 10,
            'calificacion' => 0,
            'final'=>0,
            'factor_clave_exito_id' => 1,
            ]);
        DB::table('factor_interno')->insert([
            'nombre' => "PLANIFICACIÓN Y PROCESO DE PRODUCCIÓN ",
            'peso' => 10,
            'calificacion' => 0,
            'final'=>0,
            'factor_clave_exito_id' => 2,
        ]);
        DB::table('factor_interno')->insert([
                'nombre' => "CAPACIDAD DEL PROCESO  DE PRODUCCIÓN ",
                'peso' => 10,
                'calificacion' => 0,
                'final'=>0,
                'factor_clave_exito_id' => 2,
        ]);


        //usuarios
        DB::table('users')->insert([
            'name' => "Alejo",
            'email' => "ajelof2@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('laravel'),
            'remember_token' => Str::random(10),
            'empresa' => $faker->word,
            'cargo' => $faker->randomElement($array = array ('ejecutivo','secretario')),
            'sector_id' => $faker->numberBetween($min=1,$max=1),
            'is_admin' => 1,
        ]);

//        empieza preguntas
        DB::table('preguntas')->insert([
            'nombre' => 'La empresa ha realizado un proceso de planeamiento estratégico en los últimos dos años',
            'factor_interno_id' => 1,
            'peso' => 10,
            'sector_economico_id' => 1,
        ]);
        DB::table('preguntas')->insert([
            'nombre' => 'La empresa tiene una estrategia básica de negocios escrita y conocida por todos los que deben ejecutarla.',
            'factor_interno_id' => 1,
            'peso' => 10,
            'sector_economico_id' => 1,
        ]);
        DB::table('preguntas')->insert([
            'nombre' => 'El proceso de producción de la empresa es adecuado para fabricar productos con calidad y costos competitivos. ',
            'factor_interno_id' => 2,
            'peso' => 10,
            'sector_economico_id' => 1,
        ]);
        DB::table('preguntas')->insert([
            'nombre' => 'La empresa conoce la capacidad de producción de su maquinaria y equipo por cada línea de producción y de su recurso humano y define el rango deseado de su utilización.',
            'factor_interno_id' => 3,
            'peso' => 10,
            'sector_economico_id' => 1,
        ]);
        DB::table('preguntas')->insert([
            'nombre' => 'La empresa tiene planes de contingencia para ampliar su capacidad de producción más allá de su potencial actual para responder a una demanda superior a su capacidad de producción.',
            'factor_interno_id' => 3,
            'peso' => 10,
            'sector_economico_id' => 1,
        ]);
//        DB::table('preguntas')->insert([
//            'nombre' => 'La empresa tiene planes de contingencia para ampliar su capacidad de producción más allá de su potencial actual para responder a una demanda superior a su capacidad de producción.',
//            'factor_interno_id' => 3,
//            'peso' => 10,
//            'sector_economico_id' => 2,
//        ]);
         $this->call(Userstableseeder::class);

//         preguntas->sector economico
//        DB::table('sector_preguntas')->insert(['pregunta_id' => 1, 'sector_economico_id' => 1,]);
//        DB::table('sector_preguntas')->insert(['pregunta_id' => 2, 'sector_economico_id' => 1,]);
//        DB::table('sector_preguntas')->insert(['pregunta_id' => 3, 'sector_economico_id' => 1,]);
//        DB::table('sector_preguntas')->insert(['pregunta_id' => 4, 'sector_economico_id' => 1,]);
//        DB::table('sector_preguntas')->insert(['pregunta_id' => 5, 'sector_economico_id' => 1,]);

        //sector_preguntas  (cada pregunta debe tener un sector asociado)

    }
}
