<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staffs';

 protected $fillable = [
        'user_id',
        'gender',
        'phone',
        'dateofbirth',
        'address',
    ];
     public function user()
    {
        return $this->belongsTo(User::class);
    }
}
