<x-app-layout>
 <form action="{{route('clients.update', $client->id)}}" method="POST">
     @csrf
    @method('PUT')
     <label for="">nom</label>
    <input type="text" name='name' value="{{ $client->name }}" >
     <label for="">email</label>
    <input type="text" name='email' value="{{ $client->email }}" >
    <label for="">phone</label>
    <input type="text" name='phone'  value="{{ $client->phone }}">
    <label for="">company</label>
    <input type="text" name='company' value="{{ $client->company }}" >
     <label for="">notes</label>
    <input type="text" name='notes'  value="{{ $client->notes }}">
    <button type='submit'>add</button>
 </form>
</x-app-layout>
