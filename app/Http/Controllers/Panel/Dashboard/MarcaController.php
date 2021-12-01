<?php

namespace App\Http\Controllers\Panel\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MarcaRequest;
use App\Models\Marca;

class MarcaController extends Controller
{
    private $marca;
    public function __construct(Marca $marca)
    {
        $this->marca = $marca;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data  = $this->marca->orderby('name', 'asc')->paginate();
        return view('panel.dashboard.pages.marcas.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.dashboard.pages.marcas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MarcaRequest $request)
    {
        $this->marca->create($request->all());
        return redirect()->route('marca.index')->with('success', 'Cadastrado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->marca->find($id);
        return view('panel.dashboard.pages.marcas.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->marca->find($id);
        $data->update($request->all());
        return redirect()->route('marca.index')->with('success', 'Atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $this->marca->destroy($id);
        return redirect()->back()->with('success', 'Deletado com sucesso!');
    }
}
