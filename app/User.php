<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
//my code which i created
    public function roles(){
        return $this->belongsToMany('App\Role');//возвращает массив ролей принадл пользователю
    }

    public function hasAnyRoles($roles){//юзер может иметь несколько ролей
        return null !== $this->roles()->whereIn('name', $roles)->first();
    }
    public function hasAnyRole($role){//для редактирования конкретной роли юзера
        return null !== $this->roles()->where('name', $role)->first();
    }

}
