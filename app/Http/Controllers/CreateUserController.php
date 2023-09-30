<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;

class CreateUserController extends Controller
{
    public function __invoke(Request $request ): void
    {
        $data = request()->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8'],
            'location_id' => ['required', 'exists:App\Models\Location,code'],
        ]);

        $data['location_id'] = Location::where('code', $data['location_id'])->first()->id;


        User::create($data);
    }
}
