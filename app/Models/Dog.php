<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Daily;
use App\Models\Obedience;
use App\Models\Detection;

class Dog extends Model
{
    use HasFactory;

    /**
     * Relation one to one reverse with Users
     */
    public function user(){
        $this->belongsTo(User::class);
    }

    /**
     * Relation one to many with Daily
     */
    public function daylies(){
        $this->hasMany(Daily::class);
    }

    /**
     * Relation one to many with Daily
     */
    public function obediences(){
        $this->hasMany(Obedience::class);
    }

    /**
     * Relation one to many with Daily
     */
    public function detections(){
        $this->hasMany(Detection::class);
    }
}
