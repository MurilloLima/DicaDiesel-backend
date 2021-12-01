<?php

namespace App\Http\Controllers\Panel\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\IndiceRequest;
use App\Models\Indice;
use App\Models\Modelo;

class IndiceController extends Controller
{
    private $modelo;
    private $indice;

    public function __construct(Modelo $modelo, Indice $indice)
    {
        $this->modelo = $modelo;
        $this->indice = $indice;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data = $this->indice->where('modelo_id', $id)->paginate();
        return view('panel.dashboard.pages.indices.index', compact('data', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IndiceRequest $request)
    {
        $this->indice->create($request->all());
        return redirect()->back()->with('success', 'Cadastrado com sucesso.');
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->indice->find($id);
        $data->update($request->all());
        return redirect()->back()->with('success', 'Atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $this->indice->destroy($id);
        return redirect()->back()->with('success', 'Deletado com sucesso.');
    }
}
