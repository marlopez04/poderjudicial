<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    protected $table = "notificaciones";
    protected $fillable = ['titulo','descripcion','id_user','jerarquia','importancia', 'estado'];

    public function user()
    {
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function notificacionrespuestas()
    {
        return $this->hasMany('App\NotificacionRespuesta');
    }

    public function notificacionhistorial()
    {
        return $this->hasMany('App\NotificacionHistorial');
    }

}
