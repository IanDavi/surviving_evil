<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PersonagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('cad_personagem');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $nome = Input::get('nome');
        $forca = Input::get('forca');
        $agilidade = Input::get('agilidade');
        $precisao = Input::get('precisao');
        $estamina = Input::get('estamina');
        $furtividade = Input::get('furtividade');

        //Código pra pegar o último id inserido
        //$jogador_id = DB::table('users')-> selectRaw('max(id)')-> get();


        //$jogador_id = DB::table('users')->select('max(id)');

        DB::insert("insert into personagems values (default, 14, '$nome', '$forca', '$agilidade', '$precisao', '$estamina', '$furtividade')");
        

        DB::insert("insert into jogadors values (14)");

        return redirect()->to(route('home'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
