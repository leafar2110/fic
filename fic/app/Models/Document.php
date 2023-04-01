<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    /**
     * Recibe un array con el ID del rubro y el ID de la comuna
     * y retorna los nombres de los documentos
     *
     * @param array $data
     * @return object
     */
    public static function get_documents_name_by_zone_and_category(array $data): object
    {
        $result = self::query()
                ->join('associated_documents', 'documents.id', '=', 'associated_documents.document_id' )
                ->join('zones', 'associated_documents.zone_id', '=', 'zones.id'  )
                ->join('categories', 'associated_documents.category_id', '=', 'categories.id' )
                ->where('associated_documents.category_id', $data['category'])
                ->where('associated_documents.zone_id', $data['zone'])
                ->select('documents.name')
                ->get();
        return $result;
    }

}
