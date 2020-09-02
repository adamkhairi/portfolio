<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'name','img', 'description' ,'rating'
    ];

    public function user()
    {
        return $this->beLongsTo('App\User');

    }
}
