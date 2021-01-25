<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Address;

class Profile extends Model
{
    use HasFactory;

    /**
     * Relation one to one reverse with Users
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     * Relation ono to one with Address
     */
    public function address(){
        return $this->hasOne(Address::class);
    }
}
