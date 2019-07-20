<?php

namespace App;

use Illuminate\Auth\Authenticatable as BasicAuthAuthenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'email',
        'password',
        'type',
    ];

    use Notifiable;

    use BasicAuthAuthenticatable;

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberTokenName()
    {
        return '';
    }

}
