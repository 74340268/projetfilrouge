<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paiement extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_paiement',
        'moyen_paiement', 
        'commandeId',
    ];
    public function paiements()
    {
        return $this->belongsTo(Commande::class, 'commandeId');
    }

}
