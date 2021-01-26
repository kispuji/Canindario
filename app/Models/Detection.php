<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Training;
use App\Models\Dog;
use App\Models\Sustance;
use App\Models\Searchplace;

class Detection extends Model
{
    use HasFactory;

     /**
     * Relation one to one reverse Dog
     */
    public function dog(){
        $this->belongsTo(Dog::class);
    }

    /**
     * Relation one to one reverse Training
     */
    public function training(){
        $this->belongsTo(Training::class);
    }

    /**
     * Relation many to many Sustances
     */
    public function sustances(){
        $this->belongsToMany(Sustance::class);
    }

    /**
     * Relation many to many Sustances
     */
    public function searchPlaces(){
        $this->belongsToMany(Searchplace::class);
    }
}
