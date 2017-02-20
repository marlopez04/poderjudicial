<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificacionUser extends Model
{
   protected $table = "notificaciousers";
    protected $fillable = ['id_notificacion','id_user','tipo',];

    public function user()
    {
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function notificacion()
    {
    	return $this->belongsTo('App\Notificacion', 'id_notificacion', 'id');
    }
}
