<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etudiants extends Model
{
    use HasFactory;
    protected $fillable =[
        'nom','prenom','Naiss','sexe','lieu'

    ];
    public function filiere(){
        return $this->belongsTo(filiere::class);
    }
}
