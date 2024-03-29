<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeService extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomTypeService',
        'status'
    ];

    public function service(){
        return $this->hasOne(Service::class);
    }

    public function utilisateurs(){

        return $this->belongsTo(Utilisateur::class);
    }
}
