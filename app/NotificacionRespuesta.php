<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificacionRespuesta extends Model
{
    protected $table = "noticias";
    protected $fillable = ['titulo','descripcion','user_creador','user_pedidopor','jerarquia','importancia'];

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_creador', 'id');
    }

    public function noticiacomentarios()
    {
        return $this->hasMany('App\NoticiaComentario');
    }

    public function noticiahistorial()
    {
        return $this->hasMany('App\NoticiaHistorial');
    }

}
