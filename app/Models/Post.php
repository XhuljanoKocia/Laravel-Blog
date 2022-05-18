<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    // This indicates that it is safe for the title and content to be updated with the create method on the route/web.php file. Without this it won't work
    // Fillable attributes are used to specify those fields which are to be mass assigned
    protected $fillable = [
        'title',
        'content'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User'); // Checks the posts that belong to this user
    }

    public function photos(){
        return $this->morphMany('App\Models\Photo', 'imageable');
    }

    public function tags(){
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}
