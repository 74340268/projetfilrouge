<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrateurs extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'password',
        'userId',
    ];
    public function administrateurs()
    {
        return $this->belongsTo(User::class, 'userId');
    }
}
