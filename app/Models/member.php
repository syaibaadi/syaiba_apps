<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;
    protected $table = 'members';
    protected $fillable = [
        'nama',
        'alamat',
        'nomer',
        'status',
        'foto'
    ];
}
