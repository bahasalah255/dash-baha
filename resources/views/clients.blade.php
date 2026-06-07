<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
<a  href="{{route('add')}}" >Add Client</a>
    <table>
        <thead>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th>company</th>
            <td>Actions</td>
        </thead>
        <tbody>
            @foreach($clients as $client)
           <tr>
            <td>{{  $client->name  }}</td>
            <td>{{  $client->email  }}</td>
            <td>{{  $client->phone  }}</td>
            <td>{{  $client->company  }}</td>
            <td><form action="{{route('delete' , $client->id)}}" method="POST">
                @method('DELETE')
                <button type="submit">delete</button>
            </form>
            
                <a href="{{route('edit', $client->id )}}">modifier</a>
               </td>
</tr>
@endforeach
        </tbody>
    </table>
</x-app-layout>
