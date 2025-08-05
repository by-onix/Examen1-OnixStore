<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('marcas')->insert([
            [
                'nombre'=>'Razer',
                'descripcion'=>'mouse gamer razer onikuma',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'nombre'=>'logitech',
                'descripcion'=>'camara web C270',
                'created_at'=>now(),
                'updated_at'=>now(),
         ]
]);
    }
}
