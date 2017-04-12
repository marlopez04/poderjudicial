<?php

namespace App\Http\Controllers;


use App\Noticia;
use App\NoticiaHistorial;
use App\NoticiaComentario;
use App\User;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

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

        $noticia->load('user', 'noticiacomentarios', 'noticiahistorial');
        $noticia->noticiahistorial->load('user');

/*
        $noticiahistorialr = NoticiaHistorial::where('user_id',$user_id);

        $noticiahistorialr = DB::table('noticiahistorials')->where('user_id',$user_id)->first();
        $noticiahistorialr = \DB::select('SELECT nh.id as historial, nh.user_id as id
                                            FROM noticiahistorials nh
                                            INNER JOIN noticias ns on ns.id = nh.noticia_id
                                            inner join users u on u.id = nh.user_id
                                            WHERE nh.noticia_id = "{$id}" and u.id = "{$user_id}"');


        dd($noticiahistorialr);
*/

        foreach ($noticia->noticiahistorial as $historial){
            if ( $user_id == $historial->user_id){
                $hid = $historial->id;
                $noticiahistorialv = NoticiaHistorial::find($hid);
                $noticiahistorialv->delete();
            }
        }

        $noticiahistorial = new NoticiaHistorial();
        $noticiahistorial->noticia_id = $id;
        $noticiahistorial->user_id = $user_id;
        $noticiahistorial -> save();



        $noticia->load('user', 'noticiacomentarios', 'noticiahistorial');

        $users = User::orderBy('id', 'DESC')->paginate(20);

        return view('front.noticias.show')
            ->with('noticia', $noticia)
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

    $noticias = Noticia::find($id);
    return Response::csv($noticias);

/*
    $noticias = Noticia::find($id)->toArray();
    
    dd($noticias);
    $filename = "Noticias.csv";
    $handle = fopen($filename, 'w+');
    fputcsv($handle, array('descripcion', 'titulo', 'created at'));

    foreach($noticias as $row) {
        fputcsv($handle, array($row['descripcion'], $row['titulo'], $row['created_at']));
    }

    fclose($handle);

    $headers = array(
        'Content-Type' => 'text/csv',
    );

//    return Response::download($handle, 'Noticias.csv', $headers);
    return Response::download($filename, 'Noticias.csv', $headers);

*/

/*

    $headers = [
            'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0'
        ,   'Content-type'        => 'text/csv'
        ,   'Content-Disposition' => 'attachment; filename=galleries.csv'
        ,   'Expires'             => '0'
        ,   'Pragma'              => 'public'
    ];

    $list = Noticia::find($id);

//    $list = User::all()->toArray();

    # add headers for each column in the CSV download
//    array_unshift($list, array_keys($list[0]));

   $callback = function() use ($list) 
    {
        $FH = fopen('php://output', 'w');
        foreach ($list as $row) { 
            fputcsv($FH, $row);
        }
        fclose($FH);
    };

    return Response::stream($callback, 200, $headers);
*/

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
