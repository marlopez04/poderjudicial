<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TareaUser extends Model
{
   protected $table = "tareasusuario";
    protected $fillable = ['id_tarea','id_user','tipo',];

    public function user()
    {
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function tarea()
    {
    	return $this->belongsTo('App\Tarea', 'id_tarea', 'id');
    }
}
