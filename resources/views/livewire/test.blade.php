<?php

use function Livewire\Volt\{state, layout};

use Masmerise\Toaster\Toaster;

layout('layouts.app');

 $submit = function () {
     Toaster::success('User created!'); // 👈
 }


?>

<div>
    <x-primary-button wire:click="submit()">Submit</x-primary-button>

    <br>
    <br>

    <x-text-input x-data x-mask:dynamic="$money($input)" />
</div>
