<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumPosts extends Model
{
    use HasFactory;

    protected $fillable = ['id, title, description'];
}
