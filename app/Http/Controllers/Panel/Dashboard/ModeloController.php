<?php

namespace App\Http\Controllers\Panel\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ModeloRequest;
use App\Models\Marca;
use App\Models\Modelo;

class ModeloController extends Controller
{
    private $modelo;
    public function __construct(Modelo $modelo)
    {
        $this->modelo = $modelo;
    }

    public function index()
    {
        $data = $this->modelo->orderby('name', 'asc')->paginate();
        return view('panel.dashboard.pages.modelos.index', compact('data'));
    }

    public function create()
    {
        $marca = Marca::orderby('name', 'asc')->pluck('name', 'id');
        return view('panel.dashboard.pages.modelos.create', compact('marca'));
        # code...
    }

    public function store(ModeloRequest $request)
    {
        $this->modelo->create($request->all());
        return redirect()->route('modelo.index')->with('success', 'Cadastrado com sucesso');
    }

    public function edit($id)
    {
        $marca = Marca::orderby('name', 'asc')->pluck('name', 'id');
        $data = $this->modelo->find($id);
        return view('panel.dashboard.pages.modelos.edit', compact('data', 'marca'));
    }

    public function update($id, Request $request)
    {
        $data = $this->modelo->find($id);
        $data->update($request->all());
        return redirect()->route('modelo.index')->with('success', 'Editado com sucesso');

        # code...
    }

    public function delete($id)
    {
        $this->modelo->destroy($id);
        return redirect()->back()->with('success', 'Deletado com sucesso.');
    }
}
