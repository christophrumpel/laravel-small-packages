<div>
    <form wire:submit="createUser">
        <label for="name"></label>
        <input id="name" wire:model="name" type="text" placeholder="Name">
        <label for="email"></label>
        <input id="email" wire:model="email" type="email" placeholder="Email">
        <label for="password"></label>
        <input id="password" wire:model="password" type="password" placeholder="Password">

        <label for="location"></label>
        <select wire:model="location_id" id="location">
            @foreach($locations as $location)
                <option value="{{ $location->id }}">{{ $location->name }}</option>
            @endforeach
        </select>
        <button type="submit">Create User</button>
    </form>
</div>
