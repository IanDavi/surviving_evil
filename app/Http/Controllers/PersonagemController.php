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
        return view('personagem.cad_personagem');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //$personagens = \App\Personagem::orderBy('id','cres')->paginate(4);
        $personagens = DB::select('select * from personagems;');

        return view('personagem.mostrar')->with('personagens', $personagens);
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
        

        DB::insert("insert into personagems values (default, LAST_INSERT_ID(), '$nome', '$forca', '$agilidade', '$precisao', '$estamina', '$furtividade')");
        

        return redirect()->to(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //NÃO FUNCIONA
    public function mostrar(){
        $personagens = DB::table('personagems')->get();

        return view('personagem.mostrar', compact($personagens));
    }

    //NÃO FUNCIONA
    public function show()
    {
        //

        $personagens = DB::table('personagems')->get();

        return view('personagem.mostrar', compact($personagens));
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
