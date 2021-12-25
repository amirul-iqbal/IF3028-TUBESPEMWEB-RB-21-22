<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = [ 'isi_laporan','aspek', 'lampiran','aspek_id','user_id' ];
    protected $with = ['aspek','user'];

    public function aspek(){
        return $this->belongsTo(Aspek::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
