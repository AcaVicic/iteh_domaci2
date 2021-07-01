<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Korisnik extends Model
{
    public $table = 'korisnikaa';
    public function let()
    {
        return $this->belongsTo('App\Let');
    }
}
