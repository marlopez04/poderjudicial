<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoticiaUser extends Model
{
   protected $table = "noticiausers";
    protected $fillable = ['id_noticia','id_user','tipo',];

    public function user()
    {
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function noticia()
    {
    	return $this->belongsTo('App\Noticia', 'id_noticia', 'id');
    }

}
