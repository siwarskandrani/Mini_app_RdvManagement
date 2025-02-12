<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory; #permet de créer des articles avec des factories.cvd si on veut tester avec des données fictives dans  factory on peut
    protected $fillable = ['name', 'email', 'phone'];

    public function rdvs()
    {
        return $this->hasMany(Rdv::class);
    }


}

