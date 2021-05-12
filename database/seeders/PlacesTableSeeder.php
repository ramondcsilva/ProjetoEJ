<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlacesTableSeeder extends Seeder
{
    static $statesName = [
        "Acre",
        "Alagoas",
        "Amapá",
        "Amazonas", 
        "Bahia", 
        "Ceará", 
        "Distrito Federal",
        "Espírito Santo",
        "Goiás",
        "Maranhão",
        "Mato Grosso",
        "Mato Grosso do Sul",
        "Minas Gerais",
        "Pará", 
        "Paraíba", 
        "Paraná", 
        "Pernambuco",
        "Piauí", "sigla",
        "Rio de Janeiro",
        "Rio Grande do Norte",
        "Rio Grande",
        "Rondônia",
        "Roraima",
        "Santa Catarina",
        "São Paulo",
        "Sergipe",
        "Tocantins"
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$statesName as $state) {
            DB::table('states')->insert([
                'name' => $state,
            ]);
        }
    }
}
