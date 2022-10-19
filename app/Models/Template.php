<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    protected $table = 'template';

    protected $fillable = [
        'file_demo',
        'file_kartu_app',
        'file_kartu_nama1',
        'file_kartu_nama2',
        'tipe',
    ];

    public function pengguna() {

        return $this->hasMany(Pengguna::class);
    }
}


