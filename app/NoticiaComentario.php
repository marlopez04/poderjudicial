<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoticiaComentario extends Model
{
    protected $table = "noticiacomentarios";
    protected $fillable = ['descripcion', 'noticia_id', 'user_creador','jerarquia','estado'];

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_creador', 'id');
    }

    public function noticia()
    {
        return $this->belongsTo('App\Noticia');
    }

}
