<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Papel;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $caminhos = [
            ['url'=>'/admin', 'titulo'=>'Pagina Principal'],
            ['url'=>'', 'titulo'=>'Usuários']
        ];        
        $usuarios = User::all();
        return view('admin.usuarios.index', compact('caminhos','usuarios'));
    }


    public function papel($id)
    {
        $usuario = User::find($id);
        $papeis = Papel::all();
        $caminhos = [
            ['url'=>'/admin','titulo'=>'Admin'],
            ['url'=>route('usuarios.index'),'titulo'=>'Usuários'],
            ['url'=>'','titulo'=>'Papel'],
        ];
        return view('admin.usuarios.papel',compact('usuario','papeis','caminhos'));
    } 

    public function papelStore()
    {

    }

    public function papelDestroy()
    {

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
        //
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
