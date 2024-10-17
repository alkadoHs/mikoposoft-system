<?php

use function Livewire\Volt\{state};

//

?>

<div class="space-y-2">
    <x-sidebar-item href="{{ route('dashboard')}}" :active="request()->routeIs('dashboard')">
        <x-slot:icon> <x-heroicon-o-home class="size-5" /></x-slot:icon>
        Dashbaord
    </x-sidebar-item>

    <x-sidebar-item href="{{ route('profile')}}" :active="request()->routeIs('profile')" wire:navigate>
        <x-slot:icon> <x-heroicon-o-user class="size-5" /></x-slot:icon>
        Profile
    </x-sidebar-item>

    <x-sidebar-item href="{{ route('users')}}" :active="request()->routeIs('users')" wire:navigate>
        <x-slot:icon> <x-heroicon-o-users class="size-5" /></x-slot:icon>
        Employees
    </x-sidebar-item>
</div>
