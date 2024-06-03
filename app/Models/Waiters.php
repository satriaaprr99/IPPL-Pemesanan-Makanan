<?php

namespace App\Models;

use App\Models\StatusWaiters;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Waiters extends Model
{
    use HasFactory;
    protected $table = 'waiters';
    protected $guarded = ['id'];
    protected $appends = ['recent_status'];
    public function getRecentStatusAttribute(){
        $data = StatusWaiters::select('status_waiters.*')
        ->leftJoin('pesanan', 'pesanan.id', 'status_waiters.id_pesanan')
        ->where('status_waiters.id_waiters', $this->id)->orderBy('status_waiters.id', 'desc')->first();

        return $data;
    }
}
