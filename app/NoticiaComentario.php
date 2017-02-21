<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoticiaComentario extends Model
{
    protected $table = "noticiacomentarios";
    protected $fillable = ['descripcion', 'noticia_id', 'id_user','jerarquia','estado'];

    public function user()
    {
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function noticia()
    {
        return $this->belongsTo('App\Noticia', 'noticia_id', 'id');
    }

}
