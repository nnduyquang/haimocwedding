<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AoCuoi extends Model
{
    protected $table = 'aocuois';
    protected $fillable = [
        'name', 'anhdaidien','mota','order','user_id','danhmucaocuoi_id'
    ];
    protected $primaryKey = 'id';

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function danhmucaocuois()
    {
        return $this->belongsTo('App\DanhMucAoCuoi', 'danhmucaocuoi_id');
    }
}
