<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pkl extends Model
{
    protected $fillable = [
        'siswa_id',
        'industri_id',
        'guru_id',
        'mulai',
        'selesai'
    ];

    // Relasi ke siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
        $pkls = Pkl::all(); // ambil semua data
    return view('pkls.index', compact('pkls')); // kirim ke view
    }



    // Relasi ke industri
    public function industri()
    {
         return $this->belongsTo(Industris::class, 'industri_id');
    }

    // Relasi ke guru
    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id');
    }
}
