<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Laporan extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [ 'isi_laporan','aspek', 'lampiran','aspek_id','user_id', 'slug' ];
    protected $with = ['aspek','user'];

    public function scopeFilter($query, array $filters){
    
        // $query->when($filters['cari'] ?? false, function($query, $cari){
        //       return $query->where('isi_laporan', 'like', '%' . $cari . '%');
        // });

        $query->when($filters['cari'] ?? false, function($query, $cari) {
           return $query->where(function($query) use ($cari) {
                $query->where('isi_laporan', 'like', '%' . $cari . '%');
            });
        });

        $query->when($filters['aspek'] ?? false, function($query, $aspek){
            return $query->whereHas('aspek', function($query) use ($aspek){
                $query->where('slug', $aspek);
            });
        });

        $query->when($filters['user'] ?? false, fn($query, $user)=>
            $query->whereHas('user', fn($query)=>
                $query->where('username', $user)
            )
        );

    }

    public function aspek(){
        return $this->belongsTo(Aspek::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'isi_laporan'
            ]
        ];
    }

}
