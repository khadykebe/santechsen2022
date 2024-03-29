<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nomclient',
        'prenomclient',
        'emailClient',
        'codeValidation',
    ];

    public function demande(){
        return $this->hasOne(DemandeService::class);
    }
}
