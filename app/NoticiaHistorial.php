<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoticiaHistorial extends Model
{
    protected $table = "noticiahistorial";
    protected $fillable = ['noticia_id', 'user_id','jerarquia'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function noticia()
    {
        return $this->belongsTo('App\Noticia');
    }

}
