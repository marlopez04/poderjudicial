<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Noticia;
use App\NoticiaHistorial;
use App\NoticiaComentario;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('front.noticias.create')
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
        $noticia = new Noticia($request->all());
        $noticia -> save();

        Flash::success("Se ha registrado " . $noticia->nombre. " de forma exitosa.");
        return redirect()->route('front.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noticia = Noticia::find($id);

        $user_id = \Auth::user()->id;

/*
        $noticiahistorialr = NoticiaHistorial::where('user_id',$user_id);

        $noticiahistorialr = DB::table('noticiahistorials')->where('user_id',$user_id)->first();
*/
        $noticiahistorialr = \DB::select('SELECT nh.id, nh.user_id
                                            FROM noticiahistorials nh
                                            INNER JOIN noticias ns on ns.id = nh.noticia_id
                                            inner join users u on u.id = nh.user_id
                                            WHERE nh.noticia_id = "{$id}" and u.id = "{$user_id}";');


        foreach ($noticiahistorialr as $historial){
/*
            $historial->delete();

*/
            $hid = $hostial->id;
            $noticiahistorialv = NoticiaHistorial::find($hid);
            $noticiahistorialv->delete();
        }

        $noticiahistorial = new NoticiaHistorial();
        $noticiahistorial->noticia_id = $id;
        $noticiahistorial->user_id = $user_id;
        $noticiahistorial -> save();


        $noticia->load('user', 'noticiacomentarios', 'noticiahistorial');

        return view('front.noticias.show')
            ->with('noticia', $noticia);
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
