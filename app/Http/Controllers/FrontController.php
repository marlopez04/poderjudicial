<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NoticiaComentario;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Noticia;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //uso el campo update para controlar el logueo del usuario
        $user_id = \Auth::user()->id;
        $user = User::find($user_id);

        $noticias = Noticia::orderBy('id', 'DESC')->paginate(10);

        //tengo que probar armar 2 variables (en el controlador) p
        //ara saber cuales son los leidos y cuantos mensajes tiene cada uno sin leer

        $noticias->load('user', 'noticiahistorial', 'noticiacomentarios');

        return view('front.index')
            ->with('noticias', $noticias)
            ->with('user', $user);
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
