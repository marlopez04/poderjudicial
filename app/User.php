<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username','nombre','email','password','type','jerarquia'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function noticias()
    {
        return $this->hasMany('App\Noticia');
    }

    public function noticiacomentarios()
    {
        return $this->hasMany('App\NoticiaComentario');
    }

    public function noticiahistorial()
    {
        return $this->hasMany('App\NoticiaHistorial');
    }

    public function notificaciones()
    {
        return $this->hasMany('App\Notificacion');
    }

    public function notificacionhistorials()
    {
        return $this->hasMany('App\NotificacionHistorial');
    }

    public function notificacionrespuestas()
    {
        return $this->hasMany('App\Notificacionrespuesta');
    }

    public function tareas()
    {
        return $this->hasMany('App\Tarea');
    }

    public function tareacomentarios()
    {
        return $this->hasMany('App\TareaComentario');
    }

    public function tareahistorials()
    {
        return $this->hasMany('App\TareaHistorial');
    }

}
