<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public static function get_name_category_by_id($id)
    {
        $result = self::query()->select('categories.name')->where('categories.id', $id)->get()->first();
        return $result;
    }
}
