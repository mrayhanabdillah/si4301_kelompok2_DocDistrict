<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\docs_model;
use App\Models\users_model;

class doc_controller extends Controller
{
    public function show(Request $request)
    {   
        $id_doc = request()->get('id_doc');
        $id = session('id');
        $user = users_model::where('id',$id)->firstOrFail();
        $docs = docs_model::where('id_doc',$id_doc)->firstOrFail();
        return view('doc.doc', compact('docs','user'));
    }
}
