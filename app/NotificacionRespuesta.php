<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificacionRespuesta extends Model
{
    protected $table = "noticiarespuestas";
    protected $fillable = ['titulo','descripcion','id_user','jerarquia','importancia'];

    public function user()
    {
    	return $this->belongsTo('App\User', 'id_user', 'id');
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
