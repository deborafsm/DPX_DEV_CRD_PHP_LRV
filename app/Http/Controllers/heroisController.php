<?php

namespace App\Http\Controllers;

use App\Models\herois;
use Illuminate\Http\Request;

class heroisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $herois = Herois::latest()->paginate(5);
        return view('herois.index', compact('herois'))->with(request()->input('page'));
        
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Retorna a view Create
        return view('herois.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validar os Inputs
        $request->validate([
            'nome'=>'required',
            'classe'=>'required'
        ]);
        //Criar novo heroi no banco de dados
        Herois::create($request->all());
        //Redirecionar o usuário e enviar uma mensagem de sucesso ou erro
        return redirect()->route('herois.index')->with('success','Heroi criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\herois  $herois
     * @return \Illuminate\Http\Response
     */
    public function show(herois $herois)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\herois  $herois
     * @return \Illuminate\Http\Response
     */
    public function edit(herois $herois)
    {
        //Retorna a view de edicao
        return view('herois.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\herois  $herois
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, herois $herois)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\herois  $herois
     * @return \Illuminate\Http\Response
     */
    public function destroy(herois $herois)
    {
        //
    }
}
