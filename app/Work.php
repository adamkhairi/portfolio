<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Work extends Model
{
    protected $fillable = [
        'name', 'img', 'description', 'rating','category_id'
    ];

    public function user()
    {
        return $this->beLongsTo('App\User');

    }

    public function category()
    {
        return $this->hasOne('App\Category');

    }
    public function getName($id)
    {
        return DB::table('categories')->where('id',$id)->first();
    }

}
