<?php

namespace App\Livewire;

use App\Models\Location;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CreateUserLivewireComponent extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public int $location_id = 1;


    public function render(): View
    {
        return view('livewire.create-user-livewire-component', [
            'locations' => Location::all(),
        ]);
    }

    public function createUser(): void
    {
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'location_id' => $this->location_id,
        ]);
    }
}
