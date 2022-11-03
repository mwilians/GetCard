<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $table = 'package';

    protected $fillable = [
        'foto',
        'paket',
        'harga',
        'masa_berlaku',
        'tipe_template',
    ];

    public function payment() {

        return $this->hasMany(Payment::class);
    }
}
