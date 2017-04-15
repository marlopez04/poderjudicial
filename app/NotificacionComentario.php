<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificacionComentario extends Model
{
    protected $table = "notificacioncomentarios";
    protected $fillable = ['descripcion', 'notificacion_id', 'id_user','jerarquia','estado'];

    public function user()
    {
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function notificacion()
    {
        return $this->belongsTo('App\Notificacion', 'notificacion_id', 'id');
    }

}
