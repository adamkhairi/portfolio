<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Formation extends Model
{
    protected $fillable = [
        'certificate', 'school', 'obtained', 'description'
    ];

    public function user()
    {
        return $this->beLongsTo('App\User');

    }

    public function getFormation()
    {
        $formations = DB::table('formations')->get();
        return $formations;
    }

}
