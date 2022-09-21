<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalRecord extends Model
{

    protected $fillable = [
        'user_id',
        'movement_id',
        'value',
        'date'
    ];

    public function movement() 
    {
        return $this->hasOne("App\Models\Movement", "id", "movement_id");
    }


}
