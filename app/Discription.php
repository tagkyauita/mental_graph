<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discription extends Model
{
    protected $table = 'discription';

    protected $fillable = ['discription'];

    public function karte()
    {
        return $this->belongsTo(Karte::class);
    }

}
