<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;

    /**
     * Recibe el ID de la comuna y retorna los nombre
     *
     * @param int $id
     * @return object
     */
    public static function get_name_zone_by_id(int $id): object
    {
        $result = self::query()->select('zones.name')->where('zones.id', $id)->get()->first();
        return $result;
    }
}
