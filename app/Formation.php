<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable = [
        'certificate','school', 'obtained', 'description'
    ];

    public function user()
    {
        return $this->beLongsTo('App\User');

    }

}
