<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{

    protected $table = 'buyers';

 protected $fillable = [
       'user_id',
        'gender',
        'phone',
        'address',
    ];
     public function user()
    {
        return $this->belongsTo(User::class);
    }
}
