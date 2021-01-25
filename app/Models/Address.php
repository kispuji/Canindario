<?php

namespace App\Models;
use App\Models\Profile;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    /**
     * Relation ono to one with Profile
     */
    public function porfile(){
            return $this->belongsTo(Profile::class);
    }
}
