<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Zone;
use App\Models\Document;
use App\Http\Requests\FormalizateForm;

class PageController extends Controller
{
    public function home()
    {
        return view('formalization/home');
    }

    public function form()
    {
        return view('formalization/form', [
           "zones"      => Zone::get(),
           "categories" => Category::get()
        ]);
    }

    public function results(FormalizateForm $request)
    {
        $data = $request->all();
        return view('formalization/results', [
            "documents"  => Document::get_documents_name_by_zone_and_category($data),
            "category"   => Category::get_name_category_by_id($data['category']),
            "zone"       => Zone::get_name_zone_by_id($data['zone']),
        ]);
    }
}
