<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Obedience;

class Order extends Model
{
    use HasFactory;

    /**
     * Relation many to many Obedicence
     */
    public function obediences(){
        $this->belongsToMany(Obedience::class);
    }
}
