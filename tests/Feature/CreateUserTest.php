<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('can create a user with location', function () {
    $this->post('/create-user', [
        'email' => 'test@laracasts.com',
        'name' => 'Test User',
        'password' => 'password',
        'location_id' => 'NY345',
    ])->assertOk();

    $this->assertDatabaseHas('users', [
        'email' => 'test@laracasts.com',
        'name' => 'Test User',
        'location_id' => 1,
    ]);
});

it('stores user phone number', function () {
    $this->post('/create-user', [
        'email' => 'test@laracasts.com',
        'name' => 'Test User',
        'password' => 'password',
        'location_id' => 'NY345',
        'phone' => '+4366412345678',
    ])->assertOk();

    $this->assertDatabaseHas('users', [
        'phone' => '+4366412345678',
    ]);
});
