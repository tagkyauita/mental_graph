<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['feeling','note'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
