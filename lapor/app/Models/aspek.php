<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aspek extends Model
{
    use HasFactory;

    protected $table = 'laporan';
    protected $primaryKey = 'tipe_laporan';

    protected $fillable = [
        'tipe_laporan'
    ];
}
