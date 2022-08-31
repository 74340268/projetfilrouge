<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livraison extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_livreur',
        'prenom_livreur', 
        'date_livraison',
        'heure_livraison',
        'commandeId',
    ];
    public function livraisons()
    {
        return $this->belongsTo(Commande::class, 'commandeId');
    }
}
