<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'clientId',
        'produitId',
    ];

    public function clients()
    {
        return $this->hasMany(Clients::class, 'clientId');
    }

    public function produit()
    {
        return $this->hasMany(Produits::class, 'produitId');
    }
    public function paiement()
    {
        return $this->hasMany(paiement::class, 'paiementId');
    }
    public function livraison()
    {
        return $this->hasMany(livraison::class, 'livraisonId');
    }

    
    }

