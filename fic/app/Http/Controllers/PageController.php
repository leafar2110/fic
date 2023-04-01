<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Zone;
use App\Models\Document;
use App\Http\Requests\FormalizateFormRequest;

class PageController extends Controller
{
    /**
     * Redirige a la pagina de inicio
     */
    public function home()
    {
        return view('formalization/home');
    }

    /**
     * Redirige a la pagina de formulario y envia la data
     * para alimentar el select de rubros y comunas
     */
    public function form()
    {
        return view('formalization/form', [
           "categories" => Category::get(), // Rubros
           "zones"      => Zone::get(), // Comunas
        ]);
    }

    /**
     * Redirige a la pagina de resultados y envia la data
     * con los documentos necesarios segun la combinacion de rubro y comuna
     */
    public function results(FormalizateFormRequest $request)
    {
        $data = $request->all();
        return view('formalization/results', [
            "documents"  => Document::get_documents_name_by_zone_and_category($data),
            "category"   => Category::get_name_category_by_id($data['category']),
            "zone"       => Zone::get_name_zone_by_id($data['zone']),
        ]);
    }
}
