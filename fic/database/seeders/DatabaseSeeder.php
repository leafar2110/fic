<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        $rubros = [
            [
                "id"   => 1,
                "name" =>"Pastelería",
                "created_at" => $now,
            ],
            [
                "id"   => 2,
                "name" => "Minimarket",
                "created_at" => $now,
            ],
            [
                "id"   => 3,
                "name" => "Electrónica",
                "created_at" => $now,
            ],
        ];
        $comunas = [
            [
                "id"   => 1,
                "name" =>"Las Condes",
                "created_at" => $now,
            ],
            [
                "id"   => 2,
                "name" => "Puente Alto",
                "created_at" => $now,
            ],
            [
                "id"   => 3,
                "name" => "La Florida",
                "created_at" => $now,
            ],
        ];
        $documentos = [
            [
                "id"   => 1,
                "name" =>"Permiso de obras",
                "created_at" => $now,
            ],
            [
                "id"   => 2,
                "name" => "Permiso de operatividad",
                "created_at" => $now,
            ],
            [
                "id"   => 3,
                "name" => "Conformación de la sociedad",
                "created_at" => $now,
            ],
            [
                "id"   => 4,
                "name" =>"Permiso de manufactura de alimentos",
                "created_at" => $now,
            ],
            [
                "id"   => 5,
                "name" => "Permiso de autorización Sanitaria",
                "created_at" => $now,
            ],
            [
                "id"   => 6,
                "name" => "Permisos de importación",
                "created_at" => $now,
            ],
            [
                "id"   => 7,
                "name" =>"Patentes legales de productos en venta",
                "created_at" => $now,
            ],
            [
                "id"   => 8,
                "name" => "Permiso de manipulación de alimentos",
                "created_at" => $now,
            ],
            [
                "id"   => 9,
                "name" => "Cédula de identidad",
                "created_at" => $now,
            ],
            [
                "id"   => 10,
                "name" =>"Patente de manufactura de proveedores",
                "created_at" => $now,
            ],
            [
                "id"   => 11,
                "name" => "Copia de traslado inicial de mercaderías y manual de buenas prácticas para la comercialización de productos",
                "created_at" => $now,
            ],
        ];
        $relations = [
            1 => [ // ID rubro Pasteleria
                1 => [4, 5], // ID comunas -> ID documentos,
                2 => [4, 5, 9],
                3 => [4, 5, 9],
            ],
            2 => [ // ID rubro Minimarket
                1 => [1, 2, 3],
                2 => [1, 3, 8],
                3 => [9, 11]
            ],
            3 => [ // ID rubro Electrónica
                1 => [6,7],
                2 => [6, 10],
                3 => [6, 9, 10]
            ],
        ];
        $documentos_asociados = self::create_relations_documents($relations);

        DB::table('rubros')->insert($rubros);
        DB::table('comunas')->insert($comunas);
        DB::table('documentos')->insert($documentos);
        DB::table('documentos_asociados')->insert($documentos_asociados);
    }

    public static function create_relations_documents($arrs){
        $result = [];
        foreach($arrs as $key_rubro => $value_rubros){
            foreach($value_rubros as $key_comuna => $value_comunas){
                foreach($value_comunas as $key_documento){
                    $result[] = [
                            'rubro_id'     => $key_rubro,
                            'comuna_id'    => $key_comuna,
                            'documento_id' => $key_documento,
                            "created_at"   => Carbon::now(),
                    ];
                }
            }
        }
        return $result;
    }
}
