<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albums';
    protected $fillable = [
        'name', 'path','mota','anhdaidien','order','tongthoigianchup','soluonganhchup','quanaocodau','quanaochure','user_id'
    ];
    protected $primaryKey = 'id';

    public function diadiems(){
        return $this->belongsToMany('App\diadiems','albumofdiadiem','id_album','id_diadiem')->withTimestamps();
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
