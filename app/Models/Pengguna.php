<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'pengguna';

    protected $fillable = [
        'foto',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'jabatan',
        'email',
        'tanggal_bergabung',
        'tanggal_berakhir',
    ];

    public function lembaga() {

        return $this->belongsTo(Lembaga::class);
    }
}
