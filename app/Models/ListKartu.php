<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListKartu extends Model
{
    use HasFactory;

    protected $table = 'listkartu';

    protected $fillable = [
        // 'foto',
    ];

    // public function pengguna() {

    //     return $this->hasMany(Pengguna::class);
    // }

    // public function user() {

    //     return $this->hasOne(User::class);
    // }

    // public function template() {

    //     return $this->hasOne(Template::class);
    // }
}
