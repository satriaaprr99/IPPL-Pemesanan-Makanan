<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusWaiters extends Model
{
    use HasFactory;
    protected $table = 'status_waiters';
    protected $guarded = ['id'];
}
