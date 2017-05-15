<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DanhMucAoCuoi extends Model
{
    protected $table = 'danhmucaocuois';
    protected $fillable = [
        'name', 'anhdaidien','mota','order','user_id'
    ];
    protected $primaryKey = 'id';

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
