<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karte extends Model
{
    protected $table = 'karten';

    protected $fillable = ['medicine','discription'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
