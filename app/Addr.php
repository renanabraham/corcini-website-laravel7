<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addr extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'city',
        'addr',
        'whatsapp',
        'phone'
    ];
}
