<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requisitante;
use App\Http\Requests\RequisitanteRequests;
use Input;

class RequisitanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $req = Requisitante::all();
        return view ('requisitante.index',['reqs'=>$req]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('requisitante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequisitanteRequests $request)
    {
        $input = $request->all();
        Requisitante::create($input);

        return redirect()->action('RequisitanteController@index');
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
        $reqs = Requisitante::find($id);

        return view('requisitante.edit', compact('reqs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $req = Requisitante::find($id);
        $req->nome         = Input::get('nome');
        $req->email        = Input::get('email');
        $req->telefone     = Input::get('telefone');
        $req->celular      = Input::get('celular');
        $req->save();

        return redirect()->action('RequisitanteController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Requisitante::find($id)->delete();

        return redirect()->action('RequisitanteController@index');
    }
}
