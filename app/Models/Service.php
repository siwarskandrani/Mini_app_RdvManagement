<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
   protected $fillable =['description', 'price' ];

   public function rdv()
   {
       return $this->hasMany(Rdv::class); //chaque service est lié à bcp rdv.
   }
}
