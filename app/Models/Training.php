<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Daily;
use App\Models\Obedience;
use App\Models\Detection;

class Training extends Model
{
    use HasFactory;

    /**
     * Relation one to one Daily
     */
    public function daily(){
        $this->hasOne(Daily::class);
    }

    /**
     * Relation one to one Obedience
     */
    public function obedience(){
        $this->hasOne(Obedience::class);
    }

    /**
     * Relation one to one Detection
     */
    public function detection(){
        $this->hasOne(Detection::class);
    }
}
