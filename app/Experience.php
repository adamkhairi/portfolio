<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'company','logo', 'post', 'description'
    ];

    public function user()
    {
        return $this->beLongsTo('App\User');

    }
}
