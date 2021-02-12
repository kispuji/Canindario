<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Workers;

class Address extends Model
{
    use HasFactory;

    /**
     * Relation ono to one inversa with Profile
     */
    public function porfile(){
            return $this->belongsTo(Workers::class);
    }
}
