<x-layout title="Beneficiários">
    <a href="/usuarios/cadastro">Cadastre um novo beneficiário</a>

    <h1>Lista de Beneficiários</h1>
    <ul> 
        @foreach ($users as $user)
        <li>{{$user}}</li>
        @endforeach
    </ul>
</x-layout>