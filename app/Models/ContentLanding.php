<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentLanding extends Model
{
    use HasFactory;
    protected $table = 'content_landing';
    protected $guarded = ['id'];
}
