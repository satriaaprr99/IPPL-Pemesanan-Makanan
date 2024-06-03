<?php

namespace App\Models\Masterdata;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarMeja extends Model
{
    use HasFactory;
    protected $table = 'masterdata_daftar_meja';
    protected $guarded = ['id'];
}
