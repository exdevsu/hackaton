<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'second_name', 'first_name', 'patronymic', 'email', 'password', 'account_type'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
