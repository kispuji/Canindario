<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;

    /**
     * Relation one to one reverse with Users
     */
    public function users(){
        $this->belongsTo('users');
    }
}
