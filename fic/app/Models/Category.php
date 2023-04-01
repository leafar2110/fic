<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * Recibe el ID del rubro y retorna los nombre
     *
     * @param int $id
     * @return object
     */
    public static function get_name_category_by_id(int $id): object
    {
        $result = self::query()->select('categories.name')->where('categories.id', $id)->get()->first();
        return $result;
    }
}
