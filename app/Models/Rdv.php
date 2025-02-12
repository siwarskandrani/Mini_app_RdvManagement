<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    protected $fillable = ['client_id', 'service_id', 'date_rdv', 'status'];

    public function client()
    {
        return $this->belongsTo(Client::class); //chaque rendez-vous (rdv) est lié à un seul client.
    }

    public function service()
    {
        return $this->belongsTo(Service::class); //chaque rendez-vous (rdv) est lié à un seul client.
    }
}
