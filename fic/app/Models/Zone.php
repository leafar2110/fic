<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;

    public static function get_name_zone_by_id($id)
    {
        $result = self::query()->select('zones.name')->where('zones.id', $id)->get()->first();
        return $result;
    }
}
