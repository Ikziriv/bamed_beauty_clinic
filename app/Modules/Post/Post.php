<?php

namespace App\Modules\Post;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',  'title', 'img_path', 'sub_title', 'content', 'created_at', 'updated_at'
    ];

	public function category() {
	    return $this->belongsTo('App\Modules\Category\Category', 'category_id');
	}
}
