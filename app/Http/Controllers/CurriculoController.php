<?php

namespace App\Http\Controllers;

use App\Models\Curriculo;
use Illuminate\Http\Request;

class CurriculoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $curriculos = Curriculo::where('user_id', $user_id)->get();

        return view('curriculo.index', ['curriculos' => $curriculos]); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('curriculo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Curriculo $curriculo)
    {

        
        $dados = $request->validate($curriculo->rules(), $curriculo->feedback());
        $dados['user_id'] = auth()->user()->id;
        Curriculo::create($dados);
        
        return redirect()->route('curriculo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curriculo  $curriculo
     * @return \Illuminate\Http\Response
     */
    public function show(Curriculo $curriculo)
    {
        return view('curriculo.show', ['curriculo' => $curriculo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curriculo  $curriculo
     * @return \Illuminate\Http\Response
     */
    public function edit(Curriculo $curriculo)
    {
        $user_id = auth()->user()->id;

        if ($curriculo->user_id == $user_id ) {
             return view('curriculo.editar',['curriculo' => $curriculo]);
        }
        return view('acesso-negado');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Curriculo  $curriculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curriculo $curriculo)
    {
        $dados =  $request->validate($curriculo->rules(), $curriculo->feedback());

        if (auth()->user()->id == $curriculo->user_id) {

            $curriculo->update($dados);
                    
            return redirect()->route('curriculo.index');
        }
        return view('acesso-negado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curriculo  $curriculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curriculo $curriculo)
    {
        if (auth()->user()->id == $curriculo->user_id) {
            $curriculo->delete();
            return redirect()->route('curriculo.index');
        }
        return view('acesso-negado');
    }
}
