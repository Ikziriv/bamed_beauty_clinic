<?php

namespace App\Modules\Promo;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'path_img', 'created_at', 'updated_at'
    ];
}
