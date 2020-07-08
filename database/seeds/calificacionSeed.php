<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class calificacionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('calificacions')->insert([
            'calf_nombre'=>"Sobresaliente",
            'calf_descripcion'=>"Muy Bueno",
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),

        ]);

        DB::table('calificacions')->insert([
            'calf_nombre'=>"Muy Bueno",
            'calf_descripcion'=>"Muy Bueno",
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),

        ]);

        DB::table('calificacions')->insert([
            'calf_nombre'=>"Bueno",
            'calf_descripcion'=>"Muy Bueno",
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),

        ]);


        DB::table('roles')->insert([
            'name'=>"admin",
            'description'=>"admin",
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),

        ]);

        DB::table('roles')->insert([
            'name'=>"user",
            'description'=>"user",
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),

        ]);








    }
}
