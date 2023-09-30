<?php

use App\Livewire\CreateUserLivewireComponent;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('can create a new user', function () {
    // Arrange  & Act
    Livewire::test(CreateUserLivewireComponent::class)
        ->set('name', 'Test User')
        ->set('email', 'test@laracasts.com')
        ->set('password', 'password')
        ->set('location_id', 1)
        ->call('createUser');

    $this->assertDatabaseHas('users', [
        'email' => 'test@laracasts.com',
        'name' => 'Test User',
        'location_id' => 1,
    ]);
});

it('makes sure properties and methods are wired', function() {
	// Arrange  & Act
    Livewire::test(CreateUserLivewireComponent::class)
        ->assertPropertyWired('name')
        ->assertPropertyWired('email')
        ->assertPropertyWired('password')
        ->assertPropertyWired('location_id')
        ->assertMethodWiredToForm('createUser');
});
