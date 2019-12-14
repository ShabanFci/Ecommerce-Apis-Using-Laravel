<?php

    namespace App;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Database\Eloquent\SoftDeletes;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Laravel\Passport\HasApiTokens;
    

    class User extends Authenticatable
    {
         use Notifiable, SoftDeletes, HasApiTokens;

        protected $fillable = [
            'username', 'password', 'is_admin'
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

    }
