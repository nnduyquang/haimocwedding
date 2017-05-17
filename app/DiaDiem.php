<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaDiem extends Model
{
    protected $table = 'diadiems';
    protected $fillable = [
        'name', 'path','chuthich','order','mota','anhdaidien','hinhdiadiem1','tieude1','mota1','hinhdiadiem2','tieude2','mota2','hinhdiadiem3','tieude3','mota3','hinhnenphobien','hinhnendiadiem','bando','user_id'
    ];
    protected $primaryKey = 'id';

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
