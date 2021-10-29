<?php

namespace App\Modules\Client;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name', 'email'
    ];
}
