<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
<form method='post' action='{{ route('client.store');  }}'>
    <label for="">nom</label>
    <input type="text" name='name' >
     <label for="">email</label>
    <input type="text" name='email' >
    <label for="">phone</label>
    <input type="text" name='phone' >
    <label for="">company</label>
    <input type="text" name='company' >
     <label for="">notes</label>
    <input type="text" name='notes' >
    <button type='submit'>add</button>
</form>
</x-app-layout>
