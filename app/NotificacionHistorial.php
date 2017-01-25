<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificacionHistorial extends Model
{
    protected $table = "notificacionhistorial";
    protected $fillable = ['notificacion_id','user_id','user_pedidopor','jerarquia','importancia'];

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function notificacion()
    {
        return $this->belongsTo('App\Notificacion');
    }

}
