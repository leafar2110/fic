<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Zone;
use App\Models\Document;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\FormalizateForm;

class PageController extends Controller
{
    public function home(){
        return view('formalization/home');
    }

    public function form(){

        $categories = Category::get();
        $zones = Zone::get();

        return view('formalization/form', [
           "zones"      => $zones,
           "categories" => $categories
        ]);
    }

    public function results(FormalizateForm $request){

        $zone = $request->input('zone');
        $category = $request->input('category');

        $result = Document::query()
                    ->join('associated_documents', 'documents.id', '=', 'associated_documents.document_id' )
                    ->join('zones', 'associated_documents.zone_id', '=', 'zones.id'  )
                    ->join('categories', 'associated_documents.category_id', '=', 'categories.id' )
                    ->where('associated_documents.category_id', $category)
                    ->where('associated_documents.zone_id', $zone)
                    ->select('documents.name')
                    ->get();

        return view('formalization/results', [
                        "result"  => $result,
                     ]);
    }
}
