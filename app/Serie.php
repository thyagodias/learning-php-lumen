<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public $timestamps = false;
    protected $filable = ['nome'];

    public function episodios()
    {
        return $this->hasMany(Episodio::class);
    }
}
