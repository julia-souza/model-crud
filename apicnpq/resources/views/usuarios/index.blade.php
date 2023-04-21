<x-layout title="Beneficiários">
    <h1>Lista de Beneficiários</h1>
    <ul> 
        @foreach ($users as $user)
        <li>{{$user}}</li>
        @endforeach
    </ul>
</x-layout>