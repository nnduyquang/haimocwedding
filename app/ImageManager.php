<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageManager extends Model
{
    protected $table = 'imagemanagers';
    protected $fillable = [
        'imagename', 'id_album'
    ];
    protected $primaryKey = 'id';

}
