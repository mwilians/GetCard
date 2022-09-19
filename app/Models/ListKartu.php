<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListKartu extends Model
{
    use HasFactory;

    protected $table = 'list_kartu';

    protected $fillable = [
        'user_id',
        'pengguna_id',
    ];

    public function user() {

        return $this->hasMany(User::class);
    }

    public function pengguna() {

        return $this->belongsTo(Pengguna::class);
    }

}
