<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table      = 'Accounts';
    protected $primaryKey = 'id';

    protected $fillable = [
        'second_name', 'first_name', 'patronymic', 'email', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
