<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livro;
use App\Http\Requests\LivroRequests;
use Input;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = Livro::all();
        return view ('livro.index',['livro'=>$livros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LivroRequests $request)
    {
        $input = $request->all();
        Livro::create($input);

        return redirect()->action('LivroController@index');

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
        $livro = Livro::find($id);

        return view('livro.edit', compact('livro'));
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
        	$livro = Livro::find($id);
            $livro->autor       = Input::get('autor');
            $livro->titulo      = Input::get('titulo');
            $livro->editora     = Input::get('editora');
            $livro->origem      = Input::get('origem');
            $livro->editora     = Input::get('editora');
            $livro->disponivel  = Input::get('disponivel');
            $livro->save();

        return redirect()->action('LivroController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Livro::find($id)->delete();

        return redirect()->action('LivroController@index');

    }
}
?>