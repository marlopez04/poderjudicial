<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    protected $fillable = ['id_user', 'destinatario', 'titulo','descripcion','estado'];
    
    protected $table = "notificaciones";

    public function user()
    {
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function notificacioncomentarios()
    {
        return $this->hasMany('App\NotificacionComentario');
    }

    public function notificacionhistorial()
    {
        return $this->hasMany('App\NotificacionHistorial');
    }

}
