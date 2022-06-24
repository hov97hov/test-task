<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTags extends Model
{

    protected $fillable = ['post_id','tag_id'];

    protected $table = ['post_tags'];

    use HasFactory;
}
