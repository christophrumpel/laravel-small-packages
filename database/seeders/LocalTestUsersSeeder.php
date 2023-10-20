<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class LocalTestUsersSeeder extends Seeder
{
    public function run(): void
    {
        if (app()->environment('local')) {
            User::updateOrCreate([
                'email' => 'christoph@laracasts.com',
            ], [
                'name' => 'Christoph Rumpel',
                'email' => 'christoph@laracasts.com',
                'password' => bcrypt('password'),
            ]);
        }
    }
}
