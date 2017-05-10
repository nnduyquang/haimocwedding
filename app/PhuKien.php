<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhuKien extends Model
{
    protected $table = 'phukiens';
    protected $fillable = [
        'name', 'order', 'user_id'
    ];
    protected $primaryKey = 'id';

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
