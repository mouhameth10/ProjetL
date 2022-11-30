<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entreprises extends Model
{
    use HasFactory;
    protected $fillable =[
        'nomE','description'
    ];
    public function evoluer(){
        return $this->hasMany(evoluer::class);
    }

}
