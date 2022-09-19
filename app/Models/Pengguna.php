<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'pengguna';

    protected $fillable = [
        'user_id',
        'template_id',
        'no_id',
        'foto',
        'nama',
        'jenis_kelamin',
        'jabatan',
        'telepon',
        'email',
        'tanggal_bergabung',
        'tanggal_berakhir',
    ];

    public function user() {

        return $this->belongsTo(User::class);
    }

    public function template() {

        return $this->belongsTo(Template::class);
    }

    public function list_kartu() {

        return $this->hasMany(ListKartu::class,'pengguna_id','id');
    }
}
