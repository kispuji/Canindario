<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Workers;
use Illuminate\Support\Facades\Auth;


class ProfileForm extends Component
{
    
    public function render()
    {
        $user_id = Auth::id();
        
        $user = User::find($user_id);

        //$trabajadores = Workers::all()->where('user_id','=',$user_id);
        
        $trabajador = $user->worker;

        return view('livewire.profile-form', compact('trabajador'));
    }

}
