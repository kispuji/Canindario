<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dog;
use App\Models\Training;


class Daily extends Model
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
}
