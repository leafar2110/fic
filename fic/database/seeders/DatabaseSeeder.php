<?php

namespace Database\Seeders;

use App\Models\User;
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
        $categories = [
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
        $zones = [
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
        $documents = [
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
            1 => [ // ID category Pasteleria
                1 => [4, 5], // ID zones -> ID documents,
                2 => [4, 5, 9],
                3 => [4, 5, 9],
            ],
            2 => [ // ID category Minimarket
                1 => [1, 2, 3],
                2 => [1, 3, 8],
                3 => [9, 11]
            ],
            3 => [ // ID category Electrónica
                1 => [6,7],
                2 => [6, 10],
                3 => [6, 9, 10]
            ],
        ];
        $associated_documents = self::create_relations_documents($relations);

        DB::table('categories')->insert($categories);
        DB::table('zones')->insert($zones);
        DB::table('documents')->insert($documents);
        DB::table('associated_documents')->insert($associated_documents);
        User::Factory(1)->create();
    }

    public static function create_relations_documents($arrs){
        $result = [];
        foreach($arrs as $key_category => $value_categories){
            foreach($value_categories as $key_zone => $value_zones){
                foreach($value_zones as $key_document){
                    $result[] = [
                            'category_id' => $key_category,
                            'zone_id'     => $key_zone,
                            'document_id' => $key_document,
                            "created_at"  => Carbon::now(),
                    ];
                }
            }
        }
        return $result;
    }
}
