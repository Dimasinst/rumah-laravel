<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelass';
    protected $primaryKey = 'id_kelas';
    protected $fillable = [
        'nama_kelas', 'kompetensi_keahlian', 'id_kelas',
    ];
}