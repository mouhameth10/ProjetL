<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evoluer extends Model
{
    use HasFactory;
    protected $fillable =[
        'dated','datef','primeT'

    ];
    public function etudiant(){
        return $this->belongsTo(etudiant::class);
    }
    public function entreprise(){
        return $this->belongsTo(entreprise::class);
    }
}

