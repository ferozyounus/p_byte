<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    protected $guarded = [];
    protected $table = "occupation_data";
    // protected $primaryKey = 'onetsoc_code';
    public function getUsers(){
        return $this->hasMany(Member::class, 'occupation', 'title');
    }


    public function getUsersCount(){
        return $this->getUsers()->count();
    }
}
