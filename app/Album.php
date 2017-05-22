<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albums';
    protected $fillable = [
        'name', 'path','mota','anhdaidien','anhmini','order','tongthoigianchup','soluonganhchup','quanaocodau','quanaochure','note','arrayidphukien','arrayiddichvu','IsCampaign','price','user_id'
    ];
    protected $primaryKey = 'id';

    public function diadiems(){
        return $this->belongsToMany('App\DiaDiem','albumofdiadiem','id_album','id_diadiem')->withPivot('id_diadiem')->withTimestamps();
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
