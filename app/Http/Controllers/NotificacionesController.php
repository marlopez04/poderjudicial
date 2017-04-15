<?php

namespace App\Http\Controllers;

use App\Notificacion;
use App\NotificacionHistorial;
use App\NotificacionComentario;
use App\User;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class NotificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /*  $notificaciones = Notificacion::orderBy('id', 'DESC')->paginate(10);
        */

        
        $id_user = \Auth::user()->id; 

        $entrantes = Notificacion::where('destinatario',$id_user)
            ->get();
        $entrantes->load('user');

        $salientes = Notificacion::where('id_user',$id_user)
            ->get();
        $salientes->load('user');

        $users = User::all();

        return view('front.notificaciones.index')
            ->with('salientes', $salientes)
            ->with('users', $users)
            ->with('entrantes', $entrantes);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('front.notificaciones.create')
            ->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $notificacion = new Notificacion($request->all());
        $notificacion ->id_user = \Auth::user()->id; 
        $notificacion -> save();

        Flash::success("Se ha registrado " . $notificacion->nombre. " de forma exitosa.");
        return redirect()->route('notificaciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notificacion = Notificacion::find($id);

        $user_id = \Auth::user()->id;
        $notificacion->load('user', 'notificacioncomentarios', 'notificacionhistorial');
        $notificacion->notificacionhistorial->load('user');

        foreach ($notificacion->notificacionhistorial as $historial){
            if ( $user_id == $historial->user_id){
                $hid = $historial->id;
                $notificacionhistorial = NotificacionHistorial::find($hid);
                $notificacionhistorial->delete();
            }
        }

        $notificacionhistorial = new NotificacionHistorial();
        $notificacionhistorial->notificacion_id = $id;
        $notificacionhistorial->user_id = $user_id;
        $notificacionhistorial -> save();

/*
*/
        $notificacion->load('user', 'notificacioncomentarios', 'notificacionhistorial');

/*

        dd($notificacion);
*/

        $users = User::orderBy('id', 'DESC')->paginate(20);

        return view('front.notificaciones.show')
            ->with('notificacion', $notificacion)
            ->with('users', $users);
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
