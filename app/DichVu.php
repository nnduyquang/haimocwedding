<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DichVu extends Model
{
    protected $table = 'dichvus';
    protected $fillable = [
        'name', 'icon','note','order','user_id'
    ];
    protected $primaryKey = 'id';

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
