<?php

namespace App\Http\Controllers\Panel\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Indice;
use App\Models\Marca;

class MarcaController extends Controller
{
    private $marca;
    public function __construct(Marca $marca)
    {
        $this->marca = $marca;
    }
    public function slug($slug)
    {
        $marca = $this->marca->where('slug', $slug)->first();
        $modelos = $marca->modelos()->pluck('name', 'id');
        $indices = [];
        return view('panel.admin.pages.marca.index', compact('marca', 'modelos', 'indices'));
    }

    public function result(Request $request)
    {
        $marca = $this->marca->where('id', $request->marca)->first();
        $modelos = $marca->modelos()->pluck('name', 'id');
       
        $indices = Indice::where('title', 'LIKE', '%'.$request->value.'%')->where('modelo_id', $request->modelo)->get();
        return view('panel.admin.pages.marca.index', compact('marca', 'modelos', 'indices'));
    }
}
