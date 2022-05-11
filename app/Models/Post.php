<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // This indicates that it is safe for the title and content to be updated with the create method on the route/web.php file. Without this it won't work
    // Fillable attributes are used to specify those fields which are to be mass assigned
    protected $fillable = [
        'title',
        'content'
    ];
}
