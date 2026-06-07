<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
<a  href="{{route('add')}}" >Add Project</a>
    <table>
        <thead>
            <th>client</th>
            <th>title</th>
            <th>description</th>
            <th>stack</th>
            <th>deadline</th>
            <th>status</th>
            <th>created_at</th>
            <td>update at</td>
            <td>Actions</td>
        </thead>
        <tbody>
            @foreach($projects as $project)
           <tr>
            <td>{{   $project->client->nom   }}</td>
            <td>{{  $client->title  }}</td>
            <td>{{  $client->description  }}</td>
             <td>{{  $client->stack  }}</td>
              <td>{{  $client->budget  }}</td>
               <td>{{  $client->deadline  }}</td>
                <td>{{  $client->status  }}</td>
                 <td>{{  $client->created_at  }}</td>
                   <td>{{  $client->updated_at  }}</td>
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
