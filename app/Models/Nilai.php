<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nis',
        'nama',
        'ipa',
        'ips',
        'mtk'
    ];
    
    public function Siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
