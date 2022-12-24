<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relacion uno a uno inversacion

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
