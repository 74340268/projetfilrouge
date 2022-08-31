<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
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
    public function clients()
    {
        return $this->belongsTo(User::class, 'userId');
    }

    public function commande()
    {
        return $this->belongsTo(Commande::class, 'clientId');
    }

    public function paiement()
    {
        return $this->belongsTo(Paiement::class, 'clientId');
    }

   
}
